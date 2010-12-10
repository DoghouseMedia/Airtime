<?php

class Application_Form_AddShow extends Zend_Form
{

    public function init()
    {	
		// Add name element
        $this->addElement('text', 'name', array(
            'label'      => 'Name:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            'validators' => array('NotEmpty')
        ));

		 // Add the description element
        $this->addElement('textarea', 'description', array(
            'label'      => 'Description:',
            'required'   => false,
		));

		// Add start date element
        $this->addElement('text', 'start_date', array(
            'label'      => 'Date Start:',
            'required'   => true,
            'filters'    => array('StringTrim'),
            'validators' => array(
				'NotEmpty',
        		array('date', false, array('YYYY-MM-DD'))
    		) 
        ));

		// Add start time element
        $this->addElement('text', 'start_time', array(
            'label'      => 'Start Time:',
            'required'   => true,
            'filters'    => array('StringTrim'),
			'validators' => array(
				'NotEmpty',
        		array('date', false, array('HH:mm'))
    		) 
        ));

		// Add duration element
        $this->addElement('text', 'duration', array(
            'label'      => 'Duration:',
            'required'   => true,
            'filters'    => array('StringTrim'),
			'validators' => array(
				'NotEmpty',
        		array('date', false, array('HH:mm'))
    		) 
        ));

		// Add repeats element
		$this->addElement('checkbox', 'repeats', array(
            'label'      => 'repeats',
            'required'   => false,
		));

		$this->addElement(
            'multiCheckbox',
            'day_check',
            array(
				'label' => 'Select Days:',
                'required' => false,
                'multiOptions' => array(
					"0" => "Sun",
					"1" => "Mon",
					"2" => "Tue",
					"3" => "Wed",
					"4" => "Thu",
					"5" => "Fri",
					"6" => "Sat",
                ),
         ));

		// Add end date element
        $this->addElement('text', 'end_date', array(
            'label'      => 'Date End:',
            'required'   => false,
            'filters'    => array('StringTrim'),
			'validators' => array(
				'NotEmpty',
        		array('date', false, array('YYYY-MM-DD'))
    		) 
        ));

		$this->addElement('checkbox', 'no_end', array(
            'label'      => 'no end',
            'required'   => false,
		));

		$user = new User();
		$options = array();
		$hosts = $user->getHosts();

		foreach ($hosts as $host) {
			$options[$host['id']] = $host['login'];
		}

		$this->addElement(
            'multiselect',
            'hosts',
            array(
				'label' => 'Hosts:',
                'required' => true,
                'multiOptions' => $options 
         ));

    }


}


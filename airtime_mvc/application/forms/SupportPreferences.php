<?php

class Application_Form_SupportPreferences extends Zend_Form_SubForm
{

    public function init()
    {
		$country_list = Application_Model_Preference::GetCountryList();
		
        $this->setDecorators(array(
            array('ViewScript', array('viewScript' => 'form/preferences_support.phtml')),
            array('File', array('viewScript' => 'form/preferences_support.phtml', 'placement' => false)))
        );

        // Phone number
        $this->addElement('text', 'Phone', array(
            'class'      => 'input_text',
            'label'      => 'Phone:',
            'required'   => false,
            'filters'    => array('StringTrim'),
            'value' => Application_Model_Preference::GetPhone(),
            'decorators' => array(
                'ViewHelper'
            )
        ));

        //Email
        $this->addElement('text', 'Email', array(
            'class'      => 'input_text',
            'label'      => 'Email:',
            'required'   => false,
            'filters'    => array('StringTrim'),
            'value' => Application_Model_Preference::GetEmail(),
            'decorators' => array(
                'ViewHelper'
            )
        ));

         // Station Web Site
        $this->addElement('text', 'StationWebSite', array(
            'label'      => 'Station Web Site:',
            'required'   => false,
            'class'      => 'input_text',
            'value' => Application_Model_Preference::GetStationWebSite(),
            'decorators' => array(
                'ViewHelper'
            )
		));

		// county list dropdown
		$this->addElement('select', 'Country', array(
			'label'		=> 'Country:',
			'required'	=> false,
			'value'		=> Application_Model_Preference::GetStationCountry(),
			'multiOptions'	=> $country_list,
			'decorators' => array(
                'ViewHelper'
            )
		));
		
		// Station city
        $this->addElement('text', 'City', array(
            'label'      => 'City:',
            'required'   => false,
            'class'      => 'input_text',
            'value' => Application_Model_Preference::GetStationCity(),
            'decorators' => array(
                'ViewHelper'
            )
		));
		
		// Station Description
        $this->addElement('textarea', 'Description', array(
            'label'      => 'Station Description:',
            'required'   => false,
            'class'      => 'input_text_area',
            'value' => Application_Model_Preference::GetStationDescription(),
            'decorators' => array(
                'ViewHelper'
            )
		));
		
		// Station Logo
		$upload = new Zend_Form_Element_File('Logo');
		$upload->setLabel('Station Logo:')
				->setRequired(false)
				->setDecorators(array('File'))
				->addValidator('Count', false, 1)
				->addValidator('Extension', false, 'jpg,png,gif')
				->addValidator('ImageSize', false, array(
					'minwidth'	=> 180,
					'minheight'	=> 180,
					'maxwidth'	=> 1000,
					'maxheight'	=>	1000));
		$this->addElement($upload);
		
        //enable support feedback
        $this->addElement('checkbox', 'SupportFeedback', array(
            'label'      => 'Send support feedback',
            'required'   => false,
            'value' => Application_Model_Preference::GetSupportFeedback(),
            'decorators' => array(
                'ViewHelper'
            )
		));

		// checkbox for publicise
        $this->addElement('checkbox', 'Publicise', array(
            'label'      => 'Publicise my station on Sourcefabric.org',
            'required'   => false,
            'value' => Application_Model_Preference::GetPublicise(),
            'decorators' => array(
                'ViewHelper'
            )
		));
		
		// text area for sending detail
        $this->addElement('textarea', 'SendInfo', array(
        	'class'		=> 'sending_textarea',
        	'required'   => false,
            'filters'    => array('StringTrim'),
        	'readonly'	=> true,
            'value' => Application_Model_Preference::GetSystemInfo(),
            'decorators' => array(
                'ViewHelper'
            )
        ));
    }
}


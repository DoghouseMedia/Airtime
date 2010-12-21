<?php


/**
 * Base class that represents a row from the 'cc_files' table.
 *
 * 
 *
 * @package    propel.generator.campcaster.om
 */
abstract class BaseCcFiles extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
  const PEER = 'CcFilesPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CcFilesPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the gunid field.
	 * @var        string
	 */
	protected $gunid;

	/**
	 * The value for the name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the mime field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $mime;

	/**
	 * The value for the ftype field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $ftype;

	/**
	 * The value for the filepath field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $filepath;

	/**
	 * The value for the state field.
	 * Note: this column has a database default value of: 'empty'
	 * @var        string
	 */
	protected $state;

	/**
	 * The value for the currentlyaccessing field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $currentlyaccessing;

	/**
	 * The value for the editedby field.
	 * @var        int
	 */
	protected $editedby;

	/**
	 * The value for the mtime field.
	 * @var        string
	 */
	protected $mtime;

	/**
	 * The value for the md5 field.
	 * @var        string
	 */
	protected $md5;

	/**
	 * The value for the track_title field.
	 * @var        string
	 */
	protected $track_title;

	/**
	 * The value for the artist_name field.
	 * @var        string
	 */
	protected $artist_name;

	/**
	 * The value for the bit_rate field.
	 * @var        string
	 */
	protected $bit_rate;

	/**
	 * The value for the sample_rate field.
	 * @var        string
	 */
	protected $sample_rate;

	/**
	 * The value for the format field.
	 * @var        string
	 */
	protected $format;

	/**
	 * The value for the length field.
	 * @var        string
	 */
	protected $length;

	/**
	 * The value for the album_title field.
	 * @var        string
	 */
	protected $album_title;

	/**
	 * The value for the genre field.
	 * @var        string
	 */
	protected $genre;

	/**
	 * The value for the comments field.
	 * @var        string
	 */
	protected $comments;

	/**
	 * The value for the year field.
	 * @var        string
	 */
	protected $year;

	/**
	 * The value for the track_number field.
	 * @var        int
	 */
	protected $track_number;

	/**
	 * The value for the channels field.
	 * @var        int
	 */
	protected $channels;

	/**
	 * The value for the url field.
	 * @var        string
	 */
	protected $url;

	/**
	 * The value for the bpm field.
	 * @var        string
	 */
	protected $bpm;

	/**
	 * The value for the rating field.
	 * @var        string
	 */
	protected $rating;

	/**
	 * The value for the encoded_by field.
	 * @var        string
	 */
	protected $encoded_by;

	/**
	 * The value for the disc_number field.
	 * @var        string
	 */
	protected $disc_number;

	/**
	 * The value for the mood field.
	 * @var        string
	 */
	protected $mood;

	/**
	 * The value for the label field.
	 * @var        string
	 */
	protected $label;

	/**
	 * The value for the composer field.
	 * @var        string
	 */
	protected $composer;

	/**
	 * The value for the encoder field.
	 * @var        string
	 */
	protected $encoder;

	/**
	 * The value for the checksum field.
	 * @var        string
	 */
	protected $checksum;

	/**
	 * The value for the lyrics field.
	 * @var        string
	 */
	protected $lyrics;

	/**
	 * The value for the orchestra field.
	 * @var        string
	 */
	protected $orchestra;

	/**
	 * The value for the conductor field.
	 * @var        string
	 */
	protected $conductor;

	/**
	 * The value for the lyricist field.
	 * @var        string
	 */
	protected $lyricist;

	/**
	 * The value for the original_lyricist field.
	 * @var        string
	 */
	protected $original_lyricist;

	/**
	 * The value for the radio_station_name field.
	 * @var        string
	 */
	protected $radio_station_name;

	/**
	 * The value for the info_url field.
	 * @var        string
	 */
	protected $info_url;

	/**
	 * The value for the artist_url field.
	 * @var        string
	 */
	protected $artist_url;

	/**
	 * The value for the audio_source_url field.
	 * @var        string
	 */
	protected $audio_source_url;

	/**
	 * The value for the radio_station_url field.
	 * @var        string
	 */
	protected $radio_station_url;

	/**
	 * The value for the buy_this_url field.
	 * @var        string
	 */
	protected $buy_this_url;

	/**
	 * The value for the isrc_number field.
	 * @var        string
	 */
	protected $isrc_number;

	/**
	 * The value for the catalog_number field.
	 * @var        string
	 */
	protected $catalog_number;

	/**
	 * The value for the original_artist field.
	 * @var        string
	 */
	protected $original_artist;

	/**
	 * The value for the copyright field.
	 * @var        string
	 */
	protected $copyright;

	/**
	 * The value for the report_datetime field.
	 * @var        string
	 */
	protected $report_datetime;

	/**
	 * The value for the report_location field.
	 * @var        string
	 */
	protected $report_location;

	/**
	 * The value for the report_organization field.
	 * @var        string
	 */
	protected $report_organization;

	/**
	 * The value for the subject field.
	 * @var        string
	 */
	protected $subject;

	/**
	 * The value for the contributor field.
	 * @var        string
	 */
	protected $contributor;

	/**
	 * The value for the language field.
	 * @var        string
	 */
	protected $language;

	/**
	 * @var        CcSubjs
	 */
	protected $aCcSubjs;

	/**
	 * @var        array CcPlaylistcontents[] Collection to store aggregation of CcPlaylistcontents objects.
	 */
	protected $collCcPlaylistcontentss;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->name = '';
		$this->mime = '';
		$this->ftype = '';
		$this->filepath = '';
		$this->state = 'empty';
		$this->currentlyaccessing = 0;
	}

	/**
	 * Initializes internal state of BaseCcFiles object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getDbId()
	{
		return $this->id;
	}

	/**
	 * Get the [gunid] column value.
	 * 
	 * @return     string
	 */
	public function getDbGunid()
	{
		return $this->gunid;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getDbName()
	{
		return $this->name;
	}

	/**
	 * Get the [mime] column value.
	 * 
	 * @return     string
	 */
	public function getDbMime()
	{
		return $this->mime;
	}

	/**
	 * Get the [ftype] column value.
	 * 
	 * @return     string
	 */
	public function getDbFtype()
	{
		return $this->ftype;
	}

	/**
	 * Get the [filepath] column value.
	 * 
	 * @return     string
	 */
	public function getDbFilepath()
	{
		return $this->filepath;
	}

	/**
	 * Get the [state] column value.
	 * 
	 * @return     string
	 */
	public function getDbState()
	{
		return $this->state;
	}

	/**
	 * Get the [currentlyaccessing] column value.
	 * 
	 * @return     int
	 */
	public function getDbCurrentlyaccessing()
	{
		return $this->currentlyaccessing;
	}

	/**
	 * Get the [editedby] column value.
	 * 
	 * @return     int
	 */
	public function getDbEditedby()
	{
		return $this->editedby;
	}

	/**
	 * Get the [optionally formatted] temporal [mtime] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDbMtime($format = 'Y-m-d H:i:s')
	{
		if ($this->mtime === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->mtime);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->mtime, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [md5] column value.
	 * 
	 * @return     string
	 */
	public function getDbMd5()
	{
		return $this->md5;
	}

	/**
	 * Get the [track_title] column value.
	 * 
	 * @return     string
	 */
	public function getDbTrackTitle()
	{
		return $this->track_title;
	}

	/**
	 * Get the [artist_name] column value.
	 * 
	 * @return     string
	 */
	public function getDbArtistName()
	{
		return $this->artist_name;
	}

	/**
	 * Get the [bit_rate] column value.
	 * 
	 * @return     string
	 */
	public function getDbBitRate()
	{
		return $this->bit_rate;
	}

	/**
	 * Get the [sample_rate] column value.
	 * 
	 * @return     string
	 */
	public function getDbSampleRate()
	{
		return $this->sample_rate;
	}

	/**
	 * Get the [format] column value.
	 * 
	 * @return     string
	 */
	public function getDbFormat()
	{
		return $this->format;
	}

	/**
	 * Get the [optionally formatted] temporal [length] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDbLength($format = '%X')
	{
		if ($this->length === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->length);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->length, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [album_title] column value.
	 * 
	 * @return     string
	 */
	public function getDbAlbumTitle()
	{
		return $this->album_title;
	}

	/**
	 * Get the [genre] column value.
	 * 
	 * @return     string
	 */
	public function getDbGenre()
	{
		return $this->genre;
	}

	/**
	 * Get the [comments] column value.
	 * 
	 * @return     string
	 */
	public function getDbComments()
	{
		return $this->comments;
	}

	/**
	 * Get the [year] column value.
	 * 
	 * @return     string
	 */
	public function getDbYear()
	{
		return $this->year;
	}

	/**
	 * Get the [track_number] column value.
	 * 
	 * @return     int
	 */
	public function getDbTrackNumber()
	{
		return $this->track_number;
	}

	/**
	 * Get the [channels] column value.
	 * 
	 * @return     int
	 */
	public function getDbChannels()
	{
		return $this->channels;
	}

	/**
	 * Get the [url] column value.
	 * 
	 * @return     string
	 */
	public function getDbUrl()
	{
		return $this->url;
	}

	/**
	 * Get the [bpm] column value.
	 * 
	 * @return     string
	 */
	public function getDbBpm()
	{
		return $this->bpm;
	}

	/**
	 * Get the [rating] column value.
	 * 
	 * @return     string
	 */
	public function getDbRating()
	{
		return $this->rating;
	}

	/**
	 * Get the [encoded_by] column value.
	 * 
	 * @return     string
	 */
	public function getDbEncodedBy()
	{
		return $this->encoded_by;
	}

	/**
	 * Get the [disc_number] column value.
	 * 
	 * @return     string
	 */
	public function getDbDiscNumber()
	{
		return $this->disc_number;
	}

	/**
	 * Get the [mood] column value.
	 * 
	 * @return     string
	 */
	public function getDbMood()
	{
		return $this->mood;
	}

	/**
	 * Get the [label] column value.
	 * 
	 * @return     string
	 */
	public function getDbLabel()
	{
		return $this->label;
	}

	/**
	 * Get the [composer] column value.
	 * 
	 * @return     string
	 */
	public function getDbComposer()
	{
		return $this->composer;
	}

	/**
	 * Get the [encoder] column value.
	 * 
	 * @return     string
	 */
	public function getDbEncoder()
	{
		return $this->encoder;
	}

	/**
	 * Get the [checksum] column value.
	 * 
	 * @return     string
	 */
	public function getDbChecksum()
	{
		return $this->checksum;
	}

	/**
	 * Get the [lyrics] column value.
	 * 
	 * @return     string
	 */
	public function getDbLyrics()
	{
		return $this->lyrics;
	}

	/**
	 * Get the [orchestra] column value.
	 * 
	 * @return     string
	 */
	public function getDbOrchestra()
	{
		return $this->orchestra;
	}

	/**
	 * Get the [conductor] column value.
	 * 
	 * @return     string
	 */
	public function getDbConductor()
	{
		return $this->conductor;
	}

	/**
	 * Get the [lyricist] column value.
	 * 
	 * @return     string
	 */
	public function getDbLyricist()
	{
		return $this->lyricist;
	}

	/**
	 * Get the [original_lyricist] column value.
	 * 
	 * @return     string
	 */
	public function getDbOriginalLyricist()
	{
		return $this->original_lyricist;
	}

	/**
	 * Get the [radio_station_name] column value.
	 * 
	 * @return     string
	 */
	public function getDbRadioStationName()
	{
		return $this->radio_station_name;
	}

	/**
	 * Get the [info_url] column value.
	 * 
	 * @return     string
	 */
	public function getDbInfoUrl()
	{
		return $this->info_url;
	}

	/**
	 * Get the [artist_url] column value.
	 * 
	 * @return     string
	 */
	public function getDbArtistUrl()
	{
		return $this->artist_url;
	}

	/**
	 * Get the [audio_source_url] column value.
	 * 
	 * @return     string
	 */
	public function getDbAudioSourceUrl()
	{
		return $this->audio_source_url;
	}

	/**
	 * Get the [radio_station_url] column value.
	 * 
	 * @return     string
	 */
	public function getDbRadioStationUrl()
	{
		return $this->radio_station_url;
	}

	/**
	 * Get the [buy_this_url] column value.
	 * 
	 * @return     string
	 */
	public function getDbBuyThisUrl()
	{
		return $this->buy_this_url;
	}

	/**
	 * Get the [isrc_number] column value.
	 * 
	 * @return     string
	 */
	public function getDbIsrcNumber()
	{
		return $this->isrc_number;
	}

	/**
	 * Get the [catalog_number] column value.
	 * 
	 * @return     string
	 */
	public function getDbCatalogNumber()
	{
		return $this->catalog_number;
	}

	/**
	 * Get the [original_artist] column value.
	 * 
	 * @return     string
	 */
	public function getDbOriginalArtist()
	{
		return $this->original_artist;
	}

	/**
	 * Get the [copyright] column value.
	 * 
	 * @return     string
	 */
	public function getDbCopyright()
	{
		return $this->copyright;
	}

	/**
	 * Get the [report_datetime] column value.
	 * 
	 * @return     string
	 */
	public function getDbReportDatetime()
	{
		return $this->report_datetime;
	}

	/**
	 * Get the [report_location] column value.
	 * 
	 * @return     string
	 */
	public function getDbReportLocation()
	{
		return $this->report_location;
	}

	/**
	 * Get the [report_organization] column value.
	 * 
	 * @return     string
	 */
	public function getDbReportOrganization()
	{
		return $this->report_organization;
	}

	/**
	 * Get the [subject] column value.
	 * 
	 * @return     string
	 */
	public function getDbSubject()
	{
		return $this->subject;
	}

	/**
	 * Get the [contributor] column value.
	 * 
	 * @return     string
	 */
	public function getDbContributor()
	{
		return $this->contributor;
	}

	/**
	 * Get the [language] column value.
	 * 
	 * @return     string
	 */
	public function getDbLanguage()
	{
		return $this->language;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CcFilesPeer::ID;
		}

		return $this;
	} // setDbId()

	/**
	 * Set the value of [gunid] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbGunid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->gunid !== $v) {
			$this->gunid = $v;
			$this->modifiedColumns[] = CcFilesPeer::GUNID;
		}

		return $this;
	} // setDbGunid()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v || $this->isNew()) {
			$this->name = $v;
			$this->modifiedColumns[] = CcFilesPeer::NAME;
		}

		return $this;
	} // setDbName()

	/**
	 * Set the value of [mime] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbMime($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->mime !== $v || $this->isNew()) {
			$this->mime = $v;
			$this->modifiedColumns[] = CcFilesPeer::MIME;
		}

		return $this;
	} // setDbMime()

	/**
	 * Set the value of [ftype] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbFtype($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ftype !== $v || $this->isNew()) {
			$this->ftype = $v;
			$this->modifiedColumns[] = CcFilesPeer::FTYPE;
		}

		return $this;
	} // setDbFtype()

	/**
	 * Set the value of [filepath] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbFilepath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->filepath !== $v || $this->isNew()) {
			$this->filepath = $v;
			$this->modifiedColumns[] = CcFilesPeer::FILEPATH;
		}

		return $this;
	} // setDbFilepath()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v || $this->isNew()) {
			$this->state = $v;
			$this->modifiedColumns[] = CcFilesPeer::STATE;
		}

		return $this;
	} // setDbState()

	/**
	 * Set the value of [currentlyaccessing] column.
	 * 
	 * @param      int $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbCurrentlyaccessing($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->currentlyaccessing !== $v || $this->isNew()) {
			$this->currentlyaccessing = $v;
			$this->modifiedColumns[] = CcFilesPeer::CURRENTLYACCESSING;
		}

		return $this;
	} // setDbCurrentlyaccessing()

	/**
	 * Set the value of [editedby] column.
	 * 
	 * @param      int $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbEditedby($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->editedby !== $v) {
			$this->editedby = $v;
			$this->modifiedColumns[] = CcFilesPeer::EDITEDBY;
		}

		if ($this->aCcSubjs !== null && $this->aCcSubjs->getDbId() !== $v) {
			$this->aCcSubjs = null;
		}

		return $this;
	} // setDbEditedby()

	/**
	 * Sets the value of [mtime] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbMtime($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->mtime !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->mtime !== null && $tmpDt = new DateTime($this->mtime)) ? $tmpDt->format('Y-m-d\\TH:i:sO') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d\\TH:i:sO') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->mtime = ($dt ? $dt->format('Y-m-d\\TH:i:sO') : null);
				$this->modifiedColumns[] = CcFilesPeer::MTIME;
			}
		} // if either are not null

		return $this;
	} // setDbMtime()

	/**
	 * Set the value of [md5] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbMd5($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->md5 !== $v) {
			$this->md5 = $v;
			$this->modifiedColumns[] = CcFilesPeer::MD5;
		}

		return $this;
	} // setDbMd5()

	/**
	 * Set the value of [track_title] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbTrackTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->track_title !== $v) {
			$this->track_title = $v;
			$this->modifiedColumns[] = CcFilesPeer::TRACK_TITLE;
		}

		return $this;
	} // setDbTrackTitle()

	/**
	 * Set the value of [artist_name] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbArtistName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->artist_name !== $v) {
			$this->artist_name = $v;
			$this->modifiedColumns[] = CcFilesPeer::ARTIST_NAME;
		}

		return $this;
	} // setDbArtistName()

	/**
	 * Set the value of [bit_rate] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbBitRate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bit_rate !== $v) {
			$this->bit_rate = $v;
			$this->modifiedColumns[] = CcFilesPeer::BIT_RATE;
		}

		return $this;
	} // setDbBitRate()

	/**
	 * Set the value of [sample_rate] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbSampleRate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sample_rate !== $v) {
			$this->sample_rate = $v;
			$this->modifiedColumns[] = CcFilesPeer::SAMPLE_RATE;
		}

		return $this;
	} // setDbSampleRate()

	/**
	 * Set the value of [format] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbFormat($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->format !== $v) {
			$this->format = $v;
			$this->modifiedColumns[] = CcFilesPeer::FORMAT;
		}

		return $this;
	} // setDbFormat()

	/**
	 * Sets the value of [length] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbLength($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->length !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->length !== null && $tmpDt = new DateTime($this->length)) ? $tmpDt->format('H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->length = ($dt ? $dt->format('H:i:s') : null);
				$this->modifiedColumns[] = CcFilesPeer::LENGTH;
			}
		} // if either are not null

		return $this;
	} // setDbLength()

	/**
	 * Set the value of [album_title] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbAlbumTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->album_title !== $v) {
			$this->album_title = $v;
			$this->modifiedColumns[] = CcFilesPeer::ALBUM_TITLE;
		}

		return $this;
	} // setDbAlbumTitle()

	/**
	 * Set the value of [genre] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbGenre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->genre !== $v) {
			$this->genre = $v;
			$this->modifiedColumns[] = CcFilesPeer::GENRE;
		}

		return $this;
	} // setDbGenre()

	/**
	 * Set the value of [comments] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbComments($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comments !== $v) {
			$this->comments = $v;
			$this->modifiedColumns[] = CcFilesPeer::COMMENTS;
		}

		return $this;
	} // setDbComments()

	/**
	 * Set the value of [year] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbYear($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->year !== $v) {
			$this->year = $v;
			$this->modifiedColumns[] = CcFilesPeer::YEAR;
		}

		return $this;
	} // setDbYear()

	/**
	 * Set the value of [track_number] column.
	 * 
	 * @param      int $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbTrackNumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->track_number !== $v) {
			$this->track_number = $v;
			$this->modifiedColumns[] = CcFilesPeer::TRACK_NUMBER;
		}

		return $this;
	} // setDbTrackNumber()

	/**
	 * Set the value of [channels] column.
	 * 
	 * @param      int $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbChannels($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->channels !== $v) {
			$this->channels = $v;
			$this->modifiedColumns[] = CcFilesPeer::CHANNELS;
		}

		return $this;
	} // setDbChannels()

	/**
	 * Set the value of [url] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->url !== $v) {
			$this->url = $v;
			$this->modifiedColumns[] = CcFilesPeer::URL;
		}

		return $this;
	} // setDbUrl()

	/**
	 * Set the value of [bpm] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbBpm($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bpm !== $v) {
			$this->bpm = $v;
			$this->modifiedColumns[] = CcFilesPeer::BPM;
		}

		return $this;
	} // setDbBpm()

	/**
	 * Set the value of [rating] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbRating($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->rating !== $v) {
			$this->rating = $v;
			$this->modifiedColumns[] = CcFilesPeer::RATING;
		}

		return $this;
	} // setDbRating()

	/**
	 * Set the value of [encoded_by] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbEncodedBy($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->encoded_by !== $v) {
			$this->encoded_by = $v;
			$this->modifiedColumns[] = CcFilesPeer::ENCODED_BY;
		}

		return $this;
	} // setDbEncodedBy()

	/**
	 * Set the value of [disc_number] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbDiscNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->disc_number !== $v) {
			$this->disc_number = $v;
			$this->modifiedColumns[] = CcFilesPeer::DISC_NUMBER;
		}

		return $this;
	} // setDbDiscNumber()

	/**
	 * Set the value of [mood] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbMood($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->mood !== $v) {
			$this->mood = $v;
			$this->modifiedColumns[] = CcFilesPeer::MOOD;
		}

		return $this;
	} // setDbMood()

	/**
	 * Set the value of [label] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbLabel($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->label !== $v) {
			$this->label = $v;
			$this->modifiedColumns[] = CcFilesPeer::LABEL;
		}

		return $this;
	} // setDbLabel()

	/**
	 * Set the value of [composer] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbComposer($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->composer !== $v) {
			$this->composer = $v;
			$this->modifiedColumns[] = CcFilesPeer::COMPOSER;
		}

		return $this;
	} // setDbComposer()

	/**
	 * Set the value of [encoder] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbEncoder($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->encoder !== $v) {
			$this->encoder = $v;
			$this->modifiedColumns[] = CcFilesPeer::ENCODER;
		}

		return $this;
	} // setDbEncoder()

	/**
	 * Set the value of [checksum] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbChecksum($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->checksum !== $v) {
			$this->checksum = $v;
			$this->modifiedColumns[] = CcFilesPeer::CHECKSUM;
		}

		return $this;
	} // setDbChecksum()

	/**
	 * Set the value of [lyrics] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbLyrics($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lyrics !== $v) {
			$this->lyrics = $v;
			$this->modifiedColumns[] = CcFilesPeer::LYRICS;
		}

		return $this;
	} // setDbLyrics()

	/**
	 * Set the value of [orchestra] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbOrchestra($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->orchestra !== $v) {
			$this->orchestra = $v;
			$this->modifiedColumns[] = CcFilesPeer::ORCHESTRA;
		}

		return $this;
	} // setDbOrchestra()

	/**
	 * Set the value of [conductor] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbConductor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->conductor !== $v) {
			$this->conductor = $v;
			$this->modifiedColumns[] = CcFilesPeer::CONDUCTOR;
		}

		return $this;
	} // setDbConductor()

	/**
	 * Set the value of [lyricist] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbLyricist($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lyricist !== $v) {
			$this->lyricist = $v;
			$this->modifiedColumns[] = CcFilesPeer::LYRICIST;
		}

		return $this;
	} // setDbLyricist()

	/**
	 * Set the value of [original_lyricist] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbOriginalLyricist($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->original_lyricist !== $v) {
			$this->original_lyricist = $v;
			$this->modifiedColumns[] = CcFilesPeer::ORIGINAL_LYRICIST;
		}

		return $this;
	} // setDbOriginalLyricist()

	/**
	 * Set the value of [radio_station_name] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbRadioStationName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->radio_station_name !== $v) {
			$this->radio_station_name = $v;
			$this->modifiedColumns[] = CcFilesPeer::RADIO_STATION_NAME;
		}

		return $this;
	} // setDbRadioStationName()

	/**
	 * Set the value of [info_url] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbInfoUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->info_url !== $v) {
			$this->info_url = $v;
			$this->modifiedColumns[] = CcFilesPeer::INFO_URL;
		}

		return $this;
	} // setDbInfoUrl()

	/**
	 * Set the value of [artist_url] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbArtistUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->artist_url !== $v) {
			$this->artist_url = $v;
			$this->modifiedColumns[] = CcFilesPeer::ARTIST_URL;
		}

		return $this;
	} // setDbArtistUrl()

	/**
	 * Set the value of [audio_source_url] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbAudioSourceUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->audio_source_url !== $v) {
			$this->audio_source_url = $v;
			$this->modifiedColumns[] = CcFilesPeer::AUDIO_SOURCE_URL;
		}

		return $this;
	} // setDbAudioSourceUrl()

	/**
	 * Set the value of [radio_station_url] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbRadioStationUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->radio_station_url !== $v) {
			$this->radio_station_url = $v;
			$this->modifiedColumns[] = CcFilesPeer::RADIO_STATION_URL;
		}

		return $this;
	} // setDbRadioStationUrl()

	/**
	 * Set the value of [buy_this_url] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbBuyThisUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->buy_this_url !== $v) {
			$this->buy_this_url = $v;
			$this->modifiedColumns[] = CcFilesPeer::BUY_THIS_URL;
		}

		return $this;
	} // setDbBuyThisUrl()

	/**
	 * Set the value of [isrc_number] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbIsrcNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->isrc_number !== $v) {
			$this->isrc_number = $v;
			$this->modifiedColumns[] = CcFilesPeer::ISRC_NUMBER;
		}

		return $this;
	} // setDbIsrcNumber()

	/**
	 * Set the value of [catalog_number] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbCatalogNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->catalog_number !== $v) {
			$this->catalog_number = $v;
			$this->modifiedColumns[] = CcFilesPeer::CATALOG_NUMBER;
		}

		return $this;
	} // setDbCatalogNumber()

	/**
	 * Set the value of [original_artist] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbOriginalArtist($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->original_artist !== $v) {
			$this->original_artist = $v;
			$this->modifiedColumns[] = CcFilesPeer::ORIGINAL_ARTIST;
		}

		return $this;
	} // setDbOriginalArtist()

	/**
	 * Set the value of [copyright] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbCopyright($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->copyright !== $v) {
			$this->copyright = $v;
			$this->modifiedColumns[] = CcFilesPeer::COPYRIGHT;
		}

		return $this;
	} // setDbCopyright()

	/**
	 * Set the value of [report_datetime] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbReportDatetime($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->report_datetime !== $v) {
			$this->report_datetime = $v;
			$this->modifiedColumns[] = CcFilesPeer::REPORT_DATETIME;
		}

		return $this;
	} // setDbReportDatetime()

	/**
	 * Set the value of [report_location] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbReportLocation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->report_location !== $v) {
			$this->report_location = $v;
			$this->modifiedColumns[] = CcFilesPeer::REPORT_LOCATION;
		}

		return $this;
	} // setDbReportLocation()

	/**
	 * Set the value of [report_organization] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbReportOrganization($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->report_organization !== $v) {
			$this->report_organization = $v;
			$this->modifiedColumns[] = CcFilesPeer::REPORT_ORGANIZATION;
		}

		return $this;
	} // setDbReportOrganization()

	/**
	 * Set the value of [subject] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbSubject($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subject !== $v) {
			$this->subject = $v;
			$this->modifiedColumns[] = CcFilesPeer::SUBJECT;
		}

		return $this;
	} // setDbSubject()

	/**
	 * Set the value of [contributor] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbContributor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->contributor !== $v) {
			$this->contributor = $v;
			$this->modifiedColumns[] = CcFilesPeer::CONTRIBUTOR;
		}

		return $this;
	} // setDbContributor()

	/**
	 * Set the value of [language] column.
	 * 
	 * @param      string $v new value
	 * @return     CcFiles The current object (for fluent API support)
	 */
	public function setDbLanguage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->language !== $v) {
			$this->language = $v;
			$this->modifiedColumns[] = CcFilesPeer::LANGUAGE;
		}

		return $this;
	} // setDbLanguage()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->name !== '') {
				return false;
			}

			if ($this->mime !== '') {
				return false;
			}

			if ($this->ftype !== '') {
				return false;
			}

			if ($this->filepath !== '') {
				return false;
			}

			if ($this->state !== 'empty') {
				return false;
			}

			if ($this->currentlyaccessing !== 0) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->gunid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->mime = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->ftype = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->filepath = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->state = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->currentlyaccessing = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->editedby = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->mtime = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->md5 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->track_title = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->artist_name = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->bit_rate = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->sample_rate = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->format = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->length = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->album_title = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->genre = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->comments = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->year = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->track_number = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->channels = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
			$this->url = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->bpm = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->rating = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->encoded_by = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->disc_number = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->mood = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
			$this->label = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
			$this->composer = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
			$this->encoder = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
			$this->checksum = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
			$this->lyrics = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
			$this->orchestra = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
			$this->conductor = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
			$this->lyricist = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
			$this->original_lyricist = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
			$this->radio_station_name = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
			$this->info_url = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
			$this->artist_url = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
			$this->audio_source_url = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
			$this->radio_station_url = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
			$this->buy_this_url = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
			$this->isrc_number = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
			$this->catalog_number = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
			$this->original_artist = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
			$this->copyright = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
			$this->report_datetime = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
			$this->report_location = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
			$this->report_organization = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
			$this->subject = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
			$this->contributor = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
			$this->language = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 54; // 54 = CcFilesPeer::NUM_COLUMNS - CcFilesPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating CcFiles object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aCcSubjs !== null && $this->editedby !== $this->aCcSubjs->getDbId()) {
			$this->aCcSubjs = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CcFilesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CcFilesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCcSubjs = null;
			$this->collCcPlaylistcontentss = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CcFilesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				CcFilesQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CcFilesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				CcFilesPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCcSubjs !== null) {
				if ($this->aCcSubjs->isModified() || $this->aCcSubjs->isNew()) {
					$affectedRows += $this->aCcSubjs->save($con);
				}
				$this->setCcSubjs($this->aCcSubjs);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CcFilesPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(CcFilesPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.CcFilesPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setDbId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += CcFilesPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collCcPlaylistcontentss !== null) {
				foreach ($this->collCcPlaylistcontentss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCcSubjs !== null) {
				if (!$this->aCcSubjs->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCcSubjs->getValidationFailures());
				}
			}


			if (($retval = CcFilesPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCcPlaylistcontentss !== null) {
					foreach ($this->collCcPlaylistcontentss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CcFilesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getDbId();
				break;
			case 1:
				return $this->getDbGunid();
				break;
			case 2:
				return $this->getDbName();
				break;
			case 3:
				return $this->getDbMime();
				break;
			case 4:
				return $this->getDbFtype();
				break;
			case 5:
				return $this->getDbFilepath();
				break;
			case 6:
				return $this->getDbState();
				break;
			case 7:
				return $this->getDbCurrentlyaccessing();
				break;
			case 8:
				return $this->getDbEditedby();
				break;
			case 9:
				return $this->getDbMtime();
				break;
			case 10:
				return $this->getDbMd5();
				break;
			case 11:
				return $this->getDbTrackTitle();
				break;
			case 12:
				return $this->getDbArtistName();
				break;
			case 13:
				return $this->getDbBitRate();
				break;
			case 14:
				return $this->getDbSampleRate();
				break;
			case 15:
				return $this->getDbFormat();
				break;
			case 16:
				return $this->getDbLength();
				break;
			case 17:
				return $this->getDbAlbumTitle();
				break;
			case 18:
				return $this->getDbGenre();
				break;
			case 19:
				return $this->getDbComments();
				break;
			case 20:
				return $this->getDbYear();
				break;
			case 21:
				return $this->getDbTrackNumber();
				break;
			case 22:
				return $this->getDbChannels();
				break;
			case 23:
				return $this->getDbUrl();
				break;
			case 24:
				return $this->getDbBpm();
				break;
			case 25:
				return $this->getDbRating();
				break;
			case 26:
				return $this->getDbEncodedBy();
				break;
			case 27:
				return $this->getDbDiscNumber();
				break;
			case 28:
				return $this->getDbMood();
				break;
			case 29:
				return $this->getDbLabel();
				break;
			case 30:
				return $this->getDbComposer();
				break;
			case 31:
				return $this->getDbEncoder();
				break;
			case 32:
				return $this->getDbChecksum();
				break;
			case 33:
				return $this->getDbLyrics();
				break;
			case 34:
				return $this->getDbOrchestra();
				break;
			case 35:
				return $this->getDbConductor();
				break;
			case 36:
				return $this->getDbLyricist();
				break;
			case 37:
				return $this->getDbOriginalLyricist();
				break;
			case 38:
				return $this->getDbRadioStationName();
				break;
			case 39:
				return $this->getDbInfoUrl();
				break;
			case 40:
				return $this->getDbArtistUrl();
				break;
			case 41:
				return $this->getDbAudioSourceUrl();
				break;
			case 42:
				return $this->getDbRadioStationUrl();
				break;
			case 43:
				return $this->getDbBuyThisUrl();
				break;
			case 44:
				return $this->getDbIsrcNumber();
				break;
			case 45:
				return $this->getDbCatalogNumber();
				break;
			case 46:
				return $this->getDbOriginalArtist();
				break;
			case 47:
				return $this->getDbCopyright();
				break;
			case 48:
				return $this->getDbReportDatetime();
				break;
			case 49:
				return $this->getDbReportLocation();
				break;
			case 50:
				return $this->getDbReportOrganization();
				break;
			case 51:
				return $this->getDbSubject();
				break;
			case 52:
				return $this->getDbContributor();
				break;
			case 53:
				return $this->getDbLanguage();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. 
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $includeForeignObjects = false)
	{
		$keys = CcFilesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getDbId(),
			$keys[1] => $this->getDbGunid(),
			$keys[2] => $this->getDbName(),
			$keys[3] => $this->getDbMime(),
			$keys[4] => $this->getDbFtype(),
			$keys[5] => $this->getDbFilepath(),
			$keys[6] => $this->getDbState(),
			$keys[7] => $this->getDbCurrentlyaccessing(),
			$keys[8] => $this->getDbEditedby(),
			$keys[9] => $this->getDbMtime(),
			$keys[10] => $this->getDbMd5(),
			$keys[11] => $this->getDbTrackTitle(),
			$keys[12] => $this->getDbArtistName(),
			$keys[13] => $this->getDbBitRate(),
			$keys[14] => $this->getDbSampleRate(),
			$keys[15] => $this->getDbFormat(),
			$keys[16] => $this->getDbLength(),
			$keys[17] => $this->getDbAlbumTitle(),
			$keys[18] => $this->getDbGenre(),
			$keys[19] => $this->getDbComments(),
			$keys[20] => $this->getDbYear(),
			$keys[21] => $this->getDbTrackNumber(),
			$keys[22] => $this->getDbChannels(),
			$keys[23] => $this->getDbUrl(),
			$keys[24] => $this->getDbBpm(),
			$keys[25] => $this->getDbRating(),
			$keys[26] => $this->getDbEncodedBy(),
			$keys[27] => $this->getDbDiscNumber(),
			$keys[28] => $this->getDbMood(),
			$keys[29] => $this->getDbLabel(),
			$keys[30] => $this->getDbComposer(),
			$keys[31] => $this->getDbEncoder(),
			$keys[32] => $this->getDbChecksum(),
			$keys[33] => $this->getDbLyrics(),
			$keys[34] => $this->getDbOrchestra(),
			$keys[35] => $this->getDbConductor(),
			$keys[36] => $this->getDbLyricist(),
			$keys[37] => $this->getDbOriginalLyricist(),
			$keys[38] => $this->getDbRadioStationName(),
			$keys[39] => $this->getDbInfoUrl(),
			$keys[40] => $this->getDbArtistUrl(),
			$keys[41] => $this->getDbAudioSourceUrl(),
			$keys[42] => $this->getDbRadioStationUrl(),
			$keys[43] => $this->getDbBuyThisUrl(),
			$keys[44] => $this->getDbIsrcNumber(),
			$keys[45] => $this->getDbCatalogNumber(),
			$keys[46] => $this->getDbOriginalArtist(),
			$keys[47] => $this->getDbCopyright(),
			$keys[48] => $this->getDbReportDatetime(),
			$keys[49] => $this->getDbReportLocation(),
			$keys[50] => $this->getDbReportOrganization(),
			$keys[51] => $this->getDbSubject(),
			$keys[52] => $this->getDbContributor(),
			$keys[53] => $this->getDbLanguage(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCcSubjs) {
				$result['CcSubjs'] = $this->aCcSubjs->toArray($keyType, $includeLazyLoadColumns, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CcFilesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setDbId($value);
				break;
			case 1:
				$this->setDbGunid($value);
				break;
			case 2:
				$this->setDbName($value);
				break;
			case 3:
				$this->setDbMime($value);
				break;
			case 4:
				$this->setDbFtype($value);
				break;
			case 5:
				$this->setDbFilepath($value);
				break;
			case 6:
				$this->setDbState($value);
				break;
			case 7:
				$this->setDbCurrentlyaccessing($value);
				break;
			case 8:
				$this->setDbEditedby($value);
				break;
			case 9:
				$this->setDbMtime($value);
				break;
			case 10:
				$this->setDbMd5($value);
				break;
			case 11:
				$this->setDbTrackTitle($value);
				break;
			case 12:
				$this->setDbArtistName($value);
				break;
			case 13:
				$this->setDbBitRate($value);
				break;
			case 14:
				$this->setDbSampleRate($value);
				break;
			case 15:
				$this->setDbFormat($value);
				break;
			case 16:
				$this->setDbLength($value);
				break;
			case 17:
				$this->setDbAlbumTitle($value);
				break;
			case 18:
				$this->setDbGenre($value);
				break;
			case 19:
				$this->setDbComments($value);
				break;
			case 20:
				$this->setDbYear($value);
				break;
			case 21:
				$this->setDbTrackNumber($value);
				break;
			case 22:
				$this->setDbChannels($value);
				break;
			case 23:
				$this->setDbUrl($value);
				break;
			case 24:
				$this->setDbBpm($value);
				break;
			case 25:
				$this->setDbRating($value);
				break;
			case 26:
				$this->setDbEncodedBy($value);
				break;
			case 27:
				$this->setDbDiscNumber($value);
				break;
			case 28:
				$this->setDbMood($value);
				break;
			case 29:
				$this->setDbLabel($value);
				break;
			case 30:
				$this->setDbComposer($value);
				break;
			case 31:
				$this->setDbEncoder($value);
				break;
			case 32:
				$this->setDbChecksum($value);
				break;
			case 33:
				$this->setDbLyrics($value);
				break;
			case 34:
				$this->setDbOrchestra($value);
				break;
			case 35:
				$this->setDbConductor($value);
				break;
			case 36:
				$this->setDbLyricist($value);
				break;
			case 37:
				$this->setDbOriginalLyricist($value);
				break;
			case 38:
				$this->setDbRadioStationName($value);
				break;
			case 39:
				$this->setDbInfoUrl($value);
				break;
			case 40:
				$this->setDbArtistUrl($value);
				break;
			case 41:
				$this->setDbAudioSourceUrl($value);
				break;
			case 42:
				$this->setDbRadioStationUrl($value);
				break;
			case 43:
				$this->setDbBuyThisUrl($value);
				break;
			case 44:
				$this->setDbIsrcNumber($value);
				break;
			case 45:
				$this->setDbCatalogNumber($value);
				break;
			case 46:
				$this->setDbOriginalArtist($value);
				break;
			case 47:
				$this->setDbCopyright($value);
				break;
			case 48:
				$this->setDbReportDatetime($value);
				break;
			case 49:
				$this->setDbReportLocation($value);
				break;
			case 50:
				$this->setDbReportOrganization($value);
				break;
			case 51:
				$this->setDbSubject($value);
				break;
			case 52:
				$this->setDbContributor($value);
				break;
			case 53:
				$this->setDbLanguage($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CcFilesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setDbId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDbGunid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDbName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDbMime($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDbFtype($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDbFilepath($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDbState($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDbCurrentlyaccessing($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDbEditedby($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDbMtime($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDbMd5($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDbTrackTitle($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDbArtistName($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDbBitRate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDbSampleRate($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDbFormat($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDbLength($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDbAlbumTitle($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDbGenre($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDbComments($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDbYear($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDbTrackNumber($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDbChannels($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setDbUrl($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setDbBpm($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setDbRating($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setDbEncodedBy($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDbDiscNumber($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setDbMood($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setDbLabel($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setDbComposer($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setDbEncoder($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDbChecksum($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setDbLyrics($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setDbOrchestra($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setDbConductor($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setDbLyricist($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setDbOriginalLyricist($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setDbRadioStationName($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setDbInfoUrl($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setDbArtistUrl($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setDbAudioSourceUrl($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setDbRadioStationUrl($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setDbBuyThisUrl($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setDbIsrcNumber($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setDbCatalogNumber($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setDbOriginalArtist($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setDbCopyright($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setDbReportDatetime($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setDbReportLocation($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setDbReportOrganization($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setDbSubject($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setDbContributor($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setDbLanguage($arr[$keys[53]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CcFilesPeer::DATABASE_NAME);

		if ($this->isColumnModified(CcFilesPeer::ID)) $criteria->add(CcFilesPeer::ID, $this->id);
		if ($this->isColumnModified(CcFilesPeer::GUNID)) $criteria->add(CcFilesPeer::GUNID, $this->gunid);
		if ($this->isColumnModified(CcFilesPeer::NAME)) $criteria->add(CcFilesPeer::NAME, $this->name);
		if ($this->isColumnModified(CcFilesPeer::MIME)) $criteria->add(CcFilesPeer::MIME, $this->mime);
		if ($this->isColumnModified(CcFilesPeer::FTYPE)) $criteria->add(CcFilesPeer::FTYPE, $this->ftype);
		if ($this->isColumnModified(CcFilesPeer::FILEPATH)) $criteria->add(CcFilesPeer::FILEPATH, $this->filepath);
		if ($this->isColumnModified(CcFilesPeer::STATE)) $criteria->add(CcFilesPeer::STATE, $this->state);
		if ($this->isColumnModified(CcFilesPeer::CURRENTLYACCESSING)) $criteria->add(CcFilesPeer::CURRENTLYACCESSING, $this->currentlyaccessing);
		if ($this->isColumnModified(CcFilesPeer::EDITEDBY)) $criteria->add(CcFilesPeer::EDITEDBY, $this->editedby);
		if ($this->isColumnModified(CcFilesPeer::MTIME)) $criteria->add(CcFilesPeer::MTIME, $this->mtime);
		if ($this->isColumnModified(CcFilesPeer::MD5)) $criteria->add(CcFilesPeer::MD5, $this->md5);
		if ($this->isColumnModified(CcFilesPeer::TRACK_TITLE)) $criteria->add(CcFilesPeer::TRACK_TITLE, $this->track_title);
		if ($this->isColumnModified(CcFilesPeer::ARTIST_NAME)) $criteria->add(CcFilesPeer::ARTIST_NAME, $this->artist_name);
		if ($this->isColumnModified(CcFilesPeer::BIT_RATE)) $criteria->add(CcFilesPeer::BIT_RATE, $this->bit_rate);
		if ($this->isColumnModified(CcFilesPeer::SAMPLE_RATE)) $criteria->add(CcFilesPeer::SAMPLE_RATE, $this->sample_rate);
		if ($this->isColumnModified(CcFilesPeer::FORMAT)) $criteria->add(CcFilesPeer::FORMAT, $this->format);
		if ($this->isColumnModified(CcFilesPeer::LENGTH)) $criteria->add(CcFilesPeer::LENGTH, $this->length);
		if ($this->isColumnModified(CcFilesPeer::ALBUM_TITLE)) $criteria->add(CcFilesPeer::ALBUM_TITLE, $this->album_title);
		if ($this->isColumnModified(CcFilesPeer::GENRE)) $criteria->add(CcFilesPeer::GENRE, $this->genre);
		if ($this->isColumnModified(CcFilesPeer::COMMENTS)) $criteria->add(CcFilesPeer::COMMENTS, $this->comments);
		if ($this->isColumnModified(CcFilesPeer::YEAR)) $criteria->add(CcFilesPeer::YEAR, $this->year);
		if ($this->isColumnModified(CcFilesPeer::TRACK_NUMBER)) $criteria->add(CcFilesPeer::TRACK_NUMBER, $this->track_number);
		if ($this->isColumnModified(CcFilesPeer::CHANNELS)) $criteria->add(CcFilesPeer::CHANNELS, $this->channels);
		if ($this->isColumnModified(CcFilesPeer::URL)) $criteria->add(CcFilesPeer::URL, $this->url);
		if ($this->isColumnModified(CcFilesPeer::BPM)) $criteria->add(CcFilesPeer::BPM, $this->bpm);
		if ($this->isColumnModified(CcFilesPeer::RATING)) $criteria->add(CcFilesPeer::RATING, $this->rating);
		if ($this->isColumnModified(CcFilesPeer::ENCODED_BY)) $criteria->add(CcFilesPeer::ENCODED_BY, $this->encoded_by);
		if ($this->isColumnModified(CcFilesPeer::DISC_NUMBER)) $criteria->add(CcFilesPeer::DISC_NUMBER, $this->disc_number);
		if ($this->isColumnModified(CcFilesPeer::MOOD)) $criteria->add(CcFilesPeer::MOOD, $this->mood);
		if ($this->isColumnModified(CcFilesPeer::LABEL)) $criteria->add(CcFilesPeer::LABEL, $this->label);
		if ($this->isColumnModified(CcFilesPeer::COMPOSER)) $criteria->add(CcFilesPeer::COMPOSER, $this->composer);
		if ($this->isColumnModified(CcFilesPeer::ENCODER)) $criteria->add(CcFilesPeer::ENCODER, $this->encoder);
		if ($this->isColumnModified(CcFilesPeer::CHECKSUM)) $criteria->add(CcFilesPeer::CHECKSUM, $this->checksum);
		if ($this->isColumnModified(CcFilesPeer::LYRICS)) $criteria->add(CcFilesPeer::LYRICS, $this->lyrics);
		if ($this->isColumnModified(CcFilesPeer::ORCHESTRA)) $criteria->add(CcFilesPeer::ORCHESTRA, $this->orchestra);
		if ($this->isColumnModified(CcFilesPeer::CONDUCTOR)) $criteria->add(CcFilesPeer::CONDUCTOR, $this->conductor);
		if ($this->isColumnModified(CcFilesPeer::LYRICIST)) $criteria->add(CcFilesPeer::LYRICIST, $this->lyricist);
		if ($this->isColumnModified(CcFilesPeer::ORIGINAL_LYRICIST)) $criteria->add(CcFilesPeer::ORIGINAL_LYRICIST, $this->original_lyricist);
		if ($this->isColumnModified(CcFilesPeer::RADIO_STATION_NAME)) $criteria->add(CcFilesPeer::RADIO_STATION_NAME, $this->radio_station_name);
		if ($this->isColumnModified(CcFilesPeer::INFO_URL)) $criteria->add(CcFilesPeer::INFO_URL, $this->info_url);
		if ($this->isColumnModified(CcFilesPeer::ARTIST_URL)) $criteria->add(CcFilesPeer::ARTIST_URL, $this->artist_url);
		if ($this->isColumnModified(CcFilesPeer::AUDIO_SOURCE_URL)) $criteria->add(CcFilesPeer::AUDIO_SOURCE_URL, $this->audio_source_url);
		if ($this->isColumnModified(CcFilesPeer::RADIO_STATION_URL)) $criteria->add(CcFilesPeer::RADIO_STATION_URL, $this->radio_station_url);
		if ($this->isColumnModified(CcFilesPeer::BUY_THIS_URL)) $criteria->add(CcFilesPeer::BUY_THIS_URL, $this->buy_this_url);
		if ($this->isColumnModified(CcFilesPeer::ISRC_NUMBER)) $criteria->add(CcFilesPeer::ISRC_NUMBER, $this->isrc_number);
		if ($this->isColumnModified(CcFilesPeer::CATALOG_NUMBER)) $criteria->add(CcFilesPeer::CATALOG_NUMBER, $this->catalog_number);
		if ($this->isColumnModified(CcFilesPeer::ORIGINAL_ARTIST)) $criteria->add(CcFilesPeer::ORIGINAL_ARTIST, $this->original_artist);
		if ($this->isColumnModified(CcFilesPeer::COPYRIGHT)) $criteria->add(CcFilesPeer::COPYRIGHT, $this->copyright);
		if ($this->isColumnModified(CcFilesPeer::REPORT_DATETIME)) $criteria->add(CcFilesPeer::REPORT_DATETIME, $this->report_datetime);
		if ($this->isColumnModified(CcFilesPeer::REPORT_LOCATION)) $criteria->add(CcFilesPeer::REPORT_LOCATION, $this->report_location);
		if ($this->isColumnModified(CcFilesPeer::REPORT_ORGANIZATION)) $criteria->add(CcFilesPeer::REPORT_ORGANIZATION, $this->report_organization);
		if ($this->isColumnModified(CcFilesPeer::SUBJECT)) $criteria->add(CcFilesPeer::SUBJECT, $this->subject);
		if ($this->isColumnModified(CcFilesPeer::CONTRIBUTOR)) $criteria->add(CcFilesPeer::CONTRIBUTOR, $this->contributor);
		if ($this->isColumnModified(CcFilesPeer::LANGUAGE)) $criteria->add(CcFilesPeer::LANGUAGE, $this->language);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CcFilesPeer::DATABASE_NAME);
		$criteria->add(CcFilesPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getDbId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setDbId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getDbId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of CcFiles (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setDbGunid($this->gunid);
		$copyObj->setDbName($this->name);
		$copyObj->setDbMime($this->mime);
		$copyObj->setDbFtype($this->ftype);
		$copyObj->setDbFilepath($this->filepath);
		$copyObj->setDbState($this->state);
		$copyObj->setDbCurrentlyaccessing($this->currentlyaccessing);
		$copyObj->setDbEditedby($this->editedby);
		$copyObj->setDbMtime($this->mtime);
		$copyObj->setDbMd5($this->md5);
		$copyObj->setDbTrackTitle($this->track_title);
		$copyObj->setDbArtistName($this->artist_name);
		$copyObj->setDbBitRate($this->bit_rate);
		$copyObj->setDbSampleRate($this->sample_rate);
		$copyObj->setDbFormat($this->format);
		$copyObj->setDbLength($this->length);
		$copyObj->setDbAlbumTitle($this->album_title);
		$copyObj->setDbGenre($this->genre);
		$copyObj->setDbComments($this->comments);
		$copyObj->setDbYear($this->year);
		$copyObj->setDbTrackNumber($this->track_number);
		$copyObj->setDbChannels($this->channels);
		$copyObj->setDbUrl($this->url);
		$copyObj->setDbBpm($this->bpm);
		$copyObj->setDbRating($this->rating);
		$copyObj->setDbEncodedBy($this->encoded_by);
		$copyObj->setDbDiscNumber($this->disc_number);
		$copyObj->setDbMood($this->mood);
		$copyObj->setDbLabel($this->label);
		$copyObj->setDbComposer($this->composer);
		$copyObj->setDbEncoder($this->encoder);
		$copyObj->setDbChecksum($this->checksum);
		$copyObj->setDbLyrics($this->lyrics);
		$copyObj->setDbOrchestra($this->orchestra);
		$copyObj->setDbConductor($this->conductor);
		$copyObj->setDbLyricist($this->lyricist);
		$copyObj->setDbOriginalLyricist($this->original_lyricist);
		$copyObj->setDbRadioStationName($this->radio_station_name);
		$copyObj->setDbInfoUrl($this->info_url);
		$copyObj->setDbArtistUrl($this->artist_url);
		$copyObj->setDbAudioSourceUrl($this->audio_source_url);
		$copyObj->setDbRadioStationUrl($this->radio_station_url);
		$copyObj->setDbBuyThisUrl($this->buy_this_url);
		$copyObj->setDbIsrcNumber($this->isrc_number);
		$copyObj->setDbCatalogNumber($this->catalog_number);
		$copyObj->setDbOriginalArtist($this->original_artist);
		$copyObj->setDbCopyright($this->copyright);
		$copyObj->setDbReportDatetime($this->report_datetime);
		$copyObj->setDbReportLocation($this->report_location);
		$copyObj->setDbReportOrganization($this->report_organization);
		$copyObj->setDbSubject($this->subject);
		$copyObj->setDbContributor($this->contributor);
		$copyObj->setDbLanguage($this->language);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCcPlaylistcontentss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCcPlaylistcontents($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);
		$copyObj->setDbId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     CcFiles Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     CcFilesPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CcFilesPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a CcSubjs object.
	 *
	 * @param      CcSubjs $v
	 * @return     CcFiles The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCcSubjs(CcSubjs $v = null)
	{
		if ($v === null) {
			$this->setDbEditedby(NULL);
		} else {
			$this->setDbEditedby($v->getDbId());
		}

		$this->aCcSubjs = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the CcSubjs object, it will not be re-added.
		if ($v !== null) {
			$v->addCcFiles($this);
		}

		return $this;
	}


	/**
	 * Get the associated CcSubjs object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     CcSubjs The associated CcSubjs object.
	 * @throws     PropelException
	 */
	public function getCcSubjs(PropelPDO $con = null)
	{
		if ($this->aCcSubjs === null && ($this->editedby !== null)) {
			$this->aCcSubjs = CcSubjsQuery::create()->findPk($this->editedby, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCcSubjs->addCcFiless($this);
			 */
		}
		return $this->aCcSubjs;
	}

	/**
	 * Clears out the collCcPlaylistcontentss collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCcPlaylistcontentss()
	 */
	public function clearCcPlaylistcontentss()
	{
		$this->collCcPlaylistcontentss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCcPlaylistcontentss collection.
	 *
	 * By default this just sets the collCcPlaylistcontentss collection to an empty array (like clearcollCcPlaylistcontentss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCcPlaylistcontentss()
	{
		$this->collCcPlaylistcontentss = new PropelObjectCollection();
		$this->collCcPlaylistcontentss->setModel('CcPlaylistcontents');
	}

	/**
	 * Gets an array of CcPlaylistcontents objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this CcFiles is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array CcPlaylistcontents[] List of CcPlaylistcontents objects
	 * @throws     PropelException
	 */
	public function getCcPlaylistcontentss($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCcPlaylistcontentss || null !== $criteria) {
			if ($this->isNew() && null === $this->collCcPlaylistcontentss) {
				// return empty collection
				$this->initCcPlaylistcontentss();
			} else {
				$collCcPlaylistcontentss = CcPlaylistcontentsQuery::create(null, $criteria)
					->filterByCcFiles($this)
					->find($con);
				if (null !== $criteria) {
					return $collCcPlaylistcontentss;
				}
				$this->collCcPlaylistcontentss = $collCcPlaylistcontentss;
			}
		}
		return $this->collCcPlaylistcontentss;
	}

	/**
	 * Returns the number of related CcPlaylistcontents objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related CcPlaylistcontents objects.
	 * @throws     PropelException
	 */
	public function countCcPlaylistcontentss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCcPlaylistcontentss || null !== $criteria) {
			if ($this->isNew() && null === $this->collCcPlaylistcontentss) {
				return 0;
			} else {
				$query = CcPlaylistcontentsQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCcFiles($this)
					->count($con);
			}
		} else {
			return count($this->collCcPlaylistcontentss);
		}
	}

	/**
	 * Method called to associate a CcPlaylistcontents object to this object
	 * through the CcPlaylistcontents foreign key attribute.
	 *
	 * @param      CcPlaylistcontents $l CcPlaylistcontents
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCcPlaylistcontents(CcPlaylistcontents $l)
	{
		if ($this->collCcPlaylistcontentss === null) {
			$this->initCcPlaylistcontentss();
		}
		if (!$this->collCcPlaylistcontentss->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCcPlaylistcontentss[]= $l;
			$l->setCcFiles($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this CcFiles is new, it will return
	 * an empty collection; or if this CcFiles has previously
	 * been saved, it will retrieve related CcPlaylistcontentss from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in CcFiles.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array CcPlaylistcontents[] List of CcPlaylistcontents objects
	 */
	public function getCcPlaylistcontentssJoinCcPlaylist($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = CcPlaylistcontentsQuery::create(null, $criteria);
		$query->joinWith('CcPlaylist', $join_behavior);

		return $this->getCcPlaylistcontentss($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->gunid = null;
		$this->name = null;
		$this->mime = null;
		$this->ftype = null;
		$this->filepath = null;
		$this->state = null;
		$this->currentlyaccessing = null;
		$this->editedby = null;
		$this->mtime = null;
		$this->md5 = null;
		$this->track_title = null;
		$this->artist_name = null;
		$this->bit_rate = null;
		$this->sample_rate = null;
		$this->format = null;
		$this->length = null;
		$this->album_title = null;
		$this->genre = null;
		$this->comments = null;
		$this->year = null;
		$this->track_number = null;
		$this->channels = null;
		$this->url = null;
		$this->bpm = null;
		$this->rating = null;
		$this->encoded_by = null;
		$this->disc_number = null;
		$this->mood = null;
		$this->label = null;
		$this->composer = null;
		$this->encoder = null;
		$this->checksum = null;
		$this->lyrics = null;
		$this->orchestra = null;
		$this->conductor = null;
		$this->lyricist = null;
		$this->original_lyricist = null;
		$this->radio_station_name = null;
		$this->info_url = null;
		$this->artist_url = null;
		$this->audio_source_url = null;
		$this->radio_station_url = null;
		$this->buy_this_url = null;
		$this->isrc_number = null;
		$this->catalog_number = null;
		$this->original_artist = null;
		$this->copyright = null;
		$this->report_datetime = null;
		$this->report_location = null;
		$this->report_organization = null;
		$this->subject = null;
		$this->contributor = null;
		$this->language = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collCcPlaylistcontentss) {
				foreach ((array) $this->collCcPlaylistcontentss as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collCcPlaylistcontentss = null;
		$this->aCcSubjs = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		throw new PropelException('Call to undefined method: ' . $name);
	}

} // BaseCcFiles

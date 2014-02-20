<?php
/**
 * Doctrine Entity 
 * Demo using Entity Mapping
 */
class Demo_Model_City
{
    /**
	 * @var integer City Id
     */
    private $_ID;

    /**
	 * @var string City Name
     */
    private $_Name;

    /**
	 * @var Demo_Model_Country Country
     */
    private $_Country;

    /**
	 * @var string Country Code
     */
    private $_CountryCode;

    /**
	 * @var string City District
     */
    private $_District;
	
    /**
	 * @var integer Population
     */
    private $_Population;

	/**
	 * Set Language
	 * @param string $sValue Name
	 * @return Demo_Model_City
	 */
    public function setName($sValue) {
        $this->_Name = $sValue;
        return $this;
    }

	/**
	 * Set CountryCode
	 * @param string $sValue CountryCode
	 * @return Demo_Model_City
	 */
    public function setCountryCode($sValue) {
        $this->_CountryCode = $sValue;
        return $this;
    }

	/**
	 * Set District
	 * @param string $sValue District
	 * @return Demo_Model_City
	 */
    public function setDistrict($sValue) {
        $this->_District = $sValue;
        return $this;
    }

	/**
	 * Set Population
	 * @param string $fValue Population
	 * @return Demo_Model_City
	 */
    public function setPopulation($fValue) {
        $this->_Population = $fValue;
        return $this;
    }

	/**
	 * Get Id
	 * @return integer 
	 */
    public function getId() {
        return $this->_ID;
    }

	/**
	 * Get Id
	 * @return integer 
	 */
    public function getName() {
        return $this->_Name;
    }

	/**
	 * Get CountryCode
	 * @return string 
	 */
    public function getCountryCode() {
        return $this->_CountryCode;
    }

	/**
	 * Get District
	 * @return string 
	 */
    public function getDistrict() {
        return $this->_District;
    }

	/**
	 * Get Population
	 * @return float 
	 */
    public function getPopulation() {
        return $this->_Population;
    }
	
}	

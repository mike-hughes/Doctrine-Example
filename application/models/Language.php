<?php
/**
 * Doctrine Entity 
 * Demo using Entity Mapping
 */
class Demo_Model_Language
{
    /**
	 * @var Demo_Model_Country Country
     */
    private $_CountryCode;

    /**
	 * @var Demo_Model_Country Country
     */
    private $_Country;

    /**
	 * @var string Country Language
     */
    private $_Language;

    /**
	 * @var string IsOfficial Language
     */
    private $_IsOfficial;

    /**
	 * @var float
     */
    private $_Percentage;
	
	/**
	 * Set Country Code
	 * @param Demo_Model_Country $oValue
	 * @return Demo_Model_Language
	 */
    public function setCountry($oValue) {
        $this->_Country = $oValue;
        return $this;
    }

	/**
	 * Set Language
	 * @param string $sValue Country Language
	 * @return Demo_Model_Language
	 */
    public function setLanguage($sValue) {
        $this->_Language = $sValue;
        return $this;
    }

	/**
	 * Set IsOfficial
	 * @param string $sValue IsOfficial
	 * @return Demo_Model_Language
	 */
    public function setIsOfficial($sValue) {
        $this->_IsOfficial = $sValue;
        return $this;
    }

	/**
	 * Set Percentage
	 * @param float $sValue Percentage
	 * @return Demo_Model_Country
	 */
    public function setPercentage($fValue) {
        $this->_Percentage = $fValue;
        return $this;
    }

	/**
	 * Get Code
	 * @return string 
	 */
    public function getCountry() {
        return $this->_Country;
    }

	/**
	 * Get Language
	 * @return string 
	 */
    public function getLanguage() {
        return $this->_Language;
    }

	/**
	 * Get IsOfficial
	 * @return string 
	 */
    public function getIsOfficial() {
        return $this->_IsOfficial;
    }

	/**
	 * Get Percentage
	 * @return float 
	 */
    public function getPercentage() {
        return $this->_Percentage;
    }
}	

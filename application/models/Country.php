<?php
/**
 * Doctrine Entity 
 * Demo using Entity Mapping
 */
class Demo_Model_Country
{
    /**
	 * @var string Country Code
     */
    private $_Code;

    /**
	 * @var string Country Name
     */
    private $_Name;

    /**
	 * @var string Continent
     */
    private $_Continent;

    /**
	 * @var string Region
     */
    private $_Region;

    /**
	 * @var float SurfaceArea
     */
    private $_SurfaceArea;
	
    /**
	 * @var integer IndepYear
     */
    private $_IndepYear;
	
    /**
	 * @var integer Population
     */
    private $_Population;

    /**
	 * @var float LifeExpectancy
     */
    private $_LifeExpectancy;

    /**
	 * @var float GNP
     */
    private $_GNP;

    /**
	 * @var float GNPOld
     */
    private $_GNPOld;
	
    /**
	 * @var string LocalName
     */
    private $_LocalName;
	
    /**
	 * @var string GovernmentForm
     */
    private $_GovernmentForm;
	
    /**
	 * @var string HeadOfState
     */
    private $_HeadOfState;
	
    /**
	 * @var integer HeadOfState
     */
    private $_Capital;
	
    /**
	 * @var string Code2
     */
    private $_Code2;
	
    /**
	 * @var array 
     */
	private $_Languages;
	
    /**
	 * @var array
     */
    private $_Cities;

	/**
	 * Set Code
	 * @param string $sValue Country Code
	 * @return Demo_Model_Country
	 */
    public function __construct() {
		$this->_Languages = new Doctrine\Common\Collections\ArrayCollection();
		$this->_Cities = new Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Set Code
	 * @param string $sValue Country Code
	 * @return Demo_Model_Country
	 */
    public function setCode($sValue) {
        $this->_Code = $sValue;
        return $this;
    }

	/**
	 * Set Name
	 * @param string $sValue Country Name
	 * @return Demo_Model_Country
	 */
    public function setName($sValue) {
        $this->_Name = $sValue;
        return $this;
    }

	/**
	 * Set Continent
	 * @param string $sValue Country Continent
	 * @return Demo_Model_Country
	 */
    public function setContinent($sValue) {
        $this->_Continent = $sValue;
        return $this;
    }

	/**
	 * Set Region
	 * @param string $sValue Country Region
	 * @return Demo_Model_Country
	 */
    public function setRegion($sValue) {
        $this->_Region = $sValue;
        return $this;
    }

	/**
	 * Set SurfaceArea
	 * @param float $fValue Country SurfaceArea
	 * @return Demo_Model_Country
	 */
    public function setSurfaceArea($fValue) {
        $this->_SurfaceArea = $fValue;
        return $this;
    }

	/**
	 * Set IndepYear
	 * @param integer $iValue Country Independent Year
	 * @return Demo_Model_Country
	 */
    public function setIndepYear($iValue) {
        $this->_IndepYear = $iValue;
        return $this;
    }
	
	/**
	 * Set Population
	 * @param integer $iValue Country Population
	 * @return Demo_Model_Country
	 */
    public function setPopulation($iValue) {
        $this->_Population = $iValue;
        return $this;
    }

	/**
	 * Set LifeExpectancy
	 * @param float $fValue Country Life Expectancy
	 * @return Demo_Model_Country
	 */
    public function setLifeExpectancy($fValue) {
        $this->_SurfaceArea = $fValue;
        return $this;
    }
	
	/**
	 * Set GNP
	 * @param float $fValue Country GNP
	 * @return Demo_Model_Country
	 */
    public function setGNP($fValue) {
        $this->_GNP = $fValue;
        return $this;
    }

	/**
	 * Set GNPOld
	 * @param float $fValue Country Old GNP
	 * @return Demo_Model_Country
	 */
    public function setGNPOld($fValue) {
        $this->_GNPOld = $fValue;
        return $this;
    }
	
	/**
	 * Set LocalName
	 * @param string $sValue Country Local Name
	 * @return Demo_Model_Country
	 */
    public function setLocalName($sValue) {
        $this->_LocalName = $sValue;
        return $this;
    }
	
	/**
	 * Set GovernmentForm
	 * @param string $sValue Country Government Form
	 * @return Demo_Model_Country
	 */
    public function setGovernmentForm($sValue) {
        $this->_GovernmentForm = $sValue;
        return $this;
    }
	
	/**
	 * Set HeadOfState
	 * @param string $sValue Country Head Of State
	 * @return Demo_Model_Country
	 */
    public function setHeadOfState($sValue) {
        $this->_HeadOfState = $sValue;
        return $this;
    }

	/**
	 * Set Capital
	 * @param string $sValue Country Capital
     * @return Demo_Model_Country
	 */
    public function setCapital($iValue) {
        $this->_Capital = $iValue;
        return $this;
    }
	
	/**
	 * Set Code2
	 * @param string $sValue Country Code2
	 * @return Demo_Model_Country
	 */
    public function setCode2($sValue) {
        $this->_Code2 = $sValue;
        return $this;
    }
	
	/**
	 * Get Code
	 * @return string 
	 */
    public function getCode() {
        return $this->_Code;
    }

	/**
	 * Get Name
	 * @return string 
	 */
    public function getName() {
        return $this->_Name;
    }

	/**
	 * Get Continent
	 * @return string 
	 */
    public function getContinent() {
        return $this->_Continent;
    }

	/**
	 * Get Region
	 * @return string 
	 */
    public function getRegion() {
        return $this->_Region;
    }

	/**
	 * Get SurfaceArea
	 * @return float 
	 */
    public function getSurfaceArea() {
        return $this->_SurfaceArea;
    }

	/**
	 * Get IndepYear
	 * @return integer 
	 */
    public function getIndepYear() {
        return $this->_IndepYear;
    }
	
	/**
	 * Get Population
	 * @return integer 
	 */
    public function getPopulation() {
        return $this->_Population;
    }

	/**
	 * Get LifeExpectancy
	 * @return float 
	 */
    public function getLifeExpectancy() {
        return $this->_SurfaceArea;
    }
	
	/**
	 * Get GNP
	 * @return float 
	 */
    public function getGNP() {
        return $this->_GNP;
    }

	/**
	 * Get GNPOld
	 * @return float 
	 */
    public function getGNPOld() {
        return $this->_GNPOld;
    }
	
	/**
	 * Get LocalName
	 * @return string 
	 */
    public function getLocalName() {
        return $this->_LocalName;
    }
	
	/**
	 * Get GovernmentForm
	 * @return string 
	 */
    public function getGovernmentForm() {
        return $this->_GovernmentForm;
    }
	
	/**
	 * Get HeadOfState
	 * @return string 
	 */
    public function getHeadOfState() {
        return $this->_HeadOfState;
    }

	/**
	 * Get Capital
	 * @return string 
	 */
    public function getCapital() {
        return $this->_Capital;
    }
	
	/**
	 * Get Code2
	 * @return string
	 */
    public function getCode2() {
        return $this->_Code2;
    }
	
	/**
	 * Get Language
	 * @return array
	 */
    public function getLanguages() {
        return $this->_Languages;
    }

	/**
	 * Get City
	 * @return array
	 */
    public function getCities() {
        return $this->_Cities;
    }
}	

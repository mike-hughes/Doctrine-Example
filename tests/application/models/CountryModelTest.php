<?php

class CountryModelTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        parent::setUp();
    }
	
    public function testGetSetCode()
    {
		$oObject = new Demo_Model_Country();
		$oObject->setCode('AAA');
        $this->assertEquals($oObject->getCode(), 'AAA');
    }
	
    public function testGetSetName()
    {
		$oObject = new Demo_Model_Country();
		$oObject->setName('Test');
        $this->assertEquals($oObject->getName(), 'Test');
    }

	/**
	 * Get Name
	 * @return string 
	 */
    public function testGetSetContinent() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setContinent('Test');
        $this->assertEquals($oObject->getContinent(), 'Test');
    }

	/**
	 * Get Name
	 * @return string 
	 */
    public function testGetSetRegion() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setRegion('Test');
        $this->assertEquals($oObject->getRegion(), 'Test');
    }

	/**
	 * Get Name
	 * @return float 
	 */
    public function testGetSetSurfaceArea() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setSurfaceArea(111);
        $this->assertEquals($oObject->getSurfaceArea(), 111);
    }
	/**
	 * Get Name
	 * @return integer 
	 */
    public function testGetSetIndepYear() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setIndepYear(1971);
        $this->assertEquals($oObject->getIndepYear(), 1971);
    }

	/**
	 * Get Population
	 * @return integer 
	 */
    public function testGetSetPopulation() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setPopulation(1000);
        $this->assertEquals($oObject->getPopulation(), 1000);
    }

	/**
	 * Get LifeExpectancy
	 * @return float 
	 */
    public function testGetSetLifeExpectancy()  
	{
		$oObject = new Demo_Model_Country();
		$oObject->setLifeExpectancy(1000);
        $this->assertEquals($oObject->getLifeExpectancy(), 1000);
    }

	
	/**
	 * Get GNP
	 * @return float 
	 */
    public function testGetSetGNP() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setGNP(1000);
        $this->assertEquals($oObject->getGNP(), 1000);
    }
	

	/**
	 * Get GNPOld
	 * @return float 
	 */
    public function testGetSetGNPOld() 
	{
		$oObject = new Demo_Model_Country();
		$oObject->setGNPOld(1000);
        $this->assertEquals($oObject->getGNPOld(), 1000);
    }

	
	/**
	 * Get LocalName
	 * @return string 
	 */
    public function testGetSetLocalName() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setLocalName('AAA');
        $this->assertEquals($oObject->getLocalName(), 'AAA');
    }
	
	
	/**
	 * Get GovernmentForm
	 * @return string 
	 */
    public function testGetSetGovernmentForm() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setGovernmentForm('AAA');
        $this->assertEquals($oObject->getGovernmentForm(), 'AAA');
    }
	
	/**
	 * Get HeadOfState
	 * @return string 
	 */
    public function testGetSetHeadOfState() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setHeadOfState('John Smith');
        $this->assertEquals($oObject->getHeadOfState(), 'John Smith');
    }

	/**
	 * Get Capital
	 * @return string 
	 */
    public function testGetSetCapital() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setCapital(111);
        $this->assertEquals($oObject->getCapital(), 111);
    }
	
	/**
	 * Get Code2
	 * @return string
	 */
    public function testGetSetCode2() 
    {
		$oObject = new Demo_Model_Country();
		$oObject->setCode2('AA');
        $this->assertEquals($oObject->getCode2(), 'AA');
    }
}


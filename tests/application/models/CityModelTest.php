<?php

class CityModelTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        parent::setUp();
    }
	
    public function testGetSetName()
    {
		$oObject = new Demo_Model_City();
		$oObject->setName('AAA');
        $this->assertEquals($oObject->getName(), 'AAA');
    }
	
    public function testGetSetCountryCode()
    {
		$oObject = new Demo_Model_City();
		$oObject->setCountryCode('AAA');
        $this->assertEquals($oObject->getCountryCode(), 'AAA');
    }

    public function testGetSetDistrict()
    {
		$oObject = new Demo_Model_City();
		$oObject->setDistrict('AAA');
        $this->assertEquals($oObject->getDistrict(), 'AAA');
    }

    public function testGetSetPopulation()
    {
		$oObject = new Demo_Model_City();
		$oObject->setPopulation(25);
        $this->assertEquals($oObject->getPopulation(), 25);
    }

}


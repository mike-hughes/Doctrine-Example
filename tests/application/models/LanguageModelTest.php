<?php

class LanguageModelTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        parent::setUp();
    }
	
    public function testGetSetLanguage()
    {
		$oObject = new Demo_Model_Language();
		$oObject->setLanguage('English');
        $this->assertEquals($oObject->getLanguage(), 'English');
    }

    public function testGetSetIsOfficial()
    {
		$oObject = new Demo_Model_Language();
		$oObject->setIsOfficial('T');
        $this->assertEquals($oObject->getIsOfficial(), 'T');
    }

    public function testGetSetPercentage()
    {
		$oObject = new Demo_Model_Language();
		$oObject->setPercentage(25);
        $this->assertEquals($oObject->getPercentage(), 25);
    }
}


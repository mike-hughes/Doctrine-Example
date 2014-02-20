<?php

class IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{

    public function setUp()
    {
        $this->bootstrap = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
        parent::setUp();
    }
	
    public function testIndexAction()
    {
       $this->dispatch('/');
       $this->assertController('index');
       $this->assertAction('index');
    }

    public function testCountriesDisplayedAction()
    {
		$this->dispatch('/');
		$this->assertQueryCountMin('tr', 1);
    }

    public function testEditAction()
    {
		$this->dispatch('/index/edit');
		$this->assertController('index');
		$this->assertAction('edit');
    }

    public function testEditFormDisplayedAction()
    {
		$this->dispatch('/index/edit');
		$this->assertQueryCount('form', 1);
	}
}


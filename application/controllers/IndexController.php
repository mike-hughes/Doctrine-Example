<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        $oRegistry = Zend_Registry::getInstance();
        $this->_oEntityManager = $oRegistry->entitymanager;    
	}

    public function indexAction()
    {
		$arCountries = $this->_oEntityManager->getRepository('Demo_Model_Country')->findAll();
		$this->view->arCountries = $arCountries;
    }

    public function editAction()
    {
		$request = $this->getRequest(); 
		if ($request->isPost()) {
			$arParams = $request->getPost();
			$oCountry = $this->_oEntityManager->find('Demo_Model_Country', $arParams['country']);
			$oCountry->setPopulation($arParams['Population'])
			         ->setGNP($arParams['GNP']/1000)
			         ->setHeadOfState($arParams['HeadOfState']);
			//Save Entity
			$this->_oEntityManager->persist($oCountry);
			$this->_oEntityManager->flush();			
		} else {
			$oCountry = $this->_oEntityManager->find('Demo_Model_Country', ($request->getParam('country') ?: 'ABW'));
		}
		$this->view->Country = $oCountry;
    }
}


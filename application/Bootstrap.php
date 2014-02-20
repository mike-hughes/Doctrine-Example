<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	/**
     * generate registry
     * @return Zend_Registry
     */
    protected function _initRegistry()
	{
        $oRegistry = Zend_Registry::getInstance();
        return $oRegistry;
    }

    /**
     * Register namespace Demo
     * @return Zend_Application_Module_Autoloader
     */
    protected function _initAutoload()
    {
        $autoloader = new Zend_Application_Module_Autoloader(array(
            'namespace' => 'Demo_',
            'basePath'  => dirname(__FILE__),
        ));
        return $autoloader;
    }
	
    /**
     * Initialize Doctrine
     * @return Doctrine_Manager
     */
    public function _initDoctrine() 
	{
        $arConfigSettings = $this->getOption('doctrine');
        // create the Doctrine configuration
        $oDoctrineConfiguration = new \Doctrine\ORM\Configuration();
        // create the Doctrine Cache Configuration
        $oDoctrineCache = new \Doctrine\Common\Cache\ArrayCache;
        $oDoctrineConfiguration->setMetadataCacheImpl($oDoctrineCache);
        $oDoctrineConfiguration->setQueryCacheImpl($oDoctrineCache);
        // create the Doctrine Entity Mappings
		$oDriver = new \Doctrine\ORM\Mapping\Driver\XmlDriver(array($arConfigSettings['path']['map']));
        $oDoctrineConfiguration->setMetadataDriverImpl($oDriver);
        // Set Doctrine Proxy
        $oDoctrineConfiguration->setProxyDir($arConfigSettings['path']['proxy']);
        $oDoctrineConfiguration->setAutoGenerateProxyClasses($arConfigSettings['proxy']['generate']);
        $oDoctrineConfiguration->setProxyNamespace($arConfigSettings['proxy']['namespace']);
        // Initialize Doctrine Entity Manager
        $oEntityManager = \Doctrine\ORM\EntityManager::create($arConfigSettings['db'], $oDoctrineConfiguration);
        // Save Doctrine Entity Manager to Registry
        $oRegistry = Zend_Registry::getInstance();
        $oRegistry->entitymanager = $oEntityManager;
        return $oEntityManager;
    }
}


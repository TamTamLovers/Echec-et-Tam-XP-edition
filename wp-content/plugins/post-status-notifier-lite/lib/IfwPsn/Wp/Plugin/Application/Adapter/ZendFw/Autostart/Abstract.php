<?php
/**
 * ifeelweb.de WordPress Plugin Framework
 * For more information see http://www.ifeelweb.de/wp-plugin-framework
 * 
 * 
 *
 * @author   Timo Reith <timo@ifeelweb.de>
 * @version  $Id: Abstract.php 911603 2014-05-10 10:58:23Z worschtebrot $
 */
require_once dirname(__FILE__) . '/Interface.php';

abstract class IfwPsn_Wp_Plugin_Application_Adapter_ZendFw_Autostart_Abstract implements IfwPsn_Wp_Plugin_Application_Adapter_ZendFw_Autostart_Interface
{
    /**
     * @var IfwPsn_Wp_Plugin_Application_Adapter_ZendFw
     */
    protected $_adapter;

    /**
     * @var IfwPsn_Wp_Plugin_Manager
     */
    protected $_pm;



    /**
     * @param IfwPsn_Wp_Plugin_Application_Adapter_ZendFw $adapter
     */
    public function __construct(IfwPsn_Wp_Plugin_Application_Adapter_ZendFw $adapter)
    {
        $this->_adapter = $adapter;
        $this->_pm = $adapter->getPluginManager();
    }
}

<?php

class PugMoRe_Mageploy_Model_Resource_Executed extends Mage_Core_Model_Resource_Db_Abstract
{


    protected $_idFieldName = 'action_id';

    protected function _construct()
    {
        $this->_init('pugmore_mageploy/executed', 'action_id');
    }
}
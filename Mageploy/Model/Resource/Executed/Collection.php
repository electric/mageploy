<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 20/08/15
 * Time: 14.52
 * To change this template use File | Settings | File Templates.
 */

class PugMoRe_Mageploy_Model_Resource_Executed_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    protected function _construct()
    {
            $this->_init('pugmore_mageploy/executed');
    }

}

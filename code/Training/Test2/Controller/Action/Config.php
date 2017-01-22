<?php

/**
 * Created by PhpStorm.
 * User: Varrek
 * Date: 22.01.2017
 * Time: 19:33
 */
namespace Training\Test2\Controller\Action;

class Config extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $testConfig = $this->_objectManager->get('Training\Test2\Model\Config\ConfigInterface');
        $myNodeInfo = $testConfig->getMyNodeInfo();
        if (is_array($myNodeInfo)) {
            foreach ($myNodeInfo as $str) {
                $this->getResponse()->appendBody($str . "<BR>");
            }
        }
    }
}
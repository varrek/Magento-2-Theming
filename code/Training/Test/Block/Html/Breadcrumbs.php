<?php
/**
 * Created by PhpStorm.
 * User: Varrek
 * Date: 22.01.2017
 * Time: 18:52
 */

namespace Training\Test\Block\Html;


/**
 * Class Breadcrumbs
 * @package Training\Test\Block\Html
 */
class Breadcrumbs
{
    /**
     * @param $subject - the original object
     * @param $crumbName
     * @param $crumbInfo
     * @return array
     */
    public function beforeAddCrumb($subject, $crumbName, $crumbInfo)
    {
        //Change the first argument
        return [$crumbName . "(!)", $crumbInfo];
    }
}
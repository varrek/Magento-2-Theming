<?php
/**
 * Created by PhpStorm.
 * User: Varrek
 * Date: 22.01.2017
 * Time: 18:47
 */
namespace Training\Test\Block\Html;

/**
 * Class Footer
 * @package Training\Test\Block\Html
 */
class Footer
{
    /**
     * @return string
     */
    public function afterGetCopyright()
    {
        return 'Customized copyright!';
    }
}
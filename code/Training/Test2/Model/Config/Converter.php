<?php
/**
 * Created by PhpStorm.
 * User: Varrek
 * Date: 22.01.2017
 * Time: 19:31
 */

namespace Training\Test2\Model\Config;


/**
 * Class Converter
 * @package Training\Test2\Model\Config
 */
class Converter implements \Magento\Framework\Config\ConverterInterface
{
    /**
     * Convert dom node tree to array
     *
     * @param \DOMDocument $source
     * @return array
     * @throws \InvalidArgumentException
     */
    public function convert($source)
    {
        $output = [];
        /** @var $optionNode \DOMNode */
        foreach ($source->getElementsByTagName('mynode') as $node) {
            $output[] = $node->textContent;
        }
        return $output;
    }
}
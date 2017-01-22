<?php

/**
 * Created by PhpStorm.
 * User: Varrek
 * Date: 22.01.2017
 * Time: 19:40
 */
namespace Training\Test2\Model;

/**
 * Class Config
 * @package Training\Test2\Model
 */
class Config extends \Magento\Framework\Config\Data implements
    \Training\Test2\Model\Config\ConfigInterface
{
    /**
     * Config constructor.
     * @param Config\Reader $reader
     * @param \Magento\Framework\Config\CacheInterface $cache
     * @param string $cacheId
     */
    public function __construct(
        \Training\Test2\Model\Config\Reader $reader,
        \Magento\Framework\Config\CacheInterface $cache,
        $cacheId = 'training_test_config'
    )
    {
        parent::__construct($reader, $cache, $cacheId);
    }

    /**
     * @return array|mixed|null
     */
    public function getMyNodeInfo()
    {
        return $this->get();
    }
}
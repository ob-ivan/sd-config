<?php
namespace tests;

use SD\Config\ConfigAwareTrait;
use SD\DependencyInjection\AutoDeclarerInterface;
use SD\DependencyInjection\AutoDeclarerTrait;

class Consumer implements AutoDeclarerInterface
{
    use AutoDeclarerTrait;
    use ConfigAwareTrait;

    public function getConfigValue($key)
    {
        return $this->getConfig($key);
    }
}

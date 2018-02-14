<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use SD\DependencyInjection\Container;

class ConfigAwareTraitTest extends TestCase
{
    public function testTrait()
    {
        $existingKey = 'existing key';
        $existingValue = 'existing value';
        $config = [
            $existingKey => $existingValue,
        ];
        $container = new Container([
            'config' => $config,
        ]);
        $consumer = $container->produce(Consumer::class);
        $this->assertEquals(
            $existingValue,
            $consumer->getConfigValue($existingKey),
            'Must return the provided value'
        );
        $this->assertNull(
            $consumer->getConfigValue('unknown key'),
            'Must return null for an unknown key'
        );
    }
}

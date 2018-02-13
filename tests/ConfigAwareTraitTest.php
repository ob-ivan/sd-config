<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use SD\DependencyInjection\Container;

class ConfigAwareTraitTest extends TestCase
{
    public function testTrait() {
        $value = 'yada yada';
        $config = [
            'consumer' => $value,
        ];
        $container = new Container([
            'config' => $config,
        ]);
        $consumer = $container->produce(Consumer::class);
        $this->assertEquals($value, $consumer->getConsumerConfig(), 'Must return the provided value');
    }
}

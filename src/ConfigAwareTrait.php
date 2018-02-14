<?php
namespace SD\Config;

trait ConfigAwareTrait
{
    protected $autoDeclareConfig = 'config';
    private $config;

    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    protected function getConfig(string $key)
    {
        return $this->config[$key] ?? null;
    }
}

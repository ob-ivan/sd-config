<?php
namespace SD\Config;

trait RootDirAwareTrait
{
    private $autoDeclareRootDir = 'rootDir';
    private $rootDir;

    public function setRootDir(string $rootDir)
    {
        $this->rootDir = $rootDir;
    }

    private function getRootDir()
    {
        return $this->rootDir;
    }
}

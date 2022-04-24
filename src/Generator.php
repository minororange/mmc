<?php

namespace Minor\Mc;

use Minor\Mc\M2\CoreItem;
use Minor\Mc\M2\ModuleTemplateItem;
use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class Generator
{

    public function run()
    {
        $args = func_get_args();
        if (empty($args[1])) {
            $this->printUsage();
            return;
        }
        $this->setGlobalParams($args);

        $groupDir = $this->makeGroupDir();
        $core = new CoreItem();
        $core->setLayer(3);
        $this->createModule($core, $groupDir);
        $module = new ModuleTemplateItem();
        $module->setLayer(3);
        $this->createModule($module, $groupDir);
    }

    private function createModule(AbstractItem $item, string $currentPath)
    {
        if ($item->isFile()) {
            $this->createFile($currentPath, $item);
            return;
        }

        if ($item instanceof StructInterface) {
            $items = $item->getItems();
            $currentPath = $currentPath . '/' . $item->getName();
            $this->createDir($currentPath, $item);
            foreach ($items as $i) {
                $i->setLayer($item->getLayer() + 1);
                $this->createModule($i, $currentPath);
            }
            return;
        }
        if ($item->isDir()) {
            $currentPath = $currentPath . '/' . $item->getName();
            $this->createDir($currentPath, $item);
        }
    }

    /**
     * @param array $args
     * @return void
     */
    public function setGlobalParams(array $args): void
    {
        GlobalArgs::setGroupName($args[1] ?? '');
        GlobalArgs::setModuleName($args[2] ?? '');
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function makeGroupDir(): string
    {
        $rootPath = GlobalArgs::getRootPath();
        $groupName = GlobalArgs::getGroupName();
        $groupDir = $rootPath . '/app/code/' . $groupName;
        if (!file_exists($groupDir)) {
            mkdir($groupDir, '0755');
        }
        return $groupDir;
    }

    /**
     * @param string $currentPath
     * @param AbstractItem $item
     * @return void
     */
    public function createFile(string $currentPath, AbstractItem $item): void
    {
        $filePath = $currentPath . '/' . $item->getName();
        file_put_contents($filePath, $item->getTemplate());
    }

    /**
     * @param string $currentPath
     * @param AbstractItem $item
     * @return void
     */
    public function createDir(string $currentPath, AbstractItem $item): void
    {
        if (!file_exists($currentPath)) {
            mkdir($currentPath, '0755');
            touch($currentPath . '/.gitkeep');
        }
    }

    private function printUsage()
    {
        echo <<<CLI
Into the Magento2 root dir,run command "php ./vendor/minor/mc/bin/mmc [group name] [module name]"\n
CLI;
    }
}
<?php

namespace Minor\Mc\M2;

use Minor\Mc\GlobalArgs;
use Minor\Mc\Struct\AbstractItem;

class ModuleXmlItem extends AbstractItem
{
    private $groupName;
    private $moduleName;

    public function getName()
    {
        return "module.xml";
    }

    public function __construct($groupName, $moduleName)
    {

        $this->groupName = $groupName;
        $this->moduleName = $moduleName;
    }

    function getTemplate()
    {
        $rootDir = $this->getRelativePath();
        return <<<XML
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="{$rootDir}lib/internal/Magento/Framework/Module/etc/module.xsd">
    <module name="{$this->groupName}_{$this->moduleName}" setup_version="2.0.0">
    </module>
</config>

XML;

    }
}
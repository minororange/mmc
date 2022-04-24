<?php

namespace Minor\Mc\M2;

use Minor\Mc\GlobalArgs;
use Minor\Mc\Struct\AbstractItem;

class ConfigXmlItem extends AbstractItem
{

    function getTemplate()
    {
        $rootDir = $this->getRelativePath();
        return <<<XML
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="{$rootDir}Store/etc/config.xsd">
    <default>
    </default>
</config>
XML;
    }

    public function getName()
    {
        return "config.xml";
    }
}
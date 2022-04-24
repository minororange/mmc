<?php

namespace Minor\Mc\M2;

use Minor\Mc\GlobalArgs;
use Minor\Mc\Struct\AbstractItem;

class DiXmlItem extends AbstractItem
{


    function getTemplate()
    {
        $rootDir = $this->getRelativePath();
        return <<<XML
<?xml version="1.0"?>
<!--
/**
* Copyright © 2018 Porto. All rights reserved.
*/
-->
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="{$rootDir}lib/internal/Magento/Framework/ObjectManager/etc/config.xsd">
    
</config>
XML;

    }
    public function getName()
    {
        return "di.xml";
    }
}
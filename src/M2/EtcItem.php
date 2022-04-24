<?php

namespace Minor\Mc\M2;

use Minor\Mc\GlobalArgs;
use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class EtcItem extends AbstractItem implements StructInterface
{

    protected $type = self::DIR_TYPE;
    private $groupName;
    private $moduleName;

    public function __construct($groupName, $moduleName)
    {

        $this->groupName = $groupName;
        $this->moduleName = $moduleName;
    }

    function getTemplate()
    {
        // TODO: Implement getTemplate() method.
    }

    public function getName()
    {
        return "etc";
    }

    public function getItems()
    {
        return [
            new ConfigXmlItem(),
            new DiXmlItem(),
            new ModuleXmlItem($this->groupName, $this->moduleName),
        ];
    }
}
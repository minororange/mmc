<?php

namespace Minor\Mc\M2;

use Minor\Mc\GlobalArgs;
use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class CoreItem extends AbstractItem implements StructInterface
{
    protected $type = self::DIR_TYPE;

    function getTemplate()
    {
        // TODO: Implement getTemplate() method.
    }

    public function getName()
    {
        return "Core";
    }

    public function getItems()
    {
        return [
            new EtcItem(GlobalArgs::getGroupName(),"Core"),
            new ModelItem(),
            new ObserverItem(),
        ];
    }
}
<?php

namespace Minor\Mc\M2;

use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class ObserverItem extends AbstractItem implements StructInterface
{
    protected $type = self::DIR_TYPE;

    function getTemplate()
    {
        // TODO: Implement getTemplate() method.
    }

    public function getName()
    {
        return "Observer";
    }

    public function getItems()
    {
        return [];
    }
}
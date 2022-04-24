<?php

namespace Minor\Mc\M2;

use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class ModelItem extends AbstractItem implements StructInterface
{
    protected $type = self::DIR_TYPE;
    function getTemplate()
    {
        // TODO: Implement getTemplate() method.
    }

    public function getName()
    {
        return "Model";
    }

    public function getItems()
    {
        return [];
    }
}
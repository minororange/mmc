<?php

namespace Minor\Mc\M2;

use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class HelperItem extends AbstractItem implements StructInterface
{

    protected $type = self::DIR_TYPE;

    public function __construct()
    {
    }

    function getTemplate()
    {
        // TODO: Implement getTemplate() method.
    }

    public function getName()
    {
        return "Helper";
    }

    public function getItems()
    {
        return [];
    }
}
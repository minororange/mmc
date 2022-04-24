<?php

namespace Minor\Mc\M2;

use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class ControllerItem extends AbstractItem implements StructInterface
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
        return "Controller";
    }

    public function getItems()
    {
        return [
            new AdminHtmlItem()
        ];
    }
}
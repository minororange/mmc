<?php

namespace Minor\Mc\M2;

use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class BlockItem extends AbstractItem implements StructInterface
{

    protected $type = self::DIR_TYPE;

    public function __construct()
    {
    }

    function getTemplate()
    {

    }

    public function getName()
    {
        return "Block";
    }

    public function getItems()
    {
        return [
            new AdminHtmlItem(),
        ];
    }
}
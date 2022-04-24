<?php

namespace Minor\Mc\M2;

use Minor\Mc\Struct\AbstractItem;

class AdminHtmlItem extends AbstractItem
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
        return 'Adminhtml';
    }
}
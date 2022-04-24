<?php

namespace Minor\Mc\M2;

use Minor\Mc\GlobalArgs;
use Minor\Mc\Struct\AbstractItem;

class RegistrationItem extends AbstractItem
{

    public function __construct()
    {
    }

    function getTemplate()
    {
        $groupName = GlobalArgs::getGroupName();
        $moduleName = GlobalArgs::getModuleName();
        return <<<PHP
<?php
/**
 * Copyright © 2018 Porto. All rights reserved.
 */

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    '{$groupName}_{$moduleName}',
    __DIR__
);
PHP;

    }

    public function getName()
    {
        return 'registration.php';
    }
}
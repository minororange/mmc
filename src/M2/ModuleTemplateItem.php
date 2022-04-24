<?php

namespace Minor\Mc\M2;

use Minor\Mc\GlobalArgs;
use Minor\Mc\Struct\AbstractItem;
use Minor\Mc\Struct\StructInterface;

class ModuleTemplateItem extends AbstractItem implements StructInterface
{
    protected $type = self::DIR_TYPE;

    function getTemplate()
    {
        // TODO: Implement getTemplate() method.
    }

    public function getName()
    {
        return GlobalArgs::getModuleName();
    }

    public function getItems()
    {
        return [
            new EtcItem(GlobalArgs::getGroupName(), GlobalArgs::getModuleName()),
            new BlockItem(),
            new ControllerItem(),
            new HelperItem(),
            new ModelItem(),
            new ObserverItem(),
            new PluginItem(),
            new SetupItem(),
            new ViewItem(),
            new RegistrationItem(),
        ];
    }
}
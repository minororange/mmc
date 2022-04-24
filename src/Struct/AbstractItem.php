<?php

namespace Minor\Mc\Struct;

abstract class AbstractItem
{
    const FILE_TYPE = "file";
    const DEFAULT_ITEM_TYPE = self::FILE_TYPE;
    const DIR_TYPE = "dir";

    protected $type = self::DEFAULT_ITEM_TYPE;

    protected $layer = 0;

    /**
     * @return string
     */
    abstract public function getName();

    abstract function getTemplate();

    public function isDir()
    {
        return $this->type === self::DIR_TYPE;
    }

    public function isFile()
    {
        return $this->type === self::FILE_TYPE;
    }

    /**
     * @return int
     */
    public function getLayer(): int
    {
        return $this->layer;
    }

    /**
     * @param int $layer
     */
    public function setLayer(int $layer): void
    {
        $this->layer = $layer;
    }

    public function layerIncrement()
    {
        $this->layer++;
    }

    public function getRelativePath()
    {
        return str_repeat("../", $this->layer);
    }
}
<?php

namespace Minor\Mc;

class GlobalArgs
{
    private static $_ROOT_PATH = null;

    private static $_groupName = null;

    private static $_moduleName = null;

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        throw new \Exception("Not supports create");
    }

    public static function setRootPath($path)
    {
        self::$_ROOT_PATH = $path;
    }

    /**
     * @throws \Exception
     */
    public static function getRootPath()
    {
        if (empty(self::$_ROOT_PATH)) {
            throw new \Exception("Root dir not initialized");
        }

        return self::$_ROOT_PATH;
    }

    public static function getGroupName()
    {
        if (empty(self::$_groupName)) {
            throw new \Exception("group name not initialized");
        }

        return self::$_groupName;
    }

    /**
     * @param null $groupName
     */
    public static function setGroupName($groupName)
    {
        self::$_groupName = $groupName;
    }

    public static function getModuleName()
    {
        if (empty(self::$_moduleName)) {
            throw new \Exception("module name not initialized");
        }

        return self::$_moduleName;
    }

    /**
     * @param null $moduleName
     */
    public static function setModuleName($moduleName)
    {
        self::$_moduleName = $moduleName;
    }
}
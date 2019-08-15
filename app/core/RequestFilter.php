<?php


namespace ImageApp\core;


class RequestFilter
{

    private $map;

    public function __construct($sourceMap)
    {
        $this->map = $sourceMap;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        return $this->map[$name];
    }

    /**
     * @param $name
     * @param bool $filter
     * @return string
     */
    public function getString($name, $filter = true): string
    {
        if ($filter) {
            return addslashes($this->map[$name]);
        } else {
            return $this->get($name);
        }
    }

    /**
     * @param $name
     * @return int
     */
    public function getInt($name): int
    {
        return intval($this->map[$name]);
    }

    /**
     * @param $name
     * @return float
     */
    public function getFloat($name): float
    {
        return floatval($this->map[$name]);
    }

}
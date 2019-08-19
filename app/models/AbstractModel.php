<?php


namespace ImageApp\Models;


interface AbstractModel
{

    public static function find(int $id);

    public static function all();

    public function delete();

    public function update();

    public function save();

}
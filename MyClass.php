<?php
class MyClass{
    public function __construct(...$args){
        var_dump($args);
    } 
    public function __destruct()
    {
        echo"khi doi tuong bi huy";
    }
    public function __set($key, $value)
    {
        echo "key: $key  -  value: $value ";
    }
    public function __get($key)
    {
        echo "thuoc tinh vua goi  $key ";
    }
    public function __isset($name)
    {
        echo " thuoc tinh  $name ";
    }
    public function __unset($name)
    {
        echo " thuoc tinh  $name ";
    }

}

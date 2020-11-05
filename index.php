<?php
include 'MyClass.php';
$hello = new MyClass(array(
    'name'=> 'MyName',
    'pass' => '123',
));

$hello->name ="MyName";
$hello->name;

isset($hello->name);
unset($hello->name);
<?php

require_once 'vendor/autoload.php';

use Techworker\Nano as Nano;
$foo = "bar";

echo Nano::tpl("Hello {name.first} {name.last}", $data);


<?php
use App\c\Index;

require '../vendor/autoload.php';
$start 	= new Index();
$start->run();

spl_autoload_register('my_library');
function my_library($class) {
	if ($class) {
    	$file = str_replace("\\", "/", $class);

    	$file = $file.'.php';

    	if (file_exists($file)) {
    		require_once $file;
    	}
    }
}

/*$mono 	= new Courier("Monospace");
echo $mono->name;
$tom 	= new Tom("Monospace");
$flag = new Flag();
$tmp = new Tmp();*/
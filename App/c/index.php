<?php
namespace App\c;

use App\m\Tom;

class Index{
	public $Tom;
	public function __construct() {
		$this->Tom = new Tom();
	}
	public function run() {
		echo "ifrm run....";
		$this->Tom->run();
	}

}
<?php
namespace App\m;

class Courier{
	public $name;
	public $home_country;

	public function __construct( $name ) {
		$this->name = $name;
		return true;
	}

	public function ship( $parcel ) {
		return true;
	}

	public static function getCouriersByCountry($country)  {
		return true;
	}
}
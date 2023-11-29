<?php

declare(strict_types=1);

namespace App\Traits;

use Exception;

trait HasMatricule {

	// protected $prefix = "";

	// protected $length = 5;

	public static function bootHasMatricule() {
		static::creating(function($model) {
			if($model->length > 255) {
				throw new Exception("Too big matricule lenght: Must be less than 255 characters.");
			}
		});
	}

	// public static function generate() : string {
	// 	return 
	// }

}

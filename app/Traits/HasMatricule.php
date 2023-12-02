<?php

declare(strict_types=1);

namespace App\Traits;

use Carbon\Exceptions\InvalidTypeException;
use OutOfRangeException;

trait HasMatricule {

	public $matriculePrefix = "";

	public $matriculeLength = 5;

	public static function bootHasMatricule() {
		static::creating(function($model) {
			match (true) {
				gettype($model->matriculeLength) !== "int" => throw new InvalidTypeException("Matricule length must be of type integer."),
				$model->matriculeLength > 255 => throw new OutOfRangeException("Too big matricule lenght: Must be less or equal to 255 characters."),
			};
			$matricule = $model->matriculePrefix . generateNumber($model->matriculeLength);
			$model->matricule = $matricule;
			$model->save();
		});
	}

}

<?php

declare(strict_types=1);

use Nette\Utils\Random;

if (!function_exists("generateNumber")) {
	/**
	 * Generate a random number
	 */
	function generateNumber($length = 4) : int {
		return (int) Random::generate($length, "0-9");
	}
}

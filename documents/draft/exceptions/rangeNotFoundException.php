<?php

namespace statuses\exceptions;

use RuntimeException as runtimeException;

class rangeNotFoundException extends runtimeException
{
	public function __construct ( int $status )
	{
		$this->message = "The status code: $status can not be found inside any range.";
	}
}
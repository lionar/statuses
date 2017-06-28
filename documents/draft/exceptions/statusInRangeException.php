<?php

namespace statuses\exceptions;

use RuntimeException as runtimeException;

class statusInRangeException extends runtimeException
{
	public function __construct ( int $status )
	{
		$this->message = "The status code: $status has already been placed inside a range.";
	}
}
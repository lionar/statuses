<?php

namespace statuses\exceptions;

use RuntimeException as runtimeException;

class alreadyMatchedException extends runtimeException
{
	public function __construct ( int $status )
	{
		$this->message = "The status code: $status has already been matched.";
	}
}
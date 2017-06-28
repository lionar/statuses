<?php

namespace statuses\exceptions;

use RuntimeException as runtimeException;

class notMatchedException extends runtimeException
{
	public function __construct ( int $status )
	{
		$this->message = "The status code: $status has not been matched.";
	}
}
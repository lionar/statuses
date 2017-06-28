<?php

namespace statuses;

use Closure as closure;
use statuses\exceptions\alreadyMatchedException;
use statuses\exceptions\notMatchedException;

class matches
{
	private $statuses = [ ];

	public function add ( int $status, closure $callback )
	{
		if ( $this->has ( $status ) )
			throw new alreadyMatchedException ( $status );
		$this->statuses [ $status ] = $callback;
	}

	public function get ( int $status )
	{
		if ( ! $this->has ( $status ) )
			throw new notMatchedException ( $status );
		return $this->statuses [ $status ];
	}

	public function has ( int $status ) : bool
	{
		return ( array_key_exists ( $status, $this->statuses ) );
	}
}
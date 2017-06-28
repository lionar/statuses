<?php

namespace statuses;

use Closure as closure;

class statuses implements \agreed\statuses
{
	private $matched = [ ];
	private $between = [ ];
	private $greaterThan = [ ];
	private $smallerThan = [ ];

	public function __construct ( matches $matches = null, between $between = null )
	{
		$this->matches = ( $matches ) ?: new matches;
		$this->between = ( $between ) ?: new between;
	}

	public function match ( int $status ) : closure
	{
		return $this->matches->get ( $status );
	}

	public function matching ( int $status, closure $callback )
	{
		$this->matches->add ( $status, $callback );
	}

	public function between ( int $start, int $end, closure $callback )
	{
		$this->between->add ( $start, $end, $callback );
	}

	public function greaterThan ( int $status, closure $callback )
	{

	}

	public function smallerThan ( int $status, closure $callback )
	{

	}
}
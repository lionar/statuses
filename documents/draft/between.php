<?php

namespace statuses;

use Closure as closure;
use function compact as with;

class between
{
	private $ranges = [ ];

	public function add ( int $start, int $end, closure $callback )
	{
		if ( $this->inRanges ( $start ) )
			throw new statusInRangeException ( $start );
		if ( $this->inRanges ( $end ) )
			throw new statusInRangeException ( $end );		

		$this->ranges [ ] = with ( 'start', 'end', 'callback' );
	}

	public function get ( int $status ) : closure
	{
		foreach ( $this->ranges as $range )
			if ( $this->matches ( $range, $status ) )
				return $range [ 'callback' ];
		throw new rangeNotFoundException ( $status );
	}

	private function inRanges ( int $status ) : bool
	{
		foreach ( $this->ranges as $range )
			if ( $this->matches ( $range, $status ) )
				return true;
		return false;
	}

	private function matches ( array $range, int $status ) : bool
	{
		return ( $status > $range [ 'start' ] and $status < $range [ 'end' ] );
	}
}

[
	[ 
		'start' => 1,
		'end'	=> 100,
		'callback' => function ( ) { }
	]
]

// this between 50 . 100 has no more meaning
status::between ( 0, 100, function ( )
{

} );

// check if $start is in range of any other status
// check if $end is in range of any other status
status::between ( 50, 100, function ( )
{

} );
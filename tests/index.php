<?php

use statuses\collection;

require __DIR__ . '/../vendor/autoload.php';

$status = new collection;

$status->matching ( 1, function ( )
{
	echo '<h1>Match success</h1>';
} );

$status->match ( 1 ) ( );
<?php

use statuses\statuses;

require __DIR__ . '/../vendor/autoload.php';

$status = new statuses;

$status->matching ( 1, function ( )
{
	echo '<h1>Match success</h1>';
} );

$status->match ( 1 ) ( );
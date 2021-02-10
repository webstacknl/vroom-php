# VROOM PHP

This package provides a PHP client for the VROOM [API](https://github.com/VROOM-Project/vroom/blob/master/docs/API.md) that implements the VROOM API structure while providing a Object Oriented way to communicate with it.

## Getting started
Below is a simple example based on one vehicle having one job.

```php
<?php

use Webstack\Vroom\Connection;
use Webstack\Vroom\Resource\Job;
use Webstack\Vroom\Resource\Location;
use Webstack\Vroom\Resource\Options;
use Webstack\Vroom\Resource\Problem;
use Webstack\Vroom\Resource\Vehicle;

$problem = new Problem();

$vehicle = new Vehicle();
$vehicle->setId(1);
$vehicle->setStart(new Location(4.6311356, 52.1284105));
$vehicle->setEnd(new Location(4.6311356, 52.1284105));
$vehicle->setCapacity([500]);
$vehicle->setSkills([1]);

$problem->addVehicle($vehicle);

$job = new Job();
$job->setId(999);
$job->setDescription('Example job');
$job->setLocation(new Location(4.65546, 52.12917));
$job->setSkills([1]);

$problem->addJob($job);

$connection = new Connection('http://vroom:3000');
$solution = $connection->compute($problem);

print '<pre>';
print_r($solution);
print '</pre>';
```

## Tests

```
composer install
vendor/bin/phpunit
```

## Issues

Feel free to submit any issues or enhancements.

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

$vehicle = new Vehicle(1);
$vehicle->start = new Location(4.6311356, 52.1284105);
$vehicle->end = new Location(4.6311356, 52.1284105);
$vehicle->capacity = [500];
$vehicle->skills = [1];

$problem->vehicles[] = $vehicle;

$job = new Job(999);
$job->description = 'Example job';
$job->location = new Location(4.65546, 52.12917);
$job->skills = [1];

$problem->jobs = [$job];

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


### UPGRADE FROM 2.0

All resources objects have been updated to support Vroom 1.13 and properties are public now, removed all getters and setters.
Dropped support for PHP <=8.1 and Symfony <=6.1

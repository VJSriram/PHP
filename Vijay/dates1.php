<?php
// set the default timezone to use.
date_default_timezone_set('UTC');

// now
$date = new DateTimeImmutable();

// Prints something like: Wednesday
echo $date->format('l'), "\n";

// Prints something like: Wednesday 19th of October 2022 08:40:48 AM
echo $date->format('l jS \o\f F Y h:i:s A'), "\n";

/* use the constants in the format parameter */
// prints something like: Wed, 19 Oct 2022 08:40:48 +0000
echo $date->format(DateTimeInterface::RFC2822), "\n";
?>
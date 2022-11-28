<?php

$datetime = new DateTime();
echo $datetime->setDate(2020, 5, 1)
    ->setTime(5, 30)
    ->setTimezone(new DateTimeZone('America/New_York'))
    ->format('m/d/Y g:i A');
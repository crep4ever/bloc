<?php
setlocale(LC_TIME, "fr_FR");

$GLOBALS['root-dir'] = 'http://demo.openblocgrenoble.fr';
$GLOBALS['registration-fee'] = 12.0;
$GLOBALS['available-places'] = 100;
$GLOBALS['remaining-places-morning'] = 0;
$GLOBALS['remaining-places-afternoon'] = 0;

$hour = 8; $minute = 30; $second = 0;
$day = 5;  $month = 6;   $year = 2016;
$GLOBALS['event-date'] = mktime($hour, $minute, $second, $month, $day, $year);
$GLOBALS['event-date-str'] = strftime('%A %e %B %G', $GLOBALS['event-date']);

$hour = 0; $minute = 0; $second = 0;
$day = 11; $month = 4;  $year = 2016;
$GLOBALS['registration-open-date'] = mktime($hour, $minute, $second, $month, $day, $year);
$GLOBALS['registration-open-date-str'] = strftime('%A %e %B %G', $GLOBALS['registration-open-date']);

$hour = 0; $minute = 0; $second = 0;
$day = 31; $month = 5;  $year = 2016;
$GLOBALS['registration-close-date'] = mktime($hour, $minute, $second, $month, $day, $year);
$GLOBALS['registration-close-date-str'] = strftime('%A %e %B %G', $GLOBALS['registration-close-date']);

$hour = 8; $minute = 30; $second = 0;
$day = 5;   $month = 6;  $year = 2016;
$GLOBALS['arrival-morning'] = mktime($hour, $minute, $second, $month, $day, $year);

$hour = 11; $minute = 0; $second = 0;
$day = 5;  $month = 6;   $year = 2016;
$GLOBALS['arrival-afternoon'] = mktime($hour, $minute, $second, $month, $day, $year);

?>

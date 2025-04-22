<?php

use Stealthmicro\LatLonToMaidenhead\LatLonToMaidenhead;

it('returns correct maidenhead for lat lon', function () {
    $latitude = 51.5074;
    $longitude = -0.1278;
    $precision = 6;

    $result = LatLonToMaidenhead::convert($latitude, $longitude, $precision);

    expect($result)->toBe('IO91wm');
});

it('returns correct maidenhead for lat lon with different precision', function () {
    $latitude = 40.7128;
    $longitude = -74.0060;
    $precision = 4;

    $result = LatLonToMaidenhead::convert($latitude, $longitude, $precision);

    expect($result)->toBe('FN20');
});

it('throws exception for invalid precision', function () {

    $latitude = 51.5074;
    $longitude = -0.1278;
    $precision = 10;

    LatLonToMaidenhead::convert($latitude, $longitude, $precision);
})->throws(InvalidArgumentException::class, 'Precision must be an even number between 2 and 6.');

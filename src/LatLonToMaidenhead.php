<?php

declare(strict_types=1);

namespace Stealthmicro\LatLonToMaidenhead;

use InvalidArgumentException;

class LatLonToMaidenhead
{
    /**
     * @throws InvalidArgumentException
     */
    public static function convert($latitude, $longitude, $precision = 6): string
    {
        if ($precision % 2 !== 0 || $precision < 2 || $precision > 6) {
            throw new InvalidArgumentException('Precision must be an even number between 2 and 6.');
        }

        $latitude += 90;
        $longitude += 180;

        $locator = '';

        // Calculate the first pair of letters
        $locator .= chr(ord('A') + (int) ($longitude / 20));
        $locator .= chr(ord('A') + (int) ($latitude / 10));

        if ($precision >= 4) {
            // Calculate the second pair of digits
            $locator .= ((int) ($longitude / 2)) % 10;
            $locator .= ((int) $latitude % 10);
        }

        $adj_lon_remainder = (($longitude) - (int) ($longitude / 2) * 2) * 60;
        $adj_lat_remainder = ($latitude - (int) $latitude) * 60;

        if ($precision >= 6) {
            // Calculate the third pair of letters
            $locator .= chr(ord('a') + (int) ($adj_lon_remainder / 5));
            $locator .= chr(ord('a') + (int) ($adj_lat_remainder / 2.5));
        }

        return $locator;
    }
}

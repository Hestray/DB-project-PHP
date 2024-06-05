<?php

namespace Core;

class Validator {
    /**
     * Verifies if the given value is empty or not.
     * @param string $value
     * @param int $min is the minimum valid length of the string value
     * @param int $max is the maximum valid length of the string value
     * @return int which represents status error: 0 no erorrs, -1 less than min, 1 more than max
     */
    public static function bodyCheck($value, $min, $max) {
        $value = trim($value);
        if (strlen($value) > $max) return 1;
        elseif (strlen($value) <= $min) return -1;
        return 0;
    }

    /**
     * Checks if the given value is a valid email format
     * @param string $value string to check
     * @return mixed Returns the filtered data, or `false` if the filter fails.
     */
    public static function email(string $value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
<?php

class Validator {
    /**
     * Verifies if the given value is empty or not.
     * @param string $value
     * @param int $min is the minimum valid length of the string value
     * @param int $max is the maximum valid length of the string value
     * @return bool true if the string value is valid, false otherwise
     */
    public static function bodyCheck($value, $min, $max) {
        $value = trim($value);
        return strlen($value) >= $max && strlen($value) <= $min;
    }
}

?>
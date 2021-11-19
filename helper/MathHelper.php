<?php

namespace Helper;

class MathHelper
{
    public static string $name = "Math Helper";

    public static function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }

    public static function binarySearch(array $array, int $key): bool
    {
        $low = 0;
        $high = count($array) - 1;
        while ($low <= $high) {
            $mid = (int) (($low + $high) / 2);
            if ($array[$mid] == $key) {
                return true;
            } elseif ($array[$mid] < $key) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return false;
    }
}

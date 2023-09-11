<?php

class AreaChecker {
    public static function isInArea($x, $y, $r) {
        if ($x <= 0 && $y >= 0) { // Check for circle in top-left quadrant
            return ($x * $x + $y * $y) <= ($r * $r) / 4;
        }
        if ($x <= 0 && $y <= 0) { // Check for rectangle in the bottom-left quadrant
            return ($x >= -$r / 2) && ($y >= -$r);
        }
        if ($x >=  0 && $y < 0) { // Check for triangle in bottom-right quadrant
            return ($x <= $r / 2) && ($y >= -$r) && (2 * $x - $y <= $r);
        }
        return false; // For top-right quadrant, always return false
    }
}

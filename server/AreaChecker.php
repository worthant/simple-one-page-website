<?php

class AreaChecker {

    public static function isInArea($x, $y, $r) {
        if ($x >= 0 && $y >= 0) { // Check for circle in top-right quadrant
            return ($x * $x + $y * $y) <= ($r * $r) / 4;
        }
        if ($x < 0 && $y >= 0) { // Check for square in top-left quadrant
            return $x >= -$r && $y <= $r;
        }
        if ($x >= 0 && $y < 0) { // Check for triangle in bottom-right quadrant
            return $x <= $r && $y >= -$r && $x - $y <= $r;
        }         
        return false; // For bottom-left quadrant, always return false
    }
}

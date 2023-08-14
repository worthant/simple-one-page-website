<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/AreaChecker.php';

class AreaTest extends TestCase {

    public static function providerForAreaCheck() {
        return [
            // Points in the top-right quadrant (circle check)
            'TopRight Inside Circle' => [0.5, 0.5, 2, true],
            'TopRight Outside Circle' => [1, 1, 2, false],
        
            // Points in the top-left quadrant (rectangle check)
            'TopLeft Inside Rect Top' => [-0.5, 0.5, 2, true],
            'TopLeft Inside Rect Left' => [-2, 1, 2, true],
            'TopLeft Outside Rect Left' => [-2.1, 1, 2, false],
            'TopLeft Outside Rect Top' => [-2, 2.1, 2, false],
        
            // Points in the bottom-right quadrant (triangle check)
            'BottomRight Inside Triangle Bottom' => [0.5, -0.5, 2, true],
            'BottomRight Inside Triangle Right' => [1, -1, 2, true],
            'BottomRight Outside Triangle Right' => [1.1, -1, 2, false],
            'BottomRight Outside Triangle Bottom' => [1, -1.1, 2, false],
        
            // Points in the bottom-left quadrant (always outside)
            'BottomLeft Always Outside' => [-0.5, -0.5, 2, false]
        ];        
    }

    /**
     * @dataProvider providerForAreaCheck
     */
    public function testIsInArea($x, $y, $r, $expected) {
        $this->assertSame($expected, AreaChecker::isInArea($x, $y, $r));
    }
}

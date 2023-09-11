<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../server/AreaChecker.php';

class AreaTest extends TestCase {

    public static function providerForAreaCheck() {
        return [
            // Points in the top-left quadrant (circle check)
            'TopLeft Inside Circle' => [-0.5, 0.5, 2, true],
            'TopLeft Outside Circle' => [-1, 1, 2, false],
            
            // Points in the bottom-left quadrant (rectangle check)
            'BottomLeft Inside Rectangle' => [-0.5, -0.5, 2, true],
            'BottomLeft Outside Rectangle' => [-1.1, -1, 2, false],
            
            // Points in the bottom-right quadrant (triangle check)
            'BottomRight Inside Triangle' => [0.5, -0.5, 2, true],
            'BottomRight Outside Triangle' => [0.5, -1.1, 2, false],
            
            // Points in the top-right quadrant (always outside)
            'TopRight Always Outside' => [0.5, 0.5, 2, false]
        ];        
    }

    /**
     * @dataProvider providerForAreaCheck
     */
    public function testIsInArea($x, $y, $r, $expected) {
        $this->assertSame($expected, AreaChecker::isInArea($x, $y, $r));
    }
}

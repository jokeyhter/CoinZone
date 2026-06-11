<?php
/**
 * Tests for CoinZone
 */

use PHPUnit\Framework\TestCase;
use Coinzone\Coinzone;

class CoinzoneTest extends TestCase {
    private Coinzone $instance;

    protected function setUp(): void {
        $this->instance = new Coinzone(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinzone::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

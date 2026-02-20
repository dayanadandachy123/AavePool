<?php
/**
 * Tests for AavePool
 */

use PHPUnit\Framework\TestCase;
use Aavepool\Aavepool;

class AavepoolTest extends TestCase {
    private Aavepool $instance;

    protected function setUp(): void {
        $this->instance = new Aavepool(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Aavepool::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

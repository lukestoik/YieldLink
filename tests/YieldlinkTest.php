<?php
/**
 * Tests for YieldLink
 */

use PHPUnit\Framework\TestCase;
use Yieldlink\Yieldlink;

class YieldlinkTest extends TestCase {
    private Yieldlink $instance;

    protected function setUp(): void {
        $this->instance = new Yieldlink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Yieldlink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

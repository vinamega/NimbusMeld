<?php
/**
 * Tests for NimbusMeld
 */

use PHPUnit\Framework\TestCase;
use Nimbusmeld\Nimbusmeld;

class NimbusmeldTest extends TestCase {
    private Nimbusmeld $instance;

    protected function setUp(): void {
        $this->instance = new Nimbusmeld(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nimbusmeld::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

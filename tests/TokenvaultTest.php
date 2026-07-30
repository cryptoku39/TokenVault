<?php
/**
 * Tests for TokenVault
 */

use PHPUnit\Framework\TestCase;
use Tokenvault\Tokenvault;

class TokenvaultTest extends TestCase {
    private Tokenvault $instance;

    protected function setUp(): void {
        $this->instance = new Tokenvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

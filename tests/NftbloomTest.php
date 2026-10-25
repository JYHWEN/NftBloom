<?php
/**
 * Tests for NftBloom
 */

use PHPUnit\Framework\TestCase;
use Nftbloom\Nftbloom;

class NftbloomTest extends TestCase {
    private Nftbloom $instance;

    protected function setUp(): void {
        $this->instance = new Nftbloom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftbloom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

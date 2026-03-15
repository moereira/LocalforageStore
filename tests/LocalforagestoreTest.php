<?php
/**
 * Tests for LocalforageStore
 */

use PHPUnit\Framework\TestCase;
use Localforagestore\Localforagestore;

class LocalforagestoreTest extends TestCase {
    private Localforagestore $instance;

    protected function setUp(): void {
        $this->instance = new Localforagestore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Localforagestore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

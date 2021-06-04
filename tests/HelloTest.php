<?php

declare(strict_types=1);

namespace Mohatt\Skeleton\Test;

use Mohatt\Skeleton\Hello;

/**
 * @internal
 * @coversNothing
 */
class HelloTest extends TestCase
{
    public function testGetHello(): void
    {
        $object = \Mockery::mock(Hello::class);
        $object->shouldReceive('getHello')->passthru();

        $this->assertSame('Hello, World!', $object->getHello());
    }
}

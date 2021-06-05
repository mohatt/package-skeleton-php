<?php

declare(strict_types=1);

namespace Mohatt\Skeleton\Test;

use Mohatt\Skeleton\Hello;

/**
 * @internal
 * @covers \Mohatt\Skeleton\Hello
 */
class HelloTest extends TestCase
{
    public function testGetHello(): void
    {
        $object = \Mockery::mock(Hello::class);
        $object->shouldReceive('getHello')->passthru();

        self::assertSame('Hello, World!', $object->getHello());
    }
}

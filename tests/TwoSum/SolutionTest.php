<?php

declare(strict_types=1);

namespace Jh3ady\LeetCode\Tests\TwoSum;

use Jh3ady\LeetCode\TwoSum\Solution;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Solution::class)]
final class SolutionTest extends TestCase
{
    public function testTwoSum(): void
    {
        $solution = new Solution();

        $this->assertSame([0, 1], $solution->twoSum([2, 7, 11, 15], 9));
        $this->assertSame([1, 2], $solution->twoSum([3, 2, 4], 6));
        $this->assertSame([0, 1], $solution->twoSum([3, 3], 6));
    }
}

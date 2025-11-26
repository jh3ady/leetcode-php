<?php

declare(strict_types=1);

namespace Jh3ady\LeetCode\TwoSum;

final readonly class Solution
{
    /**
     * @param int[] $nums
     * @return int[]
     */
    public function twoSum(array $nums, int $target): array
    {
        $map = [];

        foreach ($nums as $i => $num) {
            $complement = $target - $num;

            if (isset($map[$complement])) {
                return [$map[$complement], $i];
            }

            $map[$num] = $i;
        }

        return [];
    }
}

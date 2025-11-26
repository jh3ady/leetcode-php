<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$solution = new \Jh3ady\LeetCode\TwoSum\Solution();

echo 'Two Sum' . PHP_EOL;
print_r($solution->twoSum([2, 7, 11, 15], 9)); // Output: [0, 1]
print_r($solution->twoSum([3, 2, 4], 6)); // Output: [1, 2]
print_r($solution->twoSum([3, 3], 6)); // Output: [0, 1]

# PHP Array Increment Unexpected Behavior with Non-Existent Index

This example demonstrates an uncommon bug in PHP related to incrementing array values. When the index does not exist, initializing it to 0 before incrementing might not always be the desired behavior.

## Bug Description
The `increment_array_value` function aims to safely increment an array element at a given index. However, if the index does not exist, the code initializes it to 0 before incrementing. While seemingly straightforward, this behavior can be unexpected in certain situations, such as when dealing with sparse arrays or when the intention is to handle missing indexes differently (e.g., raising an exception, or returning a default value).

## Solution
The improved `increment_array_value` function introduces optional parameter `$defaultValue` that allows setting a default value if the index does not exists, or the possibility to throw an exception if the index is not set. 

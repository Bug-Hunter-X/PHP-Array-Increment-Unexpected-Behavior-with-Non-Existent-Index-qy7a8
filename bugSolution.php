```php
function increment_array_value(array &$arr, int $index, int $increment, $defaultValue = null, bool $throwException = false): void {
  if (!isset($arr[$index])) {
    if ($throwException) {
        throw new ",
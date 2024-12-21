```php
function increment_array_value(array &$arr, int $index, int $increment): void {
  if (!isset($arr[$index])) {
    $arr[$index] = 0; // Initialize if the index doesn't exist
  }
  $arr[$index] += $increment;
}

$my_array = [];
increment_array_value($my_array, 10, 5);
echo json_encode($my_array);
```
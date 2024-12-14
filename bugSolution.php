```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately. 
      // You can choose to ignore them, throw an exception, or use a default value.
      echo "Warning: Non-numeric value encountered: " . $number . '\n';
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a', 5]; // Mixed input with non-numeric string
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Correct handling of non-numeric input
```
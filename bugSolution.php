function foo(array $arr): array {
  if (empty($arr)) {
    return [];
  }

  $result = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
      $result[$key] = foo($value); 
    } else {
      $result[$key] = $value; 
    }
  }
  return $result;
}

// Example usage:
$myArray = [1, 2, [3, 4, [5,6]]];
$processedArray = foo($myArray);
print_r($processedArray); //Correct Output
print_r($myArray); //Original array remains unchanged.
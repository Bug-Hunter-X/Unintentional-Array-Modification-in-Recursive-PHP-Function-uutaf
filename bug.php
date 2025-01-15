function foo(array $arr): array {
  if (empty($arr)) {
    return [];
  }

  $result = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
      $result[$key] = foo($value); 
    } else {
      $result[$key] = $value; // This line is problematic
    }
  }
  return $result;
}
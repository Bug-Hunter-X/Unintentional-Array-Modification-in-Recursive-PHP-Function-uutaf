# Unintentional Array Modification in Recursive PHP Function

This repository demonstrates a subtle bug in a recursive PHP function that unintentionally modifies the input array. The function `foo` is intended to process nested arrays, but a flaw in its logic leads to unexpected behavior.

The `bug.php` file contains the flawed function. The `bugSolution.php` file provides a corrected version.

## Bug Description

The problem lies in how the function handles non-array elements.  When a non-array element is encountered, it is directly assigned to the `$result` array. This assignment can have unintended consequences, especially if the original array is passed by reference elsewhere in the application.
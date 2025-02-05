# PHP Implicit Array Key Creation Bug

This repository demonstrates a subtle bug in PHP related to implicit array key creation when accessing non-existent integer array keys.  Accessing a non-existent integer key doesn't throw an error; instead, it creates the key with a default value of NULL.  This can lead to unexpected behavior and make debugging more difficult.  The example code showcases the issue and provides a solution.

## Bug

The `bug.php` file contains code that illustrates the problem.  Accessing a nonexistent integer key implicitly creates the key, which is not immediately obvious and can lead to unexpected program states.

## Solution

The `bugSolution.php` file offers a better approach.  Always explicitly check if a key exists before accessing it to avoid accidental key creation and maintain predictable program behavior.
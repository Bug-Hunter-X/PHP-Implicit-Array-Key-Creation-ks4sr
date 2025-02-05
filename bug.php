In PHP, a common yet subtle error arises when dealing with array keys that are not explicitly defined.  Consider this scenario:

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;
$myArray[1] = 3; //integer key

//Attempting to access a non-existent key with array_key_exists
if (array_key_exists(0, $myArray)) {
  echo "Key 0 exists";
} else {
  echo "Key 0 does not exist";
}

//Attempting to access a non-existent key directly
echo $myArray[0];
?>
```

The `array_key_exists(0, $myArray)` check will return `false`, indicating that the key `0` is absent. However, directly accessing `$myArray[0]` will not throw a Notice; instead, it will implicitly create a new key-value pair `0 => NULL`. This implicit key creation can lead to unexpected behavior and hard-to-debug issues.
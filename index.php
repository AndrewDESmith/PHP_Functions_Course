<?php

  // Passing in arrays:
  // function hello($arr) {
  //   if(is_array($arr)) {
  //     foreach($arr as $name)
  //       echo "Hello, $name, how's it going?<br>";
  //   } else {
  //     echo "Hello, friends!<br>";
  //   }
  // }

  // $names = array(
  //   "Hampton",
  //   "Mike",
  //   "Charley"
  // );
  // hello($names);

  // Default parameter values and testing for a parameter's presence:
  // function get_info($name, $title = Null) {
  //   if ($title) {
  //     echo "$name has arrived, they are with us as a $title.<br>";
  //   } else {
  //     echo "$name has arrived, welcome!<br>";
  //   }
  // }

  // get_info("Mike");

  // $current_user = "Mike";

  // Using global values:
  // function is_mike() {
  //   global $current_user;
  //   if ($current_user == "Mike") {
  //     echo "It is Mike!";
  //   } else {
  //     echo "Nope, it is not Mike.";
  //   }
  // }

  // is_mike();

  // Returning a value:
  function hello($name) {
    if($name == "Mike") {
      return "Hello, Mike!<br>";
    } else {
      return "Hello, stranger.<br>";
    }
  }

  $greeting = hello("Chris");

  echo $greeting;

  function add_up($a, $b) {
    $arr = array(
      $a,
      $b,
      $a + $b
    );
    return $arr;
  }

  // $value = add_up(2, 4);

  // echo $value[2];


  // *** PHP Variable Functions: ***

  // If you have an existing function, such as greet(), you can store a variable string of the same name...
  // $func = "greet";
  // ...and then place parens after the variable name, which will tell the PHP interpretor that the stored string is the name of a function, which is then called:
  // $func();
  // Is the same as if we had called greet()

  // You can use parameters in variable functions:
  // E.g., function greet($name, $time) { ... }
  // $func = "greet";
  // $func("Mike", "evening")
  // same as if we had called greet("Mike", "evening")


  function answer() {
    return 42;
  }

  // $func = "answer";

  // // You can call $func or store this call in another variable (pointlessly in this case):
  // $num = $func();
  // echo $num;

  $func = "add_up";
  $num = $func(5, 10);

  echo $num[2];
  echo "<br>";

  // ==================================================

  // *** PHP Closures (aka. Anonymous Functions): ***

  $name = "friend";

  // The use() keyword allows you to import variables from outside of the function environment, without having to call the function with undefined parameters.  Some functions in PHP allow callbacks(like array_walk, array_map, etc that have predefined parameters. In these instances, you can call use() to add other variables that otherwise would not be possible to use in a callback.
  // Also, the use() statement captures the variable at the time the closure function is created.  Regular function arguments capture the value when the function is called.

  // $name = "Mike";

  // $greet = function($name) use($name){
  //   echo "$name";
  // };

  // $name = "Tom";

  // $greet(); // Mike


  $greet = function() use($name) {
    echo "Hello there, $name.<br>";
  };  // Notice the semi-colon at the end of this function, just as with JS closures/anonymous functions.

  $greet();

  // ==================================================

  // *** Built-In PHP Functions: ***

  $phrase = "We only hit what we aim for.";

  // Get string length:
  $len = strlen($phrase);
  // echo $len;

  // Substring:
  // substr($string, start_position_integer, [optional length_integer])
  echo substr($phrase, 3, 9); // "only hit"
  echo "<br>";

  // String position:
  // Find the position of the first occurrence of a substring in a string.
  // strpos($haystack, $needle, [optional offset_position_to_begin_search])
  // Find the numeric position of the first occurrence of $needle in the $haystack string.
  echo strpos($phrase, "hit");
  echo "<br>";
  var_dump(strpos($phrase, "Bob"));  // Returns false when a string is not found.
  echo "<br>";
  // Find the starting position of a word, then use that position to find the rest of the substring in the phrase:
  $start = strpos($phrase, "hit");
  echo substr($phrase, $start); // "hit what we aim for."
  echo "<br>";


  // Array Functions

  $names = array(
    "Mike" => "Frog",
    "Chris" => "Teacher",
    "Hampton" => "Teacher"
  );

  // array_keys()
  // Returns the keys from the $array. The returned keys can be restricted to only match an optional $search_value.
  // array_keys($array, [optional $search_value, [optional $strict]])
  // foreach (array_keys($names) as $name) {
  //   echo "Hello, $name.<br>";
  // }

  // array_walk()
  // Applies the user-defined $callback function to each element of the $array (walks through the $array).
  // array_walk($array, $callback, [$userdata])
  // From the array_walk() documentation, the $callback function typically takes two parameters, the array's value and then the array's key.
  function print_info($value, $key) {
    // Will go through the $key-$value pairs of the $names array when array_walk() is called.
    echo "$key is a $value.<br>";
  }

  // Use the string version of the callback function name:
  array_walk($names, "print_info");
?>











































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


  // *** PHP Closures (aka. Anonymous Functions): ***

  $name = "friend";

  // The use() keyword allows you to import variables from outside of the function environment, without having to call the function with undefined parameters.  Some functions in PHP allow callbacks(like array_walk, array_map, etc that have predefined parameters. In these instances, you can call use() to add other variables that otherwise would not be possible to use in a callback.
  $greet = function() use($name) {
    echo "Hello there, $name.<br>";
  };  // Notice the semi-colon at the end of this function, just as with JS closures/anonymous functions.

  $greet();

?>











































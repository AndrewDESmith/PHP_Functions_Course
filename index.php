<?php

  // Passing in arrays:
  function hello($arr) {
    if(is_array($arr)) {
      foreach($arr as $name)
        echo "Hello, $name, how's it going?<br>";
    } else {
      echo "Hello, friends!<br>";
    }
  }

  $names = array(
    "Hampton",
    "Mike",
    "Charley"
  );
  hello($names);

  // Default parameter values and testing for a parameter's presence:
  function get_info($name, $title = Null) {
    if ($title) {
      echo "$name has arrived, they are with us as a $title.<br>";
    } else {
      echo "$name has arrived, welcome!<br>";
    }
  }

  get_info("Mike");

  $current_user = "Mike";

  // Using global values:
  function is_mike() {
    global $current_user;
    if ($current_user == "Mike") {
      echo "It is Mike!";
    } else {
      echo "Nope, it is not Mike.";
    }
  }

  is_mike();

?>

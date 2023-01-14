<?php


    // Set limit and print all Even Numbers
    function printEvenNumber($userInput) {
      for ($index = 1; $index <=$userInput; $index++) {
        if ($index%2 == 0) {
          echo "Even Number: " . $index . "<br>";
        }
      }
      return;
    }

    // Sum of two numbers
    function operations ($num1, $num2) {
      $results = $num1 + $num2;
      echo "Results:" . $results;
    }

    // Pass parameters to functions
    function printOddNumbers(int $limit, $skipNumber) {
      for($index = 0; $index < $limit; $index++) {
        if($index === $skipNumber) {
          continue; // continue loop if SkipNumber is count
        }

        if($index%2 != 0) {
          echo "Odd Number: " . $index . "<br>";
        }
      }
    }

    // Return value from Function
    function retrunValue($num1, $num2) {
      $multiply = $num1 * $num2;
      return $multiply;
    }

    // Calling function Dynamically
    function add($a, $b) {
      $opr = $a + $b;
      return $opr;
    }

    // Anonymous function (Closure)
    $divisionOpr = function($a, $b) : int {
      $division = $a / $b;
      return $division;
    };

    // To access "$content you can use "use($content)" in function"
    $content = "This is a anonymous function with Division operator";
    $printContent = function() use ($content) {
      echo $content;
    };


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions PHP</title>
</head>
<body>
  <h1>Define and Call a Functions PHP</h1>
  <h4>Set a limit and print all Even numbers.</h4>
  <p> <?= printEvenNumber(20); ?></p>

  <hr>
  <h4>Sum of two numbers</h4>
  <p><?= operations(5,10);?></p>

  <hr>

  <h4>Pass parameters to Functions</h4>
  <p><?= printOddNumbers(20, 5)?></p>

  <hr>

  <h4>Return value from Function</h4>
  <p><?= 'Output: ' . retrunValue(2, 2)?></p>

  <hr>

  <h4> Calling function Dynamically </h4>
  <p>
    <?php 
    $addFunction = 'add';
    // echo 'Dynamic: ' . add(5,2);
    echo $addFunction(5,8);
    ?>
  </p>

  <h4>Anonymous Function</h4>
  <p> 
    <?= $divisionOpr(10,2);?> 
    <br>
    <?= $printContent();?>
  </p>

</body>
</html>


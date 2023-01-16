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

    // Passing Reference to a Function
    $results = 0;
    function plus($num1, $num2, &$results = null) {
      $results = $num1 + $num2;
      return $results;
    }
    echo plus(20,30, $results);

    // Exercise 1 Pass and Return Function
    $result = 0;
    function math(int $num1, int $num2, string $opr, &$result = null) {

      if (!empty($opr)) {
        $opr = strtolower($opr);

        if($opr === '+' || $opr === 'add') {
          $result = $num1 + $num2;
          return $result;
        } elseif($opr === '-' || $opr === 'sub') {
          $result = $num1 - $num2;
          return $result;
        } elseif($opr === '*' || $opr === 'multiply') {
          $result = $num1 * $num2;
          return $result;
        } elseif($opr === '/' || $opr === 'divide') {
          $result = $num1 / $num2;
          return $result;
        }
      } else {
        echo 'Please enter an operator';
      }
    }

    function getDiscountedPrice(int $price, int $discount, int &$discountedPrice = null)
    {
      // Formula to get the discount price from 20% discount
      $discountedPrice = (($price * $discount) / 100);
      return $discountedPrice;
    }
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

  <hr>

  <h4>Passing Reference to a Function</h4>
  <p><?= "This is Passing Reference to a Function: " . $results?></p>

  <hr>

  <h4>Exercise Pass and Return Function</h4>

  <p>Enter two number and select an operator</p>
  <fieldset>
    <legend>Choose Operator</legend>
    <ul>
      <li>+ or add</li>
      <li>- or sub</li>
      <li>* or multiply</li>
      <li>/ or divide</li>
    </ul>
  </fieldset>
  <p>
    <?php
      echo "Result: " . number_format(math(10,5, 'add'),2);
    ?>
  </p>

  <hr>

  <h4>Get the Discounted Price to the Products</h4>
  <fieldset>
    <legend>Instruction.</legend>
    <ol>
      <li>Make a function getDiscountedPrice()</li>
      <li>Pass Price and Discount percentage</li>
      <li>Return the discountedPrice</li>
      <li>Formula: discounted_price = original_price = ((original_price * discount) / 100);</li>
    </ol>
  </fieldset>
  <p>Output: <?= getDiscountedPrice(500,20, $discountedPrice);?></p>
</body>
</html>


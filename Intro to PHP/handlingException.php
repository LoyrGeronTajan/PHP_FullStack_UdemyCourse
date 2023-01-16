
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handling Exception PHP</title>
</head>
<body>
  <h1>Handling Exception</h1>

  <hr>

  <h3>Raise and Catch Exception</h3>
  <p>
    <?php
      function divide($num1, $num2) : int{
        if ($num2 <=0){
          throw new Exception('Divided by Zero Exception might happen');
        }

        $result = $num1 / $num2;
        return $result;

      }

      try {
        // This is a error in this block
        $result = divide(2, 0);
      } catch (\Exception $e) {
        // Jump to this block if try block has an error
        echo 'Caught Exception: ' . $e->getMessage() . '<br>';
      }
    ?>
  </p>

  <hr>

  <h3>Throw Custom Exception</h3>
  <p><?php
  // Custom Throw Exception
  function customThrowException($exception) {
    echo 'Custom Throw Exception: ' . $exception->getMessage();
  }

  function division($num1, $num2) : int{
    if ($num2 <=0){
      throw new Exception('Divided by Zero Exception might happen');
    }

    $result = $num1 / $num2;
    return $result;

  }
  set_exception_handler('customThrowException');
  division(2,0);
  
?></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="main_div">
 
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
     <label class="lable" for="value1">Enter first value</label>
     <input class="input" type="number" name="val1" placeholder="Enter Value">

     <label class="lable" for="sign">Select Sign</label>
     <select class="input" name="operator" id="">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
        <option value="mod">%</option>
     </select>

     <label class="lable" for="value2">Enter second value</label>
     <input class="input" type="number" name="val2" placeholder="Enter Value">

     <button class="btn" type="submit">Calculate</button>
  </form>

  <?php 
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Grab data from input
    //   $num1 = filter_input(INPUT_POST, "val1", FILTER_SANATIZE_NUMBER_FLOAT);
    //   $num2 = filter_input(INPUT_POST, "val2", FILTER_SANATIZE_NUMBER_FLOAT);
      $num1 = htmlspecialchars($_POST["val1"]);
      $num2 = htmlspecialchars($_POST["val2"]);
      $op = htmlspecialchars($_POST["operator"]);

      //error handlers

      $error = false;

      if(empty($num1) || empty($num2) || empty($op)){
          echo "Empty Error";
          $error = true;
      }

      if(!is_numeric($num1) || !is_numeric($num2)){
        echo "Not Numeric Error";
        $error = true;
      }

      //Calculte the numbers of no errors 

      if(!$error){
        $ans;
        switch($op){
          case "add":
            $ans = $num1 + $num2;
            break;

          case "sub":
            $ans = $num1 - $num2;
            break;

          case "multiply":
            $ans = $num1 * $num2;
            break;
            
          case "divide":
            $ans = $num1 / $num2;  
            break;

          case "mod":
            $ans = $num1 % $num2;
            break;
            
           default: 
           $ans = $num1 + $num2;
           break;
        }

        echo "<p> Result is : " . $ans . "</p>";

      }
  }
  
  ?>
 
</div>
    
</body>
</html>
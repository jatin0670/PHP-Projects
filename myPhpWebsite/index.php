<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
<!-- <form id="form" action="includes/userData.php" method="post">
  <label class="nameLable" for="firstName">FirstName</label>
  <input class="nameLable" type="text" name="firstName" id="firstName" placeholder="firstname..">

  <label for="lastName">LastName</label>
  <input type="text" name="lastName" id="lastName" plcaeholder="lastname..">

  <label for="course">Course</label>
  <select id="selectCourse" name="selectCouse">
    <option value="BCA">BCA</option>
    <option value="BA">BA</option>
    <option value="BBA">BBA</option>
    <option value="BSC">BSC</option>
  </select>

  <button type="submit">Submit</button>
</form> -->



<?php

   function name($name){
    return "Hello " . $name . " how are you?";
   }

   echo name("jatin");
   
   

?>

</body>
</html>
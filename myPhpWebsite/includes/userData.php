<?php 

  if($_SERVER["REQUEST_METHOD"] == "POST"){     //this checks method from frontend from which method user sent data
    $firstName = htmlspecialchars($_POST["firstName"]);  //htmlspecialchars prevent user's js injection code
    $lastName = htmlspecialchars($_POST["lastName"]);
    $courseName = htmlspecialchars($_POST["selectCouse"]);

    if(empty($firstName) || empty($lastName) || empty($courseName)){
        header("Location: ../index.php");   //it sends user to the index page
        exit();

    }

    echo "First Name: "; echo $firstName; echo "<br>";

    echo "Last Name: "; echo $lastName; echo "<br>";

    echo "Couse Name: "; echo $courseName; echo "<br>";

    header("Location: ../index.php");

  }
  else{
    header("Location: ../index.php");
  }

    

?>
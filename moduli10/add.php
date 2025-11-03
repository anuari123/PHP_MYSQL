<?php
     include_once("config.php");
     if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email']; 

        $sql = "INSERT INFO users(name,surname,email) VALEUS (:name, :surname,:email)";
        $sqlQuery = $connect->prepare($sql);

        $sqlQuery->bindParam(':name', $name);
         $sqlQuery->bindParam(':surname', $surname);
          $sqlQuery->bindParam(':email', $email);

          $sqlQuery->execute();

          echo"The user was added successfully!";



     }


?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="Name"></br>
            <input type="text" name="surname" placeholder="Surname"></br>
            <input type="email" name="email" placeholder="Email"></br>
            <button type="submit" name="submit">Add</button>
        </form>


    </body>
</html> 
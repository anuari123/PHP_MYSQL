<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        table,td,th{
            border:1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
       include_once('config.php');
       $sql = "SELECT * FROM users";
       $getUsers->conn($sql);
       $getUsers->execute();
       $users = $getUsers->FetchAll();
?>
<br></br>
    <table>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Emai l</th>
    </thead>
    </table>
    <?php
       foreach($users as $user){
   ?>
          <tr>
               <td><?= $users['id'] ?></td>     
                <td><?= $users['name'] ?></td>
                <td><?= $users['surname'] ?></td>
                <td><?= $users['email'] ?></td>  
                      
    </tr>
    <?php
            }
    ?>        
        
    </tbody>
    </table>
    <a href="add.php">Add User</a>             
       
</body>
</html>
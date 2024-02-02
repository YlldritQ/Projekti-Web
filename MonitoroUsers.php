<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>ISADMIN</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 <th>ADMIN</th>
                 
             </tr>

             <?php 
             include_once 'userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[ID]</td>
                     <td>$user[name]</td>
                     <td>$user[surname] </td>
                     <td>$user[email] </td>
                     <td>$user[username] </td>
                     <td>$user[password] </td>
                     
                ";
                if($user['IsAdmin'] == 1){
                    echo "<td>TRUE</td>";    
                }else{
                    echo "<td>FALSE</td>";
                }
                echo 
                "
                     <td><a href='edit.php?id=$user[ID]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[ID]'>Delete</a></td>
                     
                ";
                if($user['IsAdmin'] == 1){
                    echo 
                "
                     <td><a href='removeAdmin.php?id=$user[ID]'>Remove Admin</a></td>
                     </tr>
                     
                ";
                }else{
                    echo 
                "
                     <td><a href='makeAdmin.php?id=$user[ID]'>Make Admin</a></td>
                     </tr>
                     
                ";
                }
             }

             
             
             ?>
    </table>
</body>
</html>
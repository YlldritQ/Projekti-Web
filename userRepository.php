<?php 
include_once 'databaseConnection.php';
include_once 'user.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();

        $sql = "INSERT INTO user (name,surname,email,username,password) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$surname,$email,$username,$password]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE ID='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$username,$password){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, surname=?, email=?, username=?, password=? WHERE ID=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$surname,$email,$username,$password,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE ID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   }
   
   function makeAdmin($id){
    $conn = $this->connection;

    $sql = "UPDATE user SET IsAdmin=1 WHERE ID=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('update was successful'); </script>";
   }

   function removeAdmin($id){
    $conn = $this->connection;

    $sql = "UPDATE user SET IsAdmin=0 WHERE ID=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('update was successful'); </script>";
   }

   function getUserByUsername($username){
    $conn = $this->connection;

    $sql = "SELECT * FROM user WHERE username='$username'";

    $statement = $conn->query($sql);
    $user = $statement->fetch();

    return $user;
    }

   function getUserByEmail($email){
    $conn = $this->connection;

    $sql = "SELECT * FROM user WHERE email='$email'";

    $statement = $conn->query($sql);
    $user = $statement->fetch();

    return $user;
    }
}

?>
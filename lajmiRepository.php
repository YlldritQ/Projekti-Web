<?php 
include_once 'databaseConnection.php';

class LajmiRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insertLajmi($lajmi){

        $conn = $this->connection;

        $id = $lajmi->getId();
        $titulli = $lajmi->getTitulli();
        $imgLink = $lajmi->getImgLink();
        $data = strtotime($lajmi->getData());
        $desc = $lajmi->getDescription();
        $permbajtja = $lajmi->getPermbajtja();
        $videoLink = $lajmi->getVideoLink();
        $kategoria = $lajmi->getKategoria();

        $sql = "INSERT INTO lajmet (ID,Titulli,Img_Link,Data,Description,Permbajtja,Video_Link, Kategoria) VALUES (?,?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$titulli,$imgLink,$data,$desc,$permbajtja,$videoLink, $kategoria]);

        echo "<script> alert('Lajmi u shtua me sukses!'); </script>";

    }

    function getAllLajmet(){
        $conn = $this->connection;

        $sql = "SELECT * FROM lajmet";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getLajmetById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM lajmet WHERE ID='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateLajmi($id,$titulli,$imgLink,$data,$desc,$permbajtja,$videoLink, $kategoria){
         $conn = $this->connection;

         $sql = "UPDATE lajmet SET Titulli=?, Img_Link=?, Data=?,Description=?, Permbajtja=?, Video_Link=?, Kategoria=? WHERE ID=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$titulli,$imgLink,strtotime($data),$desc,$permbajtja,$videoLink,$id, $kategoria]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteLajmi($id){
        $conn = $this->connection;

        $sql = "DELETE FROM lajmet WHERE ID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}
?>
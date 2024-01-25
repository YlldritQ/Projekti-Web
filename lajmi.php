<?php

class Lajmi{
    private $id;
    private $titulli;
    private $imgLink;
    private $data;
    private $description;
    private $permbajtja;
    private $videoLink;


    function __construct($id,$titulli,$imgLink,$data,$description,$permbajtja,$videoLink){
            $this->id = $id;
            $this->titulli = $titulli;
            $this->imgLink = $imgLink;
            $this->data = $data;
            $this->description = $description;
            $this->permbajtja = $permbajtja;
            $this->videoLink = $videoLink;
    }


    function getId(){
        return $this->id;
    }
    function getTitulli(){
        return $this->titulli;
    }
    function getImgLink(){
        return $this->imgLink;
    }
    function getData(){
        return $this->data;
    }
    function getDescription(){
        return $this->description;
    }
    function getPermbajtja(){
        return $this->permbajtja;
    }
    function getVideoLink(){
        return $this->videoLink;
    }
}

?>
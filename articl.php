<?php
include 'connection.php';


class Article extends Connection{
    private $id;
    private $title;
    private $content;
    private $creationDate;
    private $user_id;

   public function __constructor($conn){
    $this->conn=$conn;
   }
   public function setTitle($titre){
    $this->titre=$titre;
   }

   public function setContenu($contenu){
    $this->contenu=$contenu;
   }

   public function setDate($date){
    $this->date=$date;
   }

    public function createArticle($titre,$contenu,$date_de_creation,$id_user){

        $stmt = $this->connect()->prepare("INSERT INTO article (titre , contenu , date_de_creation , id_user) VALUEs(:titre, :contenu, :date_de_creation, :id_user)");
        $stmt->bindparam(':titre',$titre);
        $stmt->bindparam(':contenu',$contenu);
        $stmt->bindparam(':date_de_creation',$date_de_creation);
        $stmt->bindparam(':id_user',$id_user);


        $stmt->execute();
    }

    public function afficherArticle(){
        $articles = array();
        $req = "SELECT * FROM article";
            $result = $this->connect()->query($req);
            
            while ($array = $result->fetch(PDO::FETCH_ASSOC)) {
                $articles[] = $array;
            }
        return $articles;
    }
}

   

?>
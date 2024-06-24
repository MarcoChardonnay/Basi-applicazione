<?php
//File per query al database
class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    //Query lato Fornitore
    //Inserimento di una nuova categoria di prodotti; new category (IDcategory, category_name)
    public function insertNewCategory($IDcategory, $category_name){
        $sql = "INSERT INTO category (IDcategory, category_name) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("is", $IDcategory, $category_name);
        $stmt->execute();
        $stmt->close();
        //check if the query was successful
        if($stmt->affected_rows == 1) return true;
        else return false;
    }

    //Inserimento di una nuova collezione di prodotti; new collection
    //Inserimento di un nuovo prodotto; new product

    //Query lato Manager

    //Query lato Worker (makeup artist e commesso)

    //Query lato Cliente Registrato
}
?>
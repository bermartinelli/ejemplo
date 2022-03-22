<?php

class booksModel {

    private $db;

    public function __construct(){
        
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_libros;charset=utf8', 'root', '');
    }
    
    public function booksData() {
        
        $query = $this-> db -> prepare('SELECT a.nombre AS libro_nombre, a.genero, b.nombre AS autor_nombre FROM libros a INNER JOIN autor b ON a.id_autor_fk = b.id_autor');
        $query->execute();

        $booksInfo = $query -> fetchAll(PDO::FETCH_OBJ);
        

        return $booksInfo;
    }

    public function countBooks() {
        $query = $this-> db -> prepare ('SELECT COUNT(nombre) AS numero FROM libros');
        $query->execute();
        return $query-> fetchAll(PDO::FETCH_OBJ);
    }
}
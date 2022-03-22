<?php



require_once 'models/books.model.php';
require_once 'views/books.view.php';



class Controller 
{
    
    
    private $model;
    private $view;

    public function __construct() {
      
        $this->model = new booksModel();
        $this->view = new booksView();
    }

    

    public function showBooks() {
    
        $booksInfo = $this->model-> booksData();
        //$this->view -> renderBooks($booksInfo);
        
        $arreglo = $this-> model -> countBooks();
        $numero = $arreglo[0]->numero;
        echo($numero);
    }

}
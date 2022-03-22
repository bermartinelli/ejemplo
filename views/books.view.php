<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class booksView{

    public function __construct() {
        $this->smarty = new Smarty();
    }
    
    public function renderBooks($booksInfo){
        $this->smarty -> assign ('books', $booksInfo);
        $this->smarty -> display ('templates/tableBooks.tpl');
    }
}
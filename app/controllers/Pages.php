<?php
class Pages extends Controller{
    public function __construct(){
        //echo "Pages Load<br>";
    }

    public function index(){
        $data = [
            'title' => 'Welcome to home page'
        ];
        $this->view('pages/index', $data);
    }
}

?>
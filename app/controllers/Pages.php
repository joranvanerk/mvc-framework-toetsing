<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Fruit');

    }


    public function index() {
        $fruit = $this->userModel -> getFruits();

        $data = [
            'title' => 'Home page',
            'fruit' => $fruit
        ];

        $this->view('index', $data);
    }
}

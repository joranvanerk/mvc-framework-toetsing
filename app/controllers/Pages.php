<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Countries');

    }


    public function index() {
        $country = $this->userModel -> getCountries();

        $data = [
            'title' => 'Home page',
            'country' => $country
        ];

        $this->view('index', $data);
    }
}

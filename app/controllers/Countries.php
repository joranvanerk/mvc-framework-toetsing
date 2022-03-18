<?php
class Countries extends Controller {
    public function __construct() {
        $this->countriesModel = $this->model('Country');
    }

    public function index() {
        $countries = $this->countriesModel->getCountries();
        $rows = "";
        foreach ($countries as $value) {
                $rows .='<tr>
                  <td style="width: 10%;">' . $value->id . '</td>
                  <td>' . $value->name . '</td>
                  <td>' . $value->capitalCity . '</td>
                  <td>' . $value->continent . '</td>
                  <td>' . $value->population . '</td>
                </tr>';
        }
        $data = [
            'title' => 'Landen',
            'countries' => $rows
        ];

        $this->view('countries/index', $data);
    }
}

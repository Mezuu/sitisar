<?php

namespace App\Controllers;

use App\Models\DataModel;

class GetOptions extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new DataModel();
    }

    public function index($type)
    {
        $data = [];

        if ($type == 'countries') {
            $data = [
                'options' => $this->model->select('DISTINCT(commodity) AS option')->orderBy('option', 'ASC')
                    ->findAll()
            ];
        } else if ($type == 'commodities') {
            $data = [
                'options' => $this->model->select('DISTINCT(country) AS option')->orderBy('option', 'ASC')
                    ->findAll()
            ];
        }

        return die(json_encode($data));
    }
}

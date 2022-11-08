<?php

namespace App\Controllers;

use App\Models\DataModel;

class Home extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new DataModel();
    }

    public function index()
    {
        $data = [
            'commodities' => $this->model->select('DISTINCT(commodity)')->orderBy('commodity', 'ASC')
                ->findAll()
        ];

        return view('index', $data);
    }
}

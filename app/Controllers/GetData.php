<?php

namespace App\Controllers;

use App\Models\DataModel;

class GetData extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new DataModel();
    }

    public function index($type, $year, $month, $param)
    {
        $netWeight = [];
        $netValue = [];

        if ($type == 'countries') {
            $netWeight = $this->model->select(['country AS x', 'net_weight AS y'])
                ->where('year', $year)
                ->where('month', $month)
                ->where('commodity', $param)
                ->findAll();

            $netValue = $this->model->select(['country AS x', 'net_value AS y'])
                ->where('year', $year)
                ->where('month', $month)
                ->where('commodity', $param)
                ->findAll();
        } else if ($type == 'commodities') {
            $netWeight = $this->model->select(['commodity AS x', 'net_weight AS y'])
                ->where('year', $year)
                ->where('month', $month)
                ->where('country', $param)
                ->findAll();

            $netValue = $this->model->select(['commodity AS x', 'net_value AS y'])
                ->where('year', $year)
                ->where('month', $month)
                ->where('country', $param)
                ->findAll();
        }

        $data = [
            'net_weight' => $netWeight,
            'net_value' => $netValue
        ];

        return die(json_encode($data));
    }
}

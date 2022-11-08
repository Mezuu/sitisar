<?php

namespace App\Controllers;

use App\Models\DataModel;

class GetTimeSeries extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new DataModel();
    }

    public function index($country, $commodity)
    {
        $netWeight = $this->model->select(['net_weight'])
            ->where('commodity', $commodity)
            ->where('country', $country)
            ->orderBy('month', 'asc')
            ->findAll();
        $netValue = $this->model->select(['net_value'])
            ->where('commodity', $commodity)
            ->where('country', $country)
            ->orderBy('month', 'asc')
            ->findAll();

        $temp = array();
        for ($i = 0; $i < sizeof($netWeight); $i++) {
            array_push($temp, (int) $netWeight[$i]['net_weight']);
        }
        $netWeight = $temp;
        $temp = array();
        for ($i = 0; $i < sizeof($netValue); $i++) {
            array_push($temp, (int) $netValue[$i]['net_value']);
        }
        $netValue = $temp;

        $data = [
            'net_weight' => $netWeight,
            'net_value' => (array) $netValue
        ];

        return die(json_encode($data));
    }
}

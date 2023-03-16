<?php

class Home extends BaseController
{
    public function index($id = NULL, $name = NULL)
    {

        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'name'  => 'Mount Etna',
            'height' => '3,329',
            'country' => 'Italy',
            'last_eruption' => '2021',
            'number_of_victims' => '0'
        ];

        $this->view('index.php', $data);
    }
}
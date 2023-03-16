<?php

class VulkaanController extends BaseController
{
    private $vulkaanModel;

    public function __construct()
    {
        $this->vulkaanModel = $this->model('Vulkaan');
    }
    public function index()
    {
        $vulkaans = $this->vulkaanModel->getVulkaans();

        $rows = '';
        foreach ($vulkaans as $result) {
        $rows .= "<tr>
            <td>$result->id</td>
            <td>$result->Naam</td>
            <td>$result->Hoogte</td>
            <td>$result->Land</td>
            <td>$result->JaarLaatsteUitbarsting</td>
            <td>$result->AantalSlachtoffers</td>
          </tr>";
        }
        $data = ['title' => 'Top 5 actiefste vulkanen ter wereld', 'rows' => $rows];
        $this->view('vulkaan/index', $data);
    }
}
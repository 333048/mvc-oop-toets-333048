<?php

class VulkaanModel 
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getVulkaans()
    {
        $this->db->query('SELECT * FROM vulkaan ORDER BY Id ASC LIMIT 5');
        return $this->db->resultSet();
    }
}
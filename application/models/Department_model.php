<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends My_model {

    public function __construct()
    {
        parent::__construct();
        $this->table='departments';
        $this->tablekey='id';
    }
}
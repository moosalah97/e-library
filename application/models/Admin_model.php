<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends My_model {

    public function __construct()
    {
        parent::__construct();
        $this->table='admins';
        $this->tablekey='id';
    }
}
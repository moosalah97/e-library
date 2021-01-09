<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public $table;
    public $tablekey;

    public function get_all($where=array(),$limit=0,$offset=0,$order=array(),$join=array()){
       if(!empty($where)){
            foreach ($where as $key => $value ){
                $this->db->where($key,$value);
            }
       }

       if(!empty($limit )){
            $this->db->limit($limit,$offset);
       }

       if(!empty($order)){
            foreach ($order as $key => $value ){
                $this->db->order_by($key,$value);
            }
       }

       if(!empty($join)){
            foreach ($join as $data) {
                $this->db->join($data['table'], $data['condition'], $data['type']);
            }
       }

        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function get_one($id){
        $where=array(
            $this->tablekey => $id
        );
       $query=$this->get_all($where);

       if ($query){
           return $query[0];
       }
    }

    public function insert($data=array()){
        $this->db->insert($this->table, $data);
    }

    public function delete($id){
        $this->db->where($this->tablekey, $id);
        $this->db->delete($this->table);
    }

    public function update($id, $data=array()){
        $this->db->where($this->tablekey, $id);
        $this->db->update($this->table , $data);
    }

}

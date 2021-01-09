<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends CI_Controller{
    public function __construct()
    {
        parent::__construct();$this->load->model('Department_model', 'department');

    }
    public function index()
    {

    }
    public function home_view()
    {
        $this->load->view('departments/home_view');
    }
    public function admin_home_view(){
        $this->load->view('registration/add_books');
    }
    //load student views
    public function computer_view(){
        $data['departments'] = $this->department->get_all();
        $this->load->view('departments/computer_view',$data);
    }
    public function math_view(){
        $data['departments'] = $this->department->get_all();
        $this->load->view('departments/math_view',$data);
    }
    public function physics_view(){
        $data['departments'] = $this->department->get_all();
        $this->load->view('departments/physics_view',$data);
    }
    public function chemistry_view(){
        $data['departments'] = $this->department->get_all();
        $this->load->view('departments/chemistry_view',$data);
    }
    //load admin views
    public function admin_computer_view (){
        $data['departments'] = $this->department->get_all();
        $this->load->view('admin_pages/computer_view',$data);
    }

    public function admin_physics_view(){
        $data['departments'] = $this->department->get_all();
        $this->load->view('admin_pages/physics_view',$data);
    }
    public function admin_chemistry_view(){
        $data['departments'] = $this->department->get_all();
        $this->load->view('admin_pages/chemistry_view',$data);
    }
    public function admin_math_view(){
        $data['departments'] = $this->department->get_all();
        $this->load->view('admin_pages/math_view',$data);
    }
    //load view add math books
    public function add_math_book(){
        $this->load->view('admin_pages/add_math_book');
    }
    public function add_physics_book(){
        $this->load->view('admin_pages/add_physics_book');
    }
    public function add_computer_book(){
        $this->load->view('admin_pages/add_computer_book');
    }
    public function add_chemistry_book(){
        $this->load->view('admin_pages/add_chemistry_book');
    }
    //add math book
    public function insert_math(){
            $config = array(
                'upload_path' => "./upload/",
                'allowed_types' => "pdf|docx|ppt",
                'overwrite' => TRUE,
            );
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('bookname')){
                $book = $this->upload->data();
                $data = array(
                    'bookname'    =>     $this->upload->data('full_path').$book['file_name'],
                    'book_name'   =>     $this->input->post('book_name'),
                    'department'  =>     $this->input->post('department'),
                    'level'       =>     $this->input->post('level'),
                );
                $this->department->insert($data);
                $this->admin_math_view();
            }else {
                echo $this->upload->display_errors();
            }
    }

    //insert physics book
    public function insert_physics(){
        $config = array(
            'upload_path' => "./upload/",
            'allowed_types' => "pdf|docx|ppt",
            'overwrite' => TRUE,
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('bookname')){
            $book = $this->upload->data();
            $data = array(
                'bookname'    =>     $this->upload->data('full_path').$book['file_name'],
                'book_name'   =>     $this->input->post('book_name'),
                'department'  =>     $this->input->post('department'),
                'level'       =>     $this->input->post('level'),
            );
            $this->department->insert($data);
            $this->admin_physics_view();
        }else {
            echo $this->upload->display_errors();
        }
    }
    //insert computer book
    public function insert_computer(){
        $config = array(
            'upload_path' => "./upload/",
            'allowed_types' => "pdf|docx|ppt",
            'overwrite' => TRUE,
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('bookname')){
            $book = $this->upload->data();
            $data = array(
                'bookname'    =>     $this->upload->data('full_path').$book['file_name'],
                'book_name'   =>     $this->input->post('book_name'),
                'department'  =>     $this->input->post('department'),
                'level'       =>     $this->input->post('level'),
            );
            $this->department->insert($data);
            $this->admin_computer_view();
        }else {
            echo $this->upload->display_errors();
        }
    }
    //add chemistry book
    public function insert_chemistry(){
        $config = array(
            'upload_path' => "./upload/",
            'allowed_types' => "pdf|docx|ppt",
            'overwrite' => TRUE,
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('bookname')){
            $book = $this->upload->data();
            $data = array(
                'bookname'    =>     $this->upload->data('full_path').$book['file_name'],
                'book_name'   =>     $this->input->post('book_name'),
                'department'  =>     $this->input->post('department'),
                'level'       =>     $this->input->post('level'),
            );
            $this->department->insert($data);
            $this->admin_chemistry_view();
        }else {
            echo $this->upload->display_errors();
        }
    }
    public function remove_math($id){
        $this->department->delete($id);
        $data['departments'] = $this->department->get_all();
         $this->admin_math_view();
    }
    public function remove_physics($id){
        $this->department->delete($id);
        $data['departments'] = $this->department->get_all();
        $this->admin_physics_view();
    }
    public function remove_computer($id){
        $this->department->delete($id);
        $data['departments'] = $this->department->get_all();
        $this->admin_computer_view();
    }
    public function remove_chemistry($id){
        $this->department->delete($id);
        $data['departments'] = $this->department->get_all();
        $this->admin_chemistry_view();
    }
    public function download($book_name){
        //get file info from database
        $fileInfo = $this->department->get_one($book_name);
        //file path
        $file = "upload/".$book_name;
        //download file from directory
      force_download($file, NULL);
    }

}

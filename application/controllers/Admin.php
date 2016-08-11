<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    private $is_admin = FALSE;

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('is_admin')=='1') {
            $this->parse->assign('admin', TRUE);
            $this->is_admin = TRUE;
        }
        $this->load->model('Admin_model');
    }

    function index()
    {
        if(!$this->input->post()){
            $this->parse->view("regform");
        } else {
            $login    = $this->input->post('login');
            $password = $this->input->post('password');
            if($this->Admin_model->check_login($login, $password)) {
                $this->session->set_userdata('is_admin', '1');
                redirect(base_url());
            }else{
                $this->parse->assign('error', TRUE);
                $this->parse->view("regform");
            }
        }
    }

    function create()
    {
        if($this->is_admin) {
            if(!$this->input->post()){
                $this->parse->assign('action', '/admin/create');
                return $this->parse->view("add_news");
            } else{
                $title    = $this->input->post('title');
                $content  = $this->input->post('content');
                $category = $this->input->post('category');
                $this->load->model('Image_model');
                if($image_name = $this->Image_model->upload()){
                    $this->Image_model->format($image_name);
                }
                $this->Admin_model->create_news($title, $content, $category, $image_name);
            }
        }
        redirect(base_url());
    }

    function edit($slug)
    {
        if($this->is_admin) {
            if(!$this->input->post()){
                $data = get_object_vars($this->News_model->get_news($slug)[0]);
                $this->parse->assign('action', '/admin/edit/'.$slug);
                return $this->parse->view("add_news", $data);
            }else{
                $title    = $this->input->post('title');
                $content  = $this->input->post('content');
                $category = $this->input->post('category');
                $this->load->model('Image_model');

                //whether the image?
                if ($this->input->post('image_edit')) {
                    //Will use new or old image?
                    if ($this->input->post('image_edit') == 'old') {
                        $this->Admin_model->update_news($slug, $title, $content, $category);

                    } elseif ($this->input->post('image_edit') == 'new') {
                        $img_update = TRUE;
                        //Isset image or empty?
                        if($image_name = $this->Image_model->upload()){
                            $this->Image_model->format($image_name);
                        }
                        $this->Admin_model->update_news($slug, $title, $content, $category, $img_update, $image_name);
                    }
                } else{
                    //image appeard or empty?
                    if($image_name = $this->Image_model->upload()){
                        $this->Image_model->format($image_name);
                        $img_update = TRUE;
                        $this->Admin_model->update_news($slug, $title, $content, $category, $img_update, $image_name);
                    } else{
                        $this->Admin_model->update_news($slug, $title, $content, $category);
                    }
                }
                redirect(base_url());
            }
        }
    }

    function delete($slug)
    {
        if($this->is_admin) {
            $data = get_object_vars($this->News_model->get_news($slug)[0]);
            $this->Admin_model->delete_news($slug);
            redirect(base_url());
        }
        redirect(base_url());
    }

}
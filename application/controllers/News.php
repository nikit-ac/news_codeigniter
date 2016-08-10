<?php

class News extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('is_admin')=='1') {
            $this->parse->assign('admin', TRUE);
        }
    }

    function index($category = 0, $page = 1)
    {
        $news = $this->News_model->get_last_news($category, $page);
        $this->load->helper('text');
        $data = $this->News_model->prepare_data($news);
        $pages_count = $this->News_model->how_much_pages($category);

        $this->parse->assign('active_cat', $category);
        $this->parse->assign('page', $page);
        $this->parse->assign('data', $data);
        $this->parse->assign('pages_count', $pages_count);
        $this->parse->view("many_news");
    }

    function get_one_news($slug)
    {
        $data = get_object_vars($this->News_model->get_news($slug)[0]);
        $this->parse->view("one_news", $data);
    }


}
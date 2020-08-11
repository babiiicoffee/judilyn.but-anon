<?php
class NavagationController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        // $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        // $this->load->view('news/index', $data);
        $this->load->view('pages/projects');
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        // $data['news_item'] = $this->news_model->get_news($slug);
        $this->load->view('pages/projects');
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EmailController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('pages/contact');
    }

    function send()
    {

        $this->load->library('email');

        $this->email->from('07judilynb@example.com', 'Jude');
        $this->email->to('ziekind07@example.com');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

        echo $this->email->print_debugger();


        // $this->load->config('email');
        // $this->load->library('email');

        // $from = $this->config->item('smtp_user');
        // $to = $this->input->post('ziekind07@gmail.com');
        // $subject = $this->input->post('subject');
        // $message = $this->input->post('message');

        // $this->email->set_newline("\r\n");
        // $this->email->from($from);
        // $this->email->to($to);
        // $this->email->subject($subject);
        // $this->email->message($message);

        // if ($this->email->send()) {
        //     echo 'Your Email has successfully been sent.';
        // } else {
        //     show_error($this->email->print_debugger());
        // }
    }
}

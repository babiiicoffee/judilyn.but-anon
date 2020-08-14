<?php
class Pages extends CI_Controller
{

        public function view($page = 'home')
        {
                if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
                        // Whoops, we don't have a page for that!
                        show_404();
                        // $this->load->view('error404/error404.php');
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page); 
                $this->load->view('templates/footer', $data);
        }

        public function contact($page = 'contact')
        {

                $data['title'] = ucfirst($page); // Capitalize the first letter
                # code...

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page);
                $this->load->view('templates/footer', $data);
        }

        public function aboutme($page = 'aboutme')
        {

                $data['title'] = ucfirst($page); // Capitalize the first letter
                # code...

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page);
                $this->load->view('templates/footer', $data);
        }

        public function hobbies($page = 'hobbies')
        {

                $data['title'] = ucfirst($page); // Capitalize the first letter
                # code...

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page);
                $this->load->view('templates/footer', $data);
        }

        public function project($page = 'project')
        {
                $data['title'] = ucfirst($page); // Capitalize the first letter
                # code...

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page);
                $this->load->view('templates/footer', $data);
        }

        public function resume($page = 'resume')
        {

                $data['title'] = ucfirst($page); // Capitalize the first letter
                # code...

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page); 
                $this->load->view('templates/footer', $data);
        }

}

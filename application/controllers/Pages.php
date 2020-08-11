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
                $this->load->view('pages/' . $page, $data); // homepage
                // $this->load->view('pages/aboutme');
                $this->load->view('templates/footer', $data);
        }

        public function contact($page = 'home')
        {
                # code...
                $data['title'] = ucfirst($page);

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page, $data); // homepage
                $this->load->view('pages/contact');
                $this->load->view('templates/footer', $data);
        }

        public function aboutme($page = 'home')
        {
                # code...
                $data['title'] = ucfirst($page);

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page, $data); // homepage
                $this->load->view('pages/aboutme');
                $this->load->view('templates/footer', $data);
        }

        public function hobbies($page = 'home')
        {
                # code...
                $data['title'] = ucfirst($page);

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page, $data); // homepage
                $this->load->view('pages/hobbies');
                $this->load->view('templates/footer', $data);
        }

        public function project($page = 'home')
        {
                # code...
                $data['title'] = ucfirst($page);

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page, $data); // homepage
                $this->load->view('pages/project');
                $this->load->view('templates/footer', $data);
        }

        public function resume($page = 'home')
        {
                # code...
                $data['title'] = ucfirst($page);

                $this->load->view('templates/header', $data);
                $this->load->view('pages/' . $page, $data); // homepage
                $this->load->view('pages/resume');
                $this->load->view('templates/footer', $data);
        }


        // public function hobbies($page = 'hobbies')
        // {
        //         # code...
        //         $this->load->view('pages/home');
        //         $this->load->view('page/' . $page);
        //         $this->load->view('templates/footer');
        // }

        // public function aboutme($page = 'aboutme')
        // {
        //         # code...
        //         $this->load->helper('url');
        //         $this->load->view('pages/home');
        //         $this->load->view('page/' . $page);
        //         $this->load->view('templates/footer');
        // }
}

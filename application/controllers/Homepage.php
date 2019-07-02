<?php
class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $hasil = [];
        $this->form_validation->set_rules('kalimat', 'Kalimat', 'required');

        if ($this->form_validation->run() != FALSE) {
            $kalimat = $this->input->post('kalimat');

            $oko_dan_faiz = explode(" ", $kalimat);

            for ($i = 0; $i < count($oko_dan_faiz) - 1; $i++) {
                $hasil[] = $oko_dan_faiz[$i] . " " . $oko_dan_faiz[$i + 1];
            }

            $data['hasil'] = $hasil;
        }


        $this->load->view('templates/header');
        $this->load->view('homepage/index', $data);
        $this->load->view('templates/footer');
    }
}

<?php 

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['gambar'] = 'welivwelovwelai.jpg';
        $data['nama'] = 'Blue Smurf Cat';
        $data['pekerjaan'] = 'Adventurer';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
    public function buku()
    {
        $data['judul'] = 'Buku';
        $this->view('templates/header', $data);
        $this->view('home/buku', $data);
        $this->view('templates/footer');
    }
}
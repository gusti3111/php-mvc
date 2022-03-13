<?php

class About extends Controller
{
  public function index($nama = 'Tono', $job = 'Bocil Bacot', $age = 10)

  {
    $data['nama'] = $nama;
    $data['job'] = $job;
    $data['age'] = $age;
    $data['judul'] = 'About ME';

    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  public function page()

  {
    $data['judul'] = 'My Pages';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}

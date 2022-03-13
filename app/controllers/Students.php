<?php


class Students extends Controller
{
  public function index()
  {
    $data['judul'] = 'List of Students';
    $data['mhs'] = $this->model('Students_model')->getAllStudents();
    $this->view('templates/header', $data);
    $this->view('students/index', $data);
    $this->view('templates/footer');
  }
  public function details($id)
  {
    $data['judul'] = 'Students Details';
    $data['mhs'] = $this->model('Students_model')->getStudentsByid($id);
    $this->view('templates/header', $data);
    $this->view('students/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if ($this->model('Students_model')->tambahDataStudents($_POST) > 0) {
      header('Location: ' . BASEURL . '/Students');
    }
  }
  public function hapus($id)
  {
    if ($this->model('Students_model')->hapusDataStudents($id) > 0) {
      header('Location: ' . BASEURL . '/Students');
    }
  }

  public function getubah()
  {
    echo json_encode($this->model('Students_model')->getStudentsByid($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('Students_model')->ubahDataStudents($_POST) > 0) {
      header('Location: ' . BASEURL . '/Students');
    }
  }

  public function cari()
  {
    $data['judul'] = 'List of Students';
    $data['mhs'] = $this->model('Students_model')->SearchStudents();
    $this->view('templates/header', $data);
    $this->view('students/index', $data);
    $this->view('templates/footer');
  }
}

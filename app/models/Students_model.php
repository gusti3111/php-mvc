<?php

class Students_model
{

  private $table = 'students02';
  private $db;

  public function __construct()

  {
    // membuat object database
    $this->db = new database;
  }



  // Mengambil Semua Data Student dari Database MYSQL
  public function getAllStudents()
  {
    // query mahasiswa dari database

    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  // mengambil data student berdasarkan id
  public function getStudentsByid($id)
  {
    // query data dari table students02 mysql berdasarkan id
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }


  // TAMBAH DATA STUDENT DAN KIRIMKAN KE TABLE DATABASE


  public function tambahDataStudents($data)
  {
    // masukan data ke table students02
    // yang di masukan yaitu data nama, email, jurusan

    $query = "INSERT INTO students02
                VALUES
              (null, :nama, :email , :jurusan)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataStudents($id)
  {
    $query = "DELETE FROM students02 WHERE id= :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }


  public function ubahDataStudents($data)
  {
    // masukan data ke table students02
    // yang di masukan yaitu data nama, email, jurusan

    $query = "UPDATE students02 SET
               nama = :nama,
               email = :email,
               jurusan = :jurusan
              WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']);
    $this->db->execute();

    return $this->db->rowCount();
  }
  public function SearchStudents()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM students02 WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
}

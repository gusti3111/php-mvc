<div class="container mt-3">
  <div class="row mb-4">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary adduserbutton" data-toggle="modal" data-target="#formModal">
        add new user
      </button>

    </div>
  </div>


  <div class="row mb-4">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/Students/cari" method="POST">
        <div class="input-group ">
          <input type="text" class="form-control" placeholder="Cari data students" name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Button</button>
          </div>
        </div>


      </form>

    </div>
  </div>

  <div class="row">
    <div class="col-6">

      <h3>List Of Students</h3>

      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item "><?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/Students/details/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1">Details</a>
            <a href="<?= BASEURL; ?>/Students/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('aret you sure ?');">Hapus</a>
            <a href="<?= BASEURL; ?>/Students/ubah/<?= $mhs['id']; ?>" class="badge badge-warning  float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Update</a>

          </li>
        <?php endforeach; ?>

      </ul>



    </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/Students/tambah " method="post">
          <input type="hidden" name="id" id="id">
          <!-- insert nama -->
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <!-- insert email -->
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>


          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="IPA">IPA</option>
              <option value="IPS">IPS</option>
              <option value="Bahasa">Bahasa</option>
            </select>
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div>
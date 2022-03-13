$(function(){
  // ketika dikilik jalankan sesuatu
  $('.adduserbutton').on('click',function(){
    $('#judulModal').html('Tambah Data Students');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });
 
  $('.tampilModalUbah').on('click', function(){
    $('#judulModal').html('Ubah Data Students');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/PHP/PHPMVC2/public/Students/ubah')
    const id = $(this).data('id');
    $.ajax({

      url: 'http://localhost/PHP/PHPMVC2/public/Students/getubah/',
      data: {id : id},
      method: 'POST',
      dataType: 'json',
      success:function(data){
        $('#nama').val(data.nama);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      }

    });
    
  });
   

});


// }); 
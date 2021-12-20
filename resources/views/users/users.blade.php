@extends('header')
@section('content')
<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                <!-- Page-header end -->
                                
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <!-- Basic table card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Users</h5>
                                            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                        </div>
                                        <div class="card-block table-border-style">

                                        <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#inlineForm">
                                + Tambah Users
                              </button><br><br><br>
                              <p class="viewdata">
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->
                      

                        <div id="styleSelector">

                        </div>
                    </div>
                </div>

                <div class="modal fade text-left" id="inlineForm" tabindex="-1"
                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Tambah Data</h4>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <form id="tambahusers" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <label>Nama: </label>
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama">
                                        <div class="invalid-feedback errorname">
    
                                        </div> 
                                    </div>
                                        <label>Email: </label>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                        <div class="invalid-feedback erroremail">
    
                                        </div> 
                                    </div> 
                                    
                                    <label>Role: </label>
                                    <div class="form-group">
                                        <select class ="form-control"  name="role" id="role">
                                        <option value="supplier">Supplier</option>
                                        <option value="kasir">Kasir</option>
                                        <option value="Penjaga Gudang">Penjaga Gudang</option>
                                         </select>
                                        </div> 
                                    
                                    
                                        <label>Password: </label>
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                        <div class="invalid-feedback errorpassword">
    
                                        </div> 
                                    </div> 
                                        <label>Confirm Password: </label>
                                    <div class="form-group">
                                        <input type="password" id="password_again" name="password_again" class="form-control" placeholder="Confirm Password">
                                        <div class="invalid-feedback errorpassword_again">
    
                                        </div> 
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary"
                                    data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button  type="submit" class="btn btn-primary ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="modal fade text-left" id="Edit" tabindex="-1"
            role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Edit Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form id="editusers" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="text" id="id" name="id" class="form-control" hidden>
                            <label>Nama: </label>
                                <div class="form-group">
                                    <input type="text" id="editname" name="name" class="form-control" placeholder="Nama">
                                    <div class="invalid-feedback errorname">

                                    </div> 
                                </div>
                                    <label>Email: </label>
                                <div class="form-group">
                                    <input type="email" id="editemail" name="email" class="form-control" placeholder="Email">
                                    <div class="invalid-feedback erroremail">

                                    </div> 
                                </div> 

                                <label>Role: </label>
                                <div class="form-group">
                                    <select class ="form-control"  name="role" id="role">
                                    <option value="supplier">Supplier</option>
                                    <option value="kasir">Kasir</option>
                                    <option value="Penjaga Gudang">Penjaga Gudang</option>
                                     </select>
                                    </div> 
                                
                                    <label>Password: </label>
                                <div class="form-group">
                                    <input type="password" id="editpassword" name="password" class="form-control" placeholder="Password">
                                    <div class="invalid-feedback errorpassword">

                                    </div> 
                                </div> 
                                    <label>Confirm Password: </label>
                                <div class="form-group">
                                    <input type="password" id="editpassword_again" name="password_again" class="form-control" placeholder="Confirm Password">
                                    <div class="invalid-feedback errorpassword_again">

                                    </div> 
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary"
                                data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button  type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                        @endsection

                        @section('javascript')
                        <script>
                            function dataartikel(){
    $.ajax({
        type:"GET",
        url : "/api/users",
        dataType: "json",
        success: function(response){
            $('.viewdata').html(response.data);
        },
        error:function(xhr, status, error)
        {
            var err = eval("(" + xhr.responseText + ")");
            alert(err.Message);
        }
    });
}

$(document).ready(function(){
    dataartikel();
});

                        </script>
                        


<script>
    $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

$('#tambahusers').submit(function(e) {
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
     type:'POST',
     url: `{{ route('users.store') }}`,
      data: formData,
      contentType: false,
      processData: false,
      
      success: (response) => {
        if (response.error) {
           if(response.error.name) {
                   $('#name').addClass('is-invalid');
                   $('.errorname').html(response.error.name);
               }
           if(response.error.email) {
                   $('#email').addClass('is-invalid');
                   $('.erroremail').html(response.error.email);
               }
           if(response.error.password) {
                   $('#password').addClass('is-invalid');
                   $('.errorpassword').html(response.error.password);
               }
           if(response.error.password_again) {
                   $('#password_again').addClass('is-invalid');
                   $('.errorpassword_again').html(response.error.password_again);
               }
        }else{

            $('#inlineForm').modal('hide');
            Swal.fire(
  'Data Berhasil Di Tambah',
  'You clicked the button!',
  'success'
)
dataartikel();
        }
      },
  });
});

$(document).ready(function() {
         // Untuk sunting
         $('#Edit').on('show.bs.modal', function (event) {
             var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
             var modal          = $(this)

             // Isi nilai pada field
             
             modal.find('#id').attr("value",div.data('id'));
             modal.find('#editname').attr("value",div.data('name'));
             modal.find('#editemail').attr("value",div.data('email'));
             modal.find('#editpassword').attr("value",div.data('password'));
         });
     });

     $('#editusers').submit(function(e) {
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
     type:'POST',
     url: `{{ route('users.updated') }}`,
      data: formData,
      contentType: false,
      processData: false,
      
      success: (response) => {
        if (response.error) {
            if(response.error.name) {
                   $('#name').addClass('is-invalid');
                   $('.errorname').html(response.error.name);
               }
           if(response.error.email) {
                   $('#email').addClass('is-invalid');
                   $('.erroremail').html(response.error.email);
               }
           if(response.error.password) {
                   $('#password').addClass('is-invalid');
                   $('.errorpassword').html(response.error.password);
               }
           if(response.error.password_again) {
                   $('#password_again').addClass('is-invalid');
                   $('.errorpassword_again').html(response.error.password_again);
               }
        }else{

            $('#Edit').modal('hide');
            Swal.fire(
  'Data Berhasil Di Update',
  'You clicked the button!',
  'warning'
)
dataartikel();
        }
      },
  });
});

function hapus(id) {
        Swal.fire({
  title: 'Apakah Anda Yakin Ingin Menghapus data anda?',
  showDenyButton: false,
  showCancelButton: true,
  confirmButtonText: `Yakin`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    $.ajax({
            type:"POST",
            url: '/api/hapus-users',
            data: {id: id},
            dataType: 'json',
            success: function(rows)
            {
    Swal.fire('Saved!', 'Data berhasil di hapus !', 'error')
dataartikel();
            }
        });
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})
        }

</script>
 @endsection
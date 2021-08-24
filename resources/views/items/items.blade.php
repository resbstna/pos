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
                                            <h5>Items</h5>
                                            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#inlineForm">
                                                + Tambah Items
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
                        <form id="tambahcategories" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <label>Barcode: </label>
                                <div class="form-group">
                                    <input type="text" id="barcode" name="barcode" class="form-control" placeholder="Barcode">
                                    <div class="invalid-feedback errorbarcode">

                                    </div> 
                                </div>
                                <label>Name: </label>
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nama">
                                    <div class="invalid-feedback errorname">

                                    </div> 
                                </div>
                                <label>Category: </label>
                                <div class="form-group">
                                    <select class="form-control" name="category" id="categories_list">
                                        <option value= "" >Select</option>
                                    </select>
                                    <div class="invalid-feedback errorcategory">

                                    </div> 
                                </div>
                                <label>Unit: </label>
                                <div class="form-group">
                                    <select class="form-control" name="unit" id="units_list">
                                        <option value= "" >Select</option>
                                    </select>
                                    <div class="invalid-feedback errorunit">

                                    </div> 
                                </div>
                                <label>Price: </label>
                                <div class="form-group">
                                    <input type="number" id="price" name="price" class="form-control" placeholder="Price">
                                    <div class="invalid-feedback errorprice">

                                    </div> 
                                </div>
                                <label>Stock: </label>
                                <div class="form-group">
                                    <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock">
                                    <div class="invalid-feedback errorstock">

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
                    <form id="editcategories" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="text" id="id" name="id" class="form-control" hidden>
                            <label>Barcode: </label>
                            <div class="form-group">
                                <input type="text" id="editbarcode" name="barcode" class="form-control" placeholder="Barcode">
                                <div class="invalid-feedback erroreditbarcode">

                                </div> 
                            </div>
                            <label>Name: </label>
                            <div class="form-group">
                                <input type="text" id="editname" name="name" class="form-control" placeholder="Nama">
                                <div class="invalid-feedback erroreditname">

                                </div> 
                            </div>
                            <label>Category: </label>
                            <div class="form-group">
                               
                                <select class="form-control" name="editcategory" id="categories_list_edit">
                                    <option value= "" >Select</option>
                                </select>
                                <div class="invalid-feedback erroreditcategory">

                                </div> 
                            </div>
                            <label>Unit: </label>
                            <div class="form-group">
                                <select class="form-control" name="editcategory" id="units_list_edit" >
                                    <option value= "" >Select</option>
                                </select>
                                <div class="invalid-feedback errorname">

                                </div> 
                            </div>
                            <label>Price: </label>
                            <div class="form-group">
                                <input type="number" id="editprice" name="price" class="form-control" placeholder="Price">
                                <div class="invalid-feedback erroreditprice">

                                </div> 
                            </div>
                            <label>Stock: </label>
                            <div class="form-group">
                                <input type="number" id="editstock" name="stock" class="form-control" placeholder="Stock">
                                <div class="invalid-feedback erroreditstock">

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
        url : "/api/items",
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
    categories_list();
    units_list();
    units_list_edit();
    categories_list_edit();
});

                        </script>
                        


<script>
    $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

$('#tambahcategories').submit(function(e) {
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
     type:'POST',
     url: `{{ route('items.store') }}`,
      data: formData,
      contentType: false,
      processData: false,
      
      success: (response) => {
        if (response.error) {
           if(response.error.barcode) {
                   $('#barcode').addClass('is-invalid');
                   $('.errorbarcode').html(response.error.barcode);
               }
               if(response.error.name) {
                   $('#name').addClass('is-invalid');
                   $('.errorname').html(response.error.name);
               }
               
               if(response.error.price) {
                   $('#price').addClass('is-invalid');
                   $('.errorprice').html(response.error.price);
               }
               if(response.error.stock) {
                   $('#stock').addClass('is-invalid');
                   $('.errorstock').html(response.error.stock);
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
             modal.find('#editbarcode').attr("value",div.data('barcode'));
             modal.find('#editname').attr("value",div.data('name'));
             modal.find('#editunit').attr("value",div.data('unit'));
             modal.find('#editprice').attr("value",div.data('price'));
             modal.find('#editstock').attr("value",div.data('stock'));


             $.ajax({
          url: "/api/categories-list",
          type: "GET",
          dataType: 'json',
          success: function (data) {

            for(var i in data){

                var row = data[i];
            $('#categories_list_edit option[value="' + div.data('category') + '"]').prop('selected', true);
            }
            
            
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });

      $.ajax({
          url: "/api/units-list",
          type: "GET",
          dataType: 'json',
          success: function (data) {

            for(var i in data){

                var row = data[i];
            $('#units_list_edit option[value="' + div.data('unit') + '"]').prop('selected', true);
            }
            
            
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
         });
     });

     $('#editcategories').submit(function(e) {
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
     type:'POST',
     url: `{{ route('items.updated') }}`,
      data: formData,
      contentType: false,
      processData: false,
      
      success: (response) => {
        if (response.error) {
            if(response.error.barcode) {
                   $('#editbarcode').addClass('is-invalid');
                   $('.erroreditbarcode').html(response.error.barcode);
               }
               if(response.error.name) {
                   $('#editname').addClass('is-invalid');
                   $('.erroreditname').html(response.error.name);
               }
               
               if(response.error.price) {
                   $('#editprice').addClass('is-invalid');
                   $('.erroreditprice').html(response.error.price);
               }
               if(response.error.stock) {
                   $('#editstock').addClass('is-invalid');
                   $('.erroreditstock').html(response.error.stock);
               }
        }else{

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
            url: '/api/hapus-items',
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

function categories_list(){
    $.ajax({
          url: "/api/categories-list",
          type: "GET",
          dataType: 'json',
          success: function (data) {

            for(var i in data){

                var row = data[i];
            $('#categories_list').append("<option value='"+row.id+"'>"+row.name+"</option>");
            }
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    }

    function units_list(){
    $.ajax({
          url: "/api/units-list",
          type: "GET",
          dataType: 'json',
          success: function (data) {

            for(var i in data){

                var row = data[i];
            $('#units_list').append("<option value='"+row.id+"'>"+row.name+"</option>");
            }
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    }

    function categories_list_edit(){
    $.ajax({
          url: "/api/categories-list",
          type: "GET",
          dataType: 'json',
          success: function (data) {

            for(var i in data){

                var row = data[i];
            $('#categories_list_edit').append("<option value='"+row.id+"'>"+row.name+"</option>");
            }
            
            var coba = document.getElementById("editcategory").value;
            $('#categories_list_edit option[value="' + coba + '"]').prop('selected', true);
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    }


    function units_list_edit(){
    $.ajax({
          url: "/api/units-list",
          type: "GET",
          dataType: 'json',
          success: function (data) {

            for(var i in data){

var row = data[i];
$('#units_list_edit').append("<option value='"+row.id+"'>"+row.name+"</option>");
}

var coba = document.getElementById("editunits").value;
$('#units_list_edit option[value="' + coba + '"]').prop('selected', true);
},
          error: function (data) {
              console.log('Error:', data);
          }
      });
    }

</script>
 @endsection
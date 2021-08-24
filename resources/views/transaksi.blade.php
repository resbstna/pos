@extends('header')
@section('content')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Date</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="date" class="form-control" value="<?= date("Y-m-d"); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Kasir</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Customer</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                
                                                                                </form>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Barcode</label>
                                                                    <div class="col-sm-6">
                                                                       <select class ="form-control" id="js-example-basic-multiple" name="barcode" onchange="changebarcode(this.value)">
                                                                           @foreach($data as $row)
                                                                       <option value="{{$row->barcode}}">{{$row->barcode}} - {{$row->name}}</option>
                                                                       @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Qty</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="number" class="form-control" id="qty" name="qty" onchange="changeqty(this.value)">
                                                                    </div>
                                                                </div>
                                                                
                                                                                </form>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <span class="text-c-yellow">Invoice</span>
                                                                <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Rp</label>
                                                        <div class="col-sm-8">
                                                             <input type="number" class="form-control" id="qty">
                                                                    </div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- card1 end -->
                                            <!-- Statestics Start -->
                                            <div class="col-md-12 col-xl-23">
                                                <div class="card">
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Barcode</th>
                                                                        <th>Product Item</th>
                                                                        <th>Price</th>
                                                                        <th>Qty</th>
                                                                        <th>Discount Item</th>
                                                                        <th>Total</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Sub Total</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Discount</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Grand Total</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                
                                                                                </form>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Cash</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Change</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                
                                                                                </form>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                                    <div class="col-md-8 col-xl-4">
                                                        <div class="card widget-card-1">
                                                            <div class="card-block-small">
                                                                    <form>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Note</label>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                                        </form>
                                                                                </div>
                                                                            </div>
                                                            </div>
                                <br>
                                                                <button  type="button" class="btn btn-primary" >
                                                                                  Process Payment
                                          </button>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endsection

                        @section('javascript')
                        <script>
         $(document).ready(function() {
    $('#js-example-basic-multiple').select2();
});

function changebarcode(val) {
$('#qty').val(0);

// $.ajax({
//         type:"GET",
//         url : "/api/invoice",
//         dataType: "json",
//         success: function(response){
//            var price = response.price;
//         },
//         error:function(xhr, status, error)
//         {
//             var err = eval("(" + xhr.responseText + ")");
//             alert(err.Message);
//         }
//     });
// var jumlah = val
//     $('#invoice').val(0);

}

function changeqty(val) {
    
$.ajax({
        type:"POST",
        data: data_post,
        url : "/api/list_transaksi",
        dataType: "json",
        success: function(response){
           var price = response.price;
        },
        error:function(xhr, status, error)
        {
            var err = eval("(" + xhr.responseText + ")");
            alert(err.Message);
        }
    });
// var jumlah = val
//     $('#invoice').val(0);

}
                            </script>
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
             modal.find('#editpassword_again').attr("value",div.data('password_again'));
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
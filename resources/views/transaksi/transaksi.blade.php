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
                                                            <form  id="tambahtransaksi" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Date</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="date" class="form-control" name="date" value="<?= date("Y-m-d"); ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Kasir</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" name="kasir" id="kasir">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Customer</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" name="customer" id="customer">
                                                                    </div>
                                                                </div>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Barcode</label>
                                                                    <div class="col-sm-6">
                                                                       <select class ="form-control"  name="barcode" id="barcode" onchange="changebarcode(this.value)">
                                                                           @foreach($data as $row)
                                                                       <option value="{{$row->barcode}}">{{$row->barcode}} - {{$row->name}}</option>
                                                                       @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <input type="text" id = "id_penjualan" value="{{$id_penjualan}}" name="id_penjualan" class="form-control" hidden>
                                                                </div>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <span class="text-c-yellow">Invoice</span>
                                                                <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label"></label>
                                                        <div class="col-sm-8">
                                                     <h2 class="tampil-bayar"></h2>
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
                                                   <p class="viewdata"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Sub Total</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="subtotal" name="subtotal" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Discount</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="number" class="form-control" name="discount" id="discount" onchange="discount_change(this.value)">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Grand Total</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" id="grand_total">
                                                                        <input type="text" class="form-control" name="grand_total" id="grand_total_hidden" hidden>
                                                                    </div>
                                                                </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                    </div>
                                            <div class="col-md-8 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Cash</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" name="cash" id="cash" onchange="change_cash(this.value)">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Change</label>
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" name="change" id="change">
                                                                    </div>
                                                                </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                    </div>
                                                    <div class="col-md-8 col-xl-4">
                                                        <div class="card widget-card-1">
                                                            <div class="card-block-small">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Note</label>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" name="note" id="note">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                                </div>
                                                                            </div>
                                                            </div>
                                <br>
                                                                <button  type="submit" class="btn btn-primary" >
                                                                                  Process Payment
                                          </button>
                                                
                                                                
                                        </form>
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

function qty(id,qty){
$.ajax({
        type:"POST",
        data: {id: id,qty: qty},
        url : "/api/change-qty",
        dataType: "json",
        success: function(response){
            console.log(response)
            dataartikel();
        //    var price = response.price;
        },
        error:function(xhr, status, error)
        {
            var err = eval("(" + xhr.responseText + ")");
            alert(err.Message);
        }
    });
}

function formatRupiah(angka, prefix){
			var number_string = angka.toString().replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}


function discount_change(discount){

    var subtotal = document.getElementById("subtotal").value
    var grand_total = subtotal * discount / 100 
    document.getElementById("grand_total").value = formatRupiah(Math.round(grand_total) , 'Rp. ')
    document.getElementById("grand_total_hidden").value = Math.round(grand_total)

}

function change_cash(cash){
    var grand_total = document.getElementById("grand_total_hidden").value
    var change = cash - grand_total
    document.getElementById("change").value = change

}
function changebarcode(val) {
    
    var barcode = document.getElementById("barcode").options[document.getElementById("barcode").selectedIndex].value;
    var id_penjualan = document.getElementById("id_penjualan").value;
$.ajax({
        type:"POST",
        data: {barcode: barcode,id_penjualan: id_penjualan},
        url : "/api/invoice",
        dataType: "json",
        success: function(response){
            console.log(response)
            dataartikel();
        //    var price = response.price;
        },
        error:function(xhr, status, error)
        {
            var err = eval("(" + xhr.responseText + ")");
            alert(err.Message);
        }
    });

}
                            </script>
                        <script>
function dataartikel(){
    var id_penjualan = document.getElementById("id_penjualan").value;
    var jumlah = 0
    $.ajax({
        type:"POST",
        data: {id: id_penjualan},
        url : "/api/transaksi",
        dataType: "json",
        success: function(response){
            console.log(response.data);
            console.log(response.transaksi);
            $('.viewdata').html(response.data);
            for (var a = 0; a < response.transaksi.length; a++) {
                console.log(response.transaksi[a].subtotal);
               jumlah = jumlah + parseInt(response.transaksi[a].subtotal)
            }


            $('.tampil-bayar').text(formatRupiah(jumlah, 'Rp. '));
            document.getElementById("subtotal").value = formatRupiah(jumlah, 'Rp. ')
            document.getElementById("grand_total").value = formatRupiah(jumlah, 'Rp. ') 
            document.getElementById("grand_total_hidden").value = jumlah
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

$('#tambahtransaksi').submit(function(e) {
  e.preventDefault();
  let formData = new FormData(this);
  $.ajax({
     type:'POST',
     url: `{{ route('transaksi.store') }}`,
      data: formData,
      contentType: false,
      processData: false,
      success: (response) => {
            Swal.fire(
  'Data Berhasil Di Tambah',
  'You clicked the button!',
  'success'
)
var id_penjualan = document.getElementById("id_penjualan").value;
location.href = "/transaksi/" +  (parseInt(id_penjualan) + 1 ) ;
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
            url: '/api/hapus-transaksiSementara',
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
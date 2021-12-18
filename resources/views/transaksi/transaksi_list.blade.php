
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
                                                    <?php $a = 1; ?>
                                                    <tbody>
                                                    @foreach($data_transaksi as $row)
                                                        <tr>
                                                        <td scope="row">{{$a++}}</td>
                                                        <td>{{$row->barcode}}</td>
                                                        <td>{{$row->nama}}</td>
                                                        <td>{{$row->price}}</td>
                                                        <td><input type="number" class="form-control" value="{{$row->qty}}" name="qty" id ="qty" onchange="qty({{$row->id}},this.value)" value="1">  </td>
                                                        <td>{{$row->diskon}}</td>
                                                        <td>{{$row->subtotal}}</td>
                                                        <td>
                                                        <button  onclick="hapus({{$row->id}})"  type="button" class="btn btn-danger" > Hapus </button>   
                                                        </td>
                                                         @endforeach
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>

                                            <script>
$(document).ready( function () {
    $('#table_id').DataTable();
});
</script>
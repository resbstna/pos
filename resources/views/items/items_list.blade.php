<div class="table-responsive">
                                                <table class="table" id="table_id">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Barcode</th>
                                                            <th>Name</th>
                                                            <th>Category</th>
                                                            <th>Unit</th>
                                                            <th>Price</th>
                                                            <th>Stock</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <?php $a = 1; ?>
                                                    <tbody>
                                                    @foreach($data as $row)
                                                        <tr>
                                                        <td scope="row">{{$a++}}</td>
                                                        <td>{{$row->barcode}}</td>
                                                        <td>{{$row->name}}</td>
                                                        <td>{{$row->category}}</td>
                                                        <td>{{$row->unit}}</td>
                                                        <td>{{$row->price}}</td>
                                                        <td>{{$row->stock}}</td>
                                                        <td>
                                                         <button data-toggle="modal"  data-target="#Edit" data-id="{{$row->id}}" data-barcode="{{$row->barcode}}" data-name="{{$row->name}}"  data-category="{{$row->category}}" data-unit="{{$row->unit}}" data-price="{{$row->price}}"  data-stock="{{$row->stock}}" class="btn btn-warning" > Edit </button>
                                                        <button  onclick="hapus({{$row->id}})"  type="button" class="btn btn-danger" > Hapus </button>   
                                                        </td>
                                                         @endforeach
                                                       
                                                    </tbody>
                                                </table>
                                            </div>

                                            <script>
$(document).ready( function () {
    $('#table_id').DataTable();
});
</script>
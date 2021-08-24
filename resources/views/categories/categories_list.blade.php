
                                            <div class="table-responsive">
                                                <table class="table" id="table_id">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <?php $a = 1; ?>
                                                    <tbody>
                                                    @foreach($data as $row)
                                                        <tr>
                                                        <td scope="row">{{$a++}}</td>
                                                        <td>{{$row->name}}</td>
                                                        <td>
                                                         <button data-toggle="modal"  data-target="#Edit" data-id="{{$row->id}}" data-name="{{$row->name}}"   class="btn btn-warning" > Edit </button>
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
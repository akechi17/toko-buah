@extends('layout.app')

@section('title', 'Data Testimoni')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <div class="card-title">Data Testimoni</div>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-end mb-4">
            <a href="#modal-form" class="btn btn-primary modal-tambah">Tambah Data</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Testimoni</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Form Testimoni</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-testimoni">
                        <div class="form-group">
                            <label for="nama_testimoni">Nama Testimoni</label>
                            <input type="text" class="form-control" name="nama_testimoni" placeholder="Nama Testimoni" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="" class="form-control" cols="30" rows="10" name="deskripsi" placeholder="Deskripsi" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('js')
    <script>
        $(function(){
            $.ajax({
                url : '/api/testimonies',
                success : function({data}){
                    let row;
                    data.map(function(val, index){
                        row += `
                        <tr>
                            <td>${index+1}</td>
                            <td>${val.nama_testimoni}</td>
                            <td>${val.deskripsi}</td>
                            <td><img src="/uploads/${val.gambar}" width="150" /></td>
                            <td>
                                <a data-toggle="modal" href="#modal-form" data-id="${val.id}" class="btn btn-warning modal-ubah">Edit</a>
                                <a href="#" data-id="${val.id}" class="btn btn-danger btn-hapus">Delete</a>
                            </td>
                        </tr>
                        `;
                    });
                    $('tbody').append(row)
                }
            })

            $(document).on('click', '.btn-hapus', function(){
                const id = $(this).data('id');
                const token = localStorage.getItem('token');

                confirm_dialog = confirm('Are you sure you want to delete this?');
      
                if (confirm_dialog){
                    $.ajax({
                        url : '/api/testimonies/' + id,
                        type : "DELETE",
                        headers: {
                            "Authorization": token
                        },
                        success : function(data) {
                            if(data.message == "success"){
                                alert('data deleted successfully');
                                location.reload();
                            }
                        }
                    });
                }
            });

            $('.modal-tambah').click(function(){
                $('#modal-form').modal('show');
                $('input[name="nama_testimoni"]').val('');
                $('textarea[name="deskripsi"]').val('');

                $('.form-testimoni').submit(function(e){
                    e.preventDefault();

                    const token = localStorage.getItem('token');
                    const formdata = new FormData(this);

                    $.ajax({
                        url : 'api/testimonies',
                        type : 'POST',
                        data : formdata,
                        cache : false,
                        contentType: false,
                        processData: false,
                        headers: {
                            'Authorization': token
                        },
                        success : function(data) {
                            if(data.success){
                                alert('data added successfully');
                                location.reload();
                            }
                        }
                    })
                })
            })

            $(document).on('click', '.modal-ubah', function(){
                $('modal-form').modal('show');
                const id = $(this).data('id');
                $.get('/api/testimonies/' + id, function({data}){
                    $('input[name="nama_testimoni"]').val(data.nama_testimoni);
                    $('textarea[name="deskripsi"]').val(data.deskripsi);
                })
                $('.form-testimoni').submit(function(e){
                    e.preventDefault();

                    const token = localStorage.getItem('token');
                    const formdata = new FormData(this);

                    $.ajax({
                        url :  `api/testimonies/${id}?_method=PUT`,
                        type : 'POST',
                        data : formdata,
                        cache : false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "Authorization": token
                        },
                        success : function(data) {
                            if(data.success){
                                alert('data updated successfully');
                                location.reload();
                            }
                        }
                    })
                })
            })
        });
    </script>
@endpush
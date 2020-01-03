@extends('backend.layout')

@section('title') Hastane Rehberi Sayfası- MediRehber Admin Paneli | Burak BİLİCİ @endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Hastane
                <small>Medicana Çamlıca</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="">
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Yeni Ekle
                        </button>
                    </a>
                </li>

            </ol>
        </section>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="user_table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th width="35%">First Name</th>
                                        <th width="30%">Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>


                            <!-- /.modal -->
                            <div id="formModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add New Record</h4>
                                        </div>
                                        <div class="modal-body">
                                            <span id="form_result"></span>
                                            <form method="post" id="sample_form" class="form-horizontal">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="control-label col-md-4" >First Name : </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="pozisyon" id="pozisyon" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group" align="center">
                                                    <input type="hidden" name="action" id="action" value="Add" />
                                                    <input type="hidden" name="hidden_id" id="hidden_id" />
                                                    <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="confirmModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h2 class="modal-title">Confirmation</h2>
                                        </div>
                                        <div class="modal-body">
                                            <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- /.modal -->


                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- jQuery 3 -->
    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script>
        $(document).ready(function(){

            $('#user_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('pozisyonlar.index') }}",
                },
                columns: [
                    {
                        data: 'pozisyon',
                        name: 'pozisyon'
                    },{
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });

            $('#create_record').click(function(){
                $('.modal-title').text('Add New Record');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#form_result').html('');

                $('#formModal').modal('show');
            });

            $('#sample_form').on('submit', function(event){
                event.preventDefault();
                var action_url = '';

                if($('#action').val() == 'Add')
                {
                    action_url = "{{ route('pozisyonlar.store') }}";
                }

                if($('#action').val() == 'Edit')
                {
                    action_url = "{{ route('pozisyonlar.update') }}";
                }

                $.ajax({
                    url: action_url,
                    method:"POST",
                    data:$(this).serialize(),
                    dataType:"json",
                    success:function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success)
                        {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#sample_form')[0].reset();
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            });

            $(document).on('click', '.edit', function(){
                var id = $(this).attr('id');
                $('#form_result').html('');
                $.ajax({
                    url :"/admin/diger/pozisyonlar/"+id+"/edit",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#pozisyon').val(data.result.pozisyon);
                        $('#hidden_id').val(id);
                        $('.modal-title').text('Edit Record');
                        $('#action_button').val('Edit');
                        $('#action').val('Edit');
                        $('#formModal').modal('show');
                    }
                })
            });

            var user_id;

            $(document).on('click', '.delete', function(){
                user_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"admin/diger/pozisyonlar/destroy/"+user_id,
                    beforeSend:function(){
                        $('#ok_button').text('Deleting...');
                    },
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#confirmModal').modal('hide');
                            $('#user_table').DataTable().ajax.reload();
                            alert('Data Deleted');
                        }, 2000);
                    }
                })
            });

        });
    </script>


@endsection


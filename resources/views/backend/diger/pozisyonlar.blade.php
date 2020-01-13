@extends('backend.layout')

@section('title') Bölümler - MediRehber Admin Paneli | Burak BİLİCİ @endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>
                Pozisyonlar
                <small>Medicana Çamlıca</small>
            </h1>
            <ol class="breadcrumb">
                <li>

                        <button class="btn btn-success btn-xs"  name="create_record" id="create_record">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Yeni Ekle
                        </button>

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
                                        <th width="35%">Bölüm Adı</th>
                                        <th width="30%">İşlem</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>


                            <!-- Düzenleem/.modal -->
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Duzenleme Ekranı</h4>
                                        </div>
                                        <form action="{{route('pozisyonlar.update','pozisyon_id')}}" method="post">
                                            {{method_field('patch')}}
                                            {{csrf_field()}}
                                            <div class="modal-body">
                                                <input type="hidden" name="pozisyon_id" id="pozisyon_id" value="">
                                                <input type="text" name="pozisyon" id="pozisyon"
                                                       class="form-control"/>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Kaydetme</button>
                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Yeni Kayıt /.modal -->
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
                                                    <div class="col-md-12">
                                                        <input type="text" name="pozisyon" id="pozisyon"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group" align="center">
                                                    <input type="hidden" name="action" id="action" value="Add"/>
                                                    <input type="hidden" name="hidden_id" id="hidden_id"/>
                                                    <input type="submit" name="action_button" id="action_button"
                                                           class="btn btn-warning" value="Add"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Silme /.modal -->
                            <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title text-center" id="myModalLabel">Silme Ekranı</h4>
                                        </div>
                                        <form action="{{route('pozisyonlar.destroy','pozisyon_id')}}" method="post">
                                            {{method_field('delete')}}
                                            {{csrf_field()}}
                                            <div class="modal-body">
                                                <p class="text-center">
                                                    Bunu silmek istediğinizden emin misiniz?
                                                </p>
                                                <input type="hidden" name="pozisyon_id" id="pozisyon_id" value="">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Hayır, Silme</button>
                                                <button type="submit" class="btn btn-warning">Evet, Sil</button>
                                            </div>
                                        </form>
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
                "ordering": false,
                ajax: {
                    url: "{{ route('pozisyonlar.index') }}",
                },
                columns: [
                    {
                        data: 'pozisyon',
                        name: 'pozisyon'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });

            $('#create_record').click(function(){
                $('.modal-title').text('Yeni Kayıt Ekranı');
                $('#action_button').val('Ekle');
                $('#action').val('Add');
                $('#form_result').html('');

                $('#formModal').modal('show');
            });

            $('#sample_form').on('submit', function(event){
                event.preventDefault();
                var action_url = '';

                if($('#action').val() == 'Add')
                {
                    action_url = "{{route('pozisyonlar.store')}}";
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

            $('#edit').on('show.bs.modal', function (event) {

                var button = $(event.relatedTarget)
                var pozisyon = button.data('pozisyon')
                var pozisyon_id = button.data('pozisyonid')
                var modal = $(this)

                modal.find('.modal-body #pozisyon').val(pozisyon);
                modal.find('.modal-body #pozisyon_id').val(pozisyon_id);
            });

            $('#delete').on('show.bs.modal', function (event) {

                var button = $(event.relatedTarget)

                var cat_id = button.data('pozisyonid')
                var modal = $(this)

                modal.find('.modal-body #pozisyon_id').val(cat_id);
            })


        });
    </script>


@endsection


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
                <li >
                    <a href="" >
                        <button class="btn btn-success btn-xs">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Yeni Ekle
                        </button>
                    </a>
                </li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pozisyon Adı</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['pozisyonlar'] as $poz)
                                <tr id="has-" >
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$poz->pozisyon}}</td>
                                    <td style="width: 5px;">
                                        <a href="#" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td style="width: 5px;">
                                        <a href="javascript:void(0)"><i id=""
                                                                        class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- /.modal -->
                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Düzenle</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body&hellip;</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">İptal Et</button>
                                            <button type="button" class="btn btn-primary">Kaydet</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
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
    <script type="text/javascript">



        $(".fa-trash-o").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            destroy_id = $(this).attr('id');

            alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
                function () {

                    $.ajax({
                        type:"DELETE",
                        url:"./hastane/"+destroy_id,
                        success: function (msg) {
                            if (msg)
                            {
                                $("#has-"+destroy_id).remove();
                                alertify.success("Silme İşlemi Başarılı");

                            } else {
                                alertify.error("İşlem Tamamlanamadı");
                            }
                        }
                    });

                },
                function () {
                    alertify.error('Silme işlemi iptal edildi')
                }
            )

        });

    </script>
@endsection


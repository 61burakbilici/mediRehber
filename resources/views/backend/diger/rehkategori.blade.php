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

                        <button class="btn btn-success btn-xs"  data-toggle="modal" data-target="#yeniekle">
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

    <!--Yeni Ekleme / Modal -->
    <div class="modal fade" id="yeniekle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Yeni Kategori Ekleme</h4>
                </div>
                <form action="{{route('kategori.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="rehkat_adi" id="rehkat_adi" required placeholder="Kategroi Adını Yazınız">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kaydetmeden Çık</button>
                        <button type="submit" class="btn btn-primary">Kaydet, Çık</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Yeni Ekleme Son / Modal -->

    <!--Düzenleme Ekleme / Modal -->
    <div class="modal fade" id="katduzenleme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Duzenleme Ekranı</h4>
                </div>
                <form action="{{route('kategori.update','rehkat_id')}}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <div class="modal-body">
                        <input type="hidden" name="rehkat_id" id="rehkat_id" value="">
                        <input type="text" name="rehkat_adi" id="rehkat_adi" class="form-control"  value=""/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kaydetme</button>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--DüzenleöeSon / Modal -->
    <!-- Silme /.modal -->
    <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Silme Ekranı</h4>
                </div>
                <form action="{{route('kategori.destroy','rehkat_id')}}" method="post">
                    {{method_field('delete')}}
                    {{csrf_field()}}
                    <div class="modal-body">
                        <p class="text-center">
                            Bunu silmek istediğinizden emin misiniz?
                        </p>
                        <input type="hidden" name="rehkat_id" id="rehkat_id" value="">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Hayır, Silme</button>
                        <button type="submit" class="btn btn-warning">Evet, Sil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Silme /.modal -->

    <!-- jQuery 3 -->
    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script>
        $(document).ready(function(){

            $('#user_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('kategori.index') }}",
                },
                columns: [
                    {
                        data: 'rehkat_adi',
                        name: 'rehkat_adi'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });

            $('#katduzenleme').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var rehkat_adi = button.data('rehkat_adi')
                var rehkat_id = button.data('rehkat_id')
                var modal = $(this)

                modal.find('.modal-body #rehkat_adi').val(rehkat_adi);
                modal.find('.modal-body #rehkat_id').val(rehkat_id);
            });

            $('#delete').on('show.bs.modal', function (event) {

                var button = $(event.relatedTarget)
                var rehkat_id = button.data('rehkat_id')
                var modal = $(this)
                modal.find('.modal-body #rehkat_id').val(rehkat_id);
            })


        });
    </script>


@endsection


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
                                    <th>Adı Soyadı</th>
                                    <th>Dec</th>
                                    <th>Sabit</th>
                                    <th>Mail Adresi</th>
                                    <th>Bölüm</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data['hastane'] as $has)
                                <tr id="has-@php echo $has->id @endphp" >
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$has->adisoyadi}}</td>
                                    <td>{{$has->dec}}</td>
                                    <td>{{$has->sabit}}</td>
                                    <td>{{$has->email}}</td>
                                    <td>{{$has->bolum}}</td>
                                    <td style="width: 5px;">
                                        <a href="{{route('hastane.edit',$has->id)}}">
                                            <i class="fa fa-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td style="width: 5px;">
                                        <a href="javascript:void(0)"><i id="@php echo $has->id @endphp"
                                                                        class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
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


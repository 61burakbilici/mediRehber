@extends('backend.layout')

@section('title')
    Kullanıcılar - MediRehber Admin Paneli | Burak BİLİCİ
@endsection

@section('content')
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content container-fluid">


            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Kullanıcılar</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <a href="{{route('kullanicilar.create')}}"> <button type="button" class="btn btn-success btn-xs"> Yeni Kullanıcı Ekle</button></a>

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Adı Soyadı</th>
                                            <th>Hastanesi</th>
                                            <th>Telefon</th>
                                            <th>Email</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data['user'] as $item)
                                            @php

                                                $hastane = DB::table('hastanelers')
                                                ->where('id', $item->hastane_id)->first();
                                            @endphp
                                            <tr {{$item->role == 1 ? "style=background-color:#bfdc78": ""}}>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    @if(empty($item->users_foto))
                                                        <img class="chat item online" src="/images/users/bay.png"
                                                             style="width: 50px">
                                                    @else
                                                        <img class="chat item online"
                                                             src="/images/users/{{$item->users_foto}}"
                                                             style="width: 50px">
                                                    @endif

                                                    {{$item->name}}</td>
                                                <td> @if(empty($hastane->hastane_adi))

                                                    @else
                                                        {{$hastane->hastane_adi}}
                                                    @endif
                                                </td>
                                                <td>{{$item->users_tel}}</td>
                                                <td>{{$item->email}}</td>
                                                <td style="width: 5px;"><a
                                                        href="{{{ route('kullanicilar.edit', $item->id) }}}"><i
                                                            class="fa fa-pencil-square"></i></a></td>
                                                <td style="width: 5px;"><a href="javascript:void(0)"><i
                                                            id="" class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>

                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

        </section>
        <!-- /.content -->
    </div>
    <script type="text/javascript">
        $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
                function () {
                    location.href = "kullanicilar/sil/" + destroy_id;
                },
                function () {
                    alertify.error('Silme işlemi iptal edildi')
                }
            )

        });

    </script>
@endsection

@section('css')

    <!-- DataTables -->

@endsection

@section('js')
    <!-- jQuery 3 -->
    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
@endsection

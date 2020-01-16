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
                            @if(Auth::user()->role ==1)
                                <a href="{{route('kullanicilar.create')}}">
                                    <button type="button" class="btn btn-success btn-xs"> Yeni Kullanıcı Ekle</button>
                                </a>
                            @endif

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="box-body">
                                    @foreach ($data['user'] as $item)
                                    @endforeach
                                    @if(Auth::user()->role ==1 || Auth::user()->id ==$item->id  )

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
                                                <tr id="has-@php echo $item->id @endphp" {{$item->role == 1 ? "style=background-color:#bfdc78": ""}}>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>
                                                        @if(empty($item->users_foto))
                                                            <img class="chat item online img-circle"
                                                                 src="/images/users/bay.png"
                                                                 style="width: 50px">
                                                        @else
                                                            <img class="chat item online img-circle"
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
                                                    @if(Auth::user()->id ==$item->id)
                                                        <td></td>
                                                    @else
                                                        <td style="width: 5px;"><a href="javascript:void(0)"><i
                                                                    id="{{$item->id}}" class="fa fa-trash-o"></i></a>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <div class="info-box bg-red">
                                            <span class="info-box-icon"><i
                                                    class="fa fa-exclamation-triangle"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Yetkisiz Giriş</span>

                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 100%"></div>
                                                </div>
                                                <span class="progress-description">Bu Uyarıyı Alıyorsanız Yönetiici İle İritbata <Geçiniz></Geçiniz>
                  </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                    @endif
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

@endsection

@section('css')

    <!-- DataTables -->

@endsection

@section('js')

    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <!--suppress VueDuplicateTag -->
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
                        type: "DELETE",
                        url: "{{route('kullanicilar.destroy',$item->id)}}",
                        success: function (msg) {
                            if (msg) {
                                $("#has-" + destroy_id).remove();
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

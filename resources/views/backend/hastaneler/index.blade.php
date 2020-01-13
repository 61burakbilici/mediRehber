@extends('backend.layout')

@section('title')
    Hastane Listesi - MediRehber Admin Paneli | Burak BİLİCİ
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="box box-primary ">

                <div class="box-header with-border">
                    <h3 class="box-title">Hastaneler</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        @if(Auth::user()->role ==1)
                            <a href="{{route('hastanelers.ekle')}}">
                                <button type="button" class="btn btn-success btn-xs"> Yeni Hastane Ekle</button>
                            </a>
                        @endif
                    </div>
                </div>

                <div class="class box-body">
                    @if(Auth::user()->role ==1)
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Hastane Adı</th>
                                <th scope="col">İl</th>
                                <th scope="col">Telefon</th>
                                <th scope="col">Toplam Kullanıcı Sayısı</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>

                            <tbody id="sortable">

                            @foreach ($data['hastanelers'] as $hastanelers)
                                <tr>
                                    <th scope="row" class="sortable">{{$loop->iteration}}</th>
                                    <td>{{$hastanelers->hastane_adi}}</td>
                                    <td>{{$hastanelers->hastane_il}}</td>
                                    <td>{{$hastanelers->hastane_tel}}</td>
                                    <td>{{$user = DB::table('users')->where('hastane_id', $hastanelers->id)->count()}}</td>

                                    <td style="width: 5px;">
                                        <a href="{{{ route('hastanelers.duzenle', ['id'=>$hastanelers->id]) }}}">
                                            <i class="fa fa-pencil-square"></i>
                                        </a>
                                    </td>

                                    <td style="width: 5px;">
                                        @if($user <= 0)
                                            <a href="javascript:void(0)">
                                                <i id="{{$hastanelers->id}}"
                                                   class="fa fa-trash-o">

                                                </i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    @else
                        <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-exclamation-triangle"></i></span>

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
        </section>

        <script type="text/javascript">
            $(".fa-trash-o").click(function () {
                destroy_id = $(this).attr('id');

                alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
                    function () {
                        location.href = "/admin/hastaneler/sil/" + destroy_id;
                    },
                    function () {
                        alertify.error('Silme işlemi iptal edildi')
                    }
                )

            });

        </script>

    </div>
@endsection

@section('css')

@endsection

@section('js')
    <!-- jQuery 3 -->
    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
@endsection

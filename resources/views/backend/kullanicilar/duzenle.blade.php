@extends('backend.layout') @section('title') Kullanıcı Düzenleme Sayfası- MediRehber Admin Paneli | Burak BİLİCİ @endsection @section('content')
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content container-fluid">


            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Düzeneleme</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">


                                <div class="box-body">
                                    <form action="{{route('kullanicilar.update',['id'=>$kullanici->id])}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adı Soyadı</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="users_name"
                                                                   value="{{$kullanici->users_name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kullanıcı</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="users_username"
                                                                   value="{{$kullanici->users_username }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Telefon Numarası</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="users_tel"
                                                                   value="{{$kullanici->users_tel}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Hastane</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <select class="form-control" id="hastane_id"
                                                                    name="hastane_id">
                                                                @php($hastaneler = DB::table('hastanelers')->get())
                                                                @if(!empty($kullanici->hastane_id))
                                                                    @php($hastane = DB::table('hastanelers')
                                                                    ->where('id',$kullanici->hastane_id)->first())
                                                                    <option value="{{$kullanici->hastane_id}}"
                                                                            selected>{{$hastane->hastane_adi}}</option>
                                                                    @foreach ($hastaneler as $hastaneler)
                                                                        <option
                                                                            value="{{$hastaneler->id}}">{{$hastaneler->hastane_adi}}</option>
                                                                    @endforeach
                                                                @else



                                                                    <option selected readonly="">Lütfen Kullanıcının
                                                                        Hasatnesini Seçiniz
                                                                    </option>
                                                                    @foreach ($hastaneler as $hastaneler)
                                                                        <option
                                                                            value="{{$hastaneler->id}}">{{$hastaneler->hastane_adi}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mail Adresi</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="email"
                                                                   name="users_email"
                                                                   value="{{$kullanici->users_email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Şifre</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="password"
                                                                   name="users_password"
                                                                   value="{{$kullanici->users_password }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kullanıcı Resmi</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="file"
                                                                   name="users_foto"

                                                                   @if(!empty($kullanici->users_foto))
                                                                   value="" required
                                                                @endif>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Resim Var İse</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            @if(empty($kullanici->users_foto))
                                                                <img class="chat item online"
                                                                     src="/images/users/bay.png" style="width: 100px">
                                                            @else
                                                                <img class="chat item online"
                                                                     src="/images/users/{{$kullanici->users_foto}}"
                                                                     style="width: 100px">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <input type="hidden" value="user_res">
                                        <div class="box-footer">
                                            <button style="width: 100%;" type="submit" class="btn btn-primary">
                                                Kaydet
                                            </button>
                                        </div>

                                </div>
                                </form>


                                <script
                                    src="/backend/js/jquery-3.1.1.slim.min.js"
                                    integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
                                    crossorigin="anonymous"></script>
                                <script>
                                    $(function () {
                                        $(document).on('click', '.btn-add', function (e) {
                                            e.preventDefault();
                                            var controlForm = $('#myRepeatingFields:first'),
                                                currentEntry = $(this).parents('.entry:first'),
                                                newEntry = $(currentEntry.clone()).appendTo(controlForm);
                                            newEntry.find('input').val('');
                                            controlForm.find('.entry:not(:last) .btn-add')
                                                .removeClass('btn-add').addClass('btn-remove')
                                                .removeClass('btn-success').addClass('btn-danger')
                                                .html('<span class="glyphicon glyphicon-minus"></span>');
                                        }).on('click', '.btn-remove', function (e) {
                                            e.preventDefault();
                                            $(this).parents('.entry:first').remove();
                                            return false;
                                        });
                                    });
                                </script>
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
@endsection

@section('js')

@endsection

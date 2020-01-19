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
                                    <form action="{{route('kullanicilar.update',$kullanici->id)}}" method="post"
                                          enctype="multipart/form-data">

                                        {{method_field('patch')}}
                                        {{csrf_field()}}
                                        <input type="hidden" name="kullanici_id" value="{{$kullanici->id }}">
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adı Soyadı</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="name"
                                                                   value="{{$kullanici->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mail Adresi</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="email"
                                                                   name="email"
                                                                   value="{{$kullanici->email }}" {{$kullanici->id==Auth::user()->id ? 'readonly':'' }}>
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
                                                                @if(empty($kullanici->hastane_id))
                                                                    <option selected readonly="">Lütfen Kullanıcının
                                                                        Hasatnesini Seçiniz
                                                                    </option>
                                                                    @foreach ($hastaneler as $hastaneler)
                                                                        <option
                                                                            value="{{$hastaneler->id}}">{{$hastaneler->hastane_adi}}</option>
                                                                    @endforeach
                                                                @else
                                                                    @php($hastane = DB::table('hastanelers')
                                                                    ->where('id',$kullanici->hastane_id)->first())
                                                                    <option style="color:crimson;"
                                                                            value="{{$hastane->id}}"
                                                                            selected>{{$hastane->hastane_adi}}</option>
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
                                                    <label>Kullanıcı Gurubu</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <select class="form-control" id="role"
                                                                    name="role" {{$kullanici->id==Auth::user()->id ? 'readonly':'' }}>
                                                                <option
                                                                    value="1" {{$kullanici->role==1 ? 'selected':'' }}>
                                                                    Admin
                                                                </option>
                                                                <option
                                                                    value="0" {{$kullanici->role==0 ? 'selected':'' }}>
                                                                    Normal Kullanıcı
                                                                </option>
                                                            </select>

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
                                                                   name="users_foto">
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
            @if(Auth::user()->role ==1)
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Yetkilendirme</h3>

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
                                        <script
                                            src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                                        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                                        <!------ Include the above in your HEAD tag ---------->

                                        <div class="container">
                                            <br/>
                                            <div class="row">

                                                <div class="dual-list list-left col-md-5">
                                                    <div class="well text-right">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="input-group">
                                                                    <span
                                                                        class="input-group-addon glyphicon glyphicon-search"></span>
                                                                    <input type="text" name="SearchDualList"
                                                                           class="form-control" placeholder="search"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="btn-group">
                                                                    <a class="btn btn-default selector"
                                                                       title="select all"><i
                                                                            class="glyphicon glyphicon-unchecked"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul class="list-group">

                                                            @php($yetkis = DB::table('yetkis')->get())
                                                            @foreach($yetkis as $yetkis)
                                                                <li class="list-group-item"
                                                                    value="{{$yetkis->id}}">{{$yetkis->yetki_adi}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="list-arrows col-md-1 text-center">
                                                    <button class="btn btn-default btn-sm move-left">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                    </button>

                                                    <button class="btn btn-default btn-sm move-right">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                    </button>
                                                </div>

                                                <div class="dual-list list-right col-md-5">
                                                    <div class="well">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="btn-group">
                                                                    <a class="btn btn-default selector"
                                                                       title="select all"><i
                                                                            class="glyphicon glyphicon-unchecked"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="input-group">
                                                                    <input type="text" name="SearchDualList"
                                                                           class="form-control" placeholder="search"/>
                                                                    <span
                                                                        class="input-group-addon glyphicon glyphicon-search"></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul class="list-group">
                                                            @php($yetkiler = \App\User::find($kullanici->id)->roles)

                                                            @foreach($yetkiler as $yetkisi)
                                                            <li class="list-group-item active" >{{$yetkisi->yetki_adi}}</li>
                                                            @endforeach

                                                        </ul>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="box-footer">
                                            <button style="width: 100%;" type="submit" class="btn btn-primary">
                                                Kaydet
                                            </button>
                                        </div>
                                        <script !src="">
                                            $(function () {

                                                $('body').on('click', '.list-group .list-group-item', function () {
                                                    $(this).toggleClass('active');
                                                });
                                                $('.list-arrows button').click(function () {
                                                    var $button = $(this), actives = '';
                                                    if ($button.hasClass('move-left')) {
                                                        actives = $('.list-right ul li.active');
                                                        actives.clone().appendTo('.list-left ul');
                                                        actives.remove();
                                                    } else if ($button.hasClass('move-right')) {
                                                        actives = $('.list-left ul li.active');
                                                        actives.clone().appendTo('.list-right ul');
                                                        actives.remove();
                                                    }
                                                });
                                                $('.dual-list .selector').click(function () {
                                                    var $checkBox = $(this);
                                                    if (!$checkBox.hasClass('selected')) {
                                                        $checkBox.addClass('selected').closest('.well').find('ul li:not(.active)').addClass('active');
                                                        $checkBox.children('i').removeClass('glyphicon-unchecked').addClass('glyphicon-check');
                                                    } else {
                                                        $checkBox.removeClass('selected').closest('.well').find('ul li.active').removeClass('active');
                                                        $checkBox.children('i').removeClass('glyphicon-check').addClass('glyphicon-unchecked');
                                                    }
                                                });
                                                $('[name="SearchDualList"]').keyup(function (e) {
                                                    var code = e.keyCode || e.which;
                                                    if (code == '9') return;
                                                    if (code == '27') $(this).val(null);
                                                    var $rows = $(this).closest('.dual-list').find('.list-group li');
                                                    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
                                                    $rows.show().filter(function () {
                                                        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                                                        return !~text.indexOf(val);
                                                    }).hide();
                                                });

                                            });
                                        </script>
                                        <style>
                                            .dual-list .list-group {
                                                margin-top: 8px;
                                            }

                                            .list-left li, .list-right li {
                                                cursor: pointer;
                                            }

                                            .list-arrows {
                                                padding-top: 100px;
                                            }

                                            .list-arrows button {
                                                margin-bottom: 20px;
                                            }
                                        </style>

                                    </div>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
        @endif
        <!-- /.col -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('css')
@endsection

@section('js')


@endsection

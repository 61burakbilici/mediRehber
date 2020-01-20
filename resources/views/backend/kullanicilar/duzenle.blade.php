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


                                        <div class="container">
                                            <br/>


                                            <div class="container">
                                                <div class="row text-center">
                                                    <br>
                                                    @foreach($yetkiler as $yetkilerim)
                                                        <label for="default" class="btn btn-default">Default <input
                                                                type="checkbox" id="default" class="badgebox"><span
                                                                class="badge">&check;</span></label>
                                                    @endforeach


                                                    <label for="default" class="btn btn-default">Default <input
                                                            type="checkbox" id="default" class="badgebox"><span
                                                            class="badge">&check;</span></label>
                                                    <label for="primary" class="btn btn-primary">Primary <input
                                                            type="checkbox" id="primary" class="badgebox"><span
                                                            class="badge">&check;</span></label>
                                                    <label for="info" class="btn btn-info">Info <input type="checkbox"
                                                                                                       id="info"
                                                                                                       class="badgebox"><span
                                                            class="badge">&check;</span></label>
                                                    <label for="success" class="btn btn-success">Success <input
                                                            type="checkbox" id="success" class="badgebox"><span
                                                            class="badge">&check;</span></label>
                                                    <label for="warning" class="btn btn-warning">Warning <input
                                                            type="checkbox" id="warning" class="badgebox"><span
                                                            class="badge">&check;</span></label>
                                                    <label for="danger" class="btn btn-danger">Danger <input
                                                            type="checkbox" id="danger" class="badgebox"><span
                                                            class="badge">&check;</span></label>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="box-footer">
                                            <button style="width: 100%;" type="submit" class="btn btn-primary">
                                                Kaydet
                                            </button>
                                        </div>


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

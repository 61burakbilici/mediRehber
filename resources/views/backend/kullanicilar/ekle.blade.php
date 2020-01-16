@extends('backend.layout') @section('title') Kullanıcı Ekleme Sayfası- MediRehber Admin Paneli | Burak BİLİCİ @endsection @section('content')
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content container-fluid">


            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Yeni Kullanıcı Ekleme Alanı</h3>

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
                                    <form action="{{route('kullanicilar.store')}}" method="post"
                                          enctype="multipart/form-data">

                                        {{method_field('post')}}
                                        {{csrf_field()}}
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adı Soyadı</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="name">
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
                                                                   name="email">
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
                                                            <input class="form-control" type="tel"
                                                                   name="users_tel">
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
                                                                <option selected readonly="" value="">Lütfen Kullanıcının
                                                                    Hasatnesini Seçiniz
                                                                </option>
                                                                @foreach ($hastaneler as $hastaneler)
                                                                    <option
                                                                        value="{{$hastaneler->id}}">{{$hastaneler->hastane_adi}}</option>
                                                                @endforeach
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
                                                                    name="role">
                                                                <option value="0"> Normal Kullanıcı</option>
                                                                <option value="1"> Admin</option>
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
                                                                   name="users_password">
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

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
                                    <form action="" method="post"
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
                                                                   value="">
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
                                                                   value="">
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
                                                                   value="">
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

                                                                    @foreach ($hastaneler as $hastaneler)
                                                                        <option value="{{$hastaneler->id}}">{{$hastaneler->hastane_adi}}</option>
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
                                                    <label>Mail Adresi</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="email"
                                                                   name="users_email"
                                                                   value="">
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
                                                                   value="">
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

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Resim Var İse</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">

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

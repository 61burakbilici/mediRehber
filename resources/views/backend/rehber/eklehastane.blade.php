@extends('backend.layout')
@section('title') Hastane Rehberi Düzenleme Sayfası - MediRehber Admin Paneli | Burak BİLİCİ @endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Yeni Rehber Ekleme
                <small>Hastane</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content container-fluid">


            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Yeni Rehber Ekleme</h3>

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
                                    <form action="{{route("hastane.store")}}" enctype="multipart/form-data" method="post">
                                        @csrf

                                        <div class="col-md-12">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Adı Soyadı </label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_adisoyadi"
                                                                   placeholder="Adı Soyadı">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Çalıştığı Bölüm</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_bolum"
                                                                   placeholder="Çalıştığı Bölüm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Eposta Adresi</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_email"
                                                                   placeholder="Eposta Adresi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-12">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Dec </label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_dec"
                                                                   placeholder="Dec">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Sabit</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_sabit"
                                                                   placeholder="Sabit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Faks</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_faks"
                                                                   placeholder="Faks">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-12">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Not </label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <textarea name="hastane_not" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" placeholder="Not"></textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-12">


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

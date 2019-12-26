@extends('backend.layout')
@section('title') Hastane Rehberi Düzenleme Sayfası - MediRehber Admin Paneli | Burak BİLİCİ @endsection

@section('content')
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
                                    <form action=""
                                          enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method("PUT")
                                        <div class="col-md-12">

                                                <div class="form-group">
                                                    <label>Poziyon Adı </label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="pozisyon"
                                                                   value="{{$poz->pozisyon}}">
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

@extends('backend.layout')
@section('title') Hastane Rehberi Düzenleme Sayfası - MediRehber Admin Paneli | Burak BİLİCİ @endsection
@section("ekstra")

    <style>
        .entry:not(:first-of-type) {
            margin-top: 10px;
        }

        .glyphicon {
            font-size: 12px;
        }
    </style>
    <script
        src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
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
                    .html('<span class="glyphicon glyphicon-minus"  style="top: -5px;"></span>');
            }).on('click', '.btn-remove', function (e) {
                e.preventDefault();
                $(this).parents('.entry:first').remove();
                return false;
            });
        });
    </script>
@endsection
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
                                    <form action="{{route("hastane.update",$Hastanes->id)}}"
                                          enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method("PUT")
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Adı Soyadı </label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_adisoyadi"
                                                                   value="{{$Hastanes->adisoyadi}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Çalıştığı Bölüm</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <select class="form-control select2" id="hastane_bolum"
                                                                    name="hastane_bolum" style="width: 100%">
                                                                @php($Pozisyonlar = DB::table('Pozisyonlars')->get())
                                                                @if(!empty($Hastanes->bolum))
                                                                    @php($Pozisyonlars = DB::table('Pozisyonlars')
                                                                    ->where('id',$Hastanes->bolum)->first())
                                                                    <option value="{{$Pozisyonlars->id}}"
                                                                    selected disabled class="text-danger">{{$Pozisyonlars->pozisyon}}</option>

                                                                    @foreach ($Pozisyonlar as $Pozisyonlars)
                                                                        <option
                                                                            value="{{$Pozisyonlars->id}}">{{$Pozisyonlars->pozisyon}}</option>
                                                                    @endforeach
                                                                    @else

                                                                    <option selected readonly="">Lütfen Kullanıcının
                                                                        Hasatnesini Seçiniz
                                                                    </option>
                                                                    @foreach ($Pozisyonlar as $Pozisyonlars)
                                                                        <option
                                                                            value="{{$Pozisyonlars->id}}">{{$Pozisyonlars->pozisyon}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>

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
                                                                   value="{{$Hastanes->email}}">
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
                                                                   value="{{$Hastanes->dec}}">

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Sabit</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">


                                                            <?php
                                                            $sonuc = explode(",", $Hastanes->sabit);

                                                            $dec = count($sonuc);

                                                            ?>


                                                            <div id="myRepeatingFields">
                                                                @if($sonuc['0'] == "" )

                                                                @else
                                                                    @foreach($sonuc as $sonuc)
                                                                        <div class="entry input-group">


                                                                            <input class="form-control" name="sabits[]"
                                                                                   type="text" value="{{$sonuc}}"/>

                                                                            <span class="input-group-btn">
                                                                                <button type="button"
                                                                                        class="btn btn-danger btn-lg btn-remove"
                                                                                        style="height: 34px;">
                                                                                    <span
                                                                                        class="glyphicon glyphicon-minus"
                                                                                        aria-hidden="true"
                                                                                        style="top: -5px;">

                                                                                    </span>
                                                                                </button>
                                                                            </span>

                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                                <div class="entry input-group">
                                                                    <input class="form-control" name="sabits[]"
                                                                           type="text" value=""/>
                                                                    <span class="input-group-btn">
                                                                    <button type="button"
                                                                            class="btn btn-success btn-lg btn-add"
                                                                            style="height: 34px;">
                                                                        <span class="glyphicon glyphicon-plus"
                                                                              aria-hidden="true"
                                                                              style="top: -5px;">

                                                                                </span>
                                                                            </button>
                                                                        </span>

                                                                </div>
                                                            </div>


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
                                                                   value="{{$Hastanes->faks}}">
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
                                                            <textarea name="hastane_not" class="form-control rounded-0"
                                                                      id="exampleFormControlTextarea1"
                                                                      rows="10">{{$Hastanes->not}}</textarea>

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
    <link rel="stylesheet" href="/backend/bower_components/select2/dist/css/select2.min.css">
@endsection

@section('js')
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

        })
    </script>
    <script src="/backend/bower_components/select2/dist/js/select2.full.min.js"></script>

@endsection

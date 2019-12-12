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
                                    <form action="{{route('hastanelers.update',['id'=>$hastanelers->id])}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Hastane Adı</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_adi"
                                                                   value="{{$hastanelers->hastane_adi}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Hastane İli</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <select name="hastane_il" id="hastane_il" class="form-control">
                                                                @if(empty($hastanelers->hastane_adi))
                                                                    <option value="{{$hastanelers->hastane_il}}">Seçin...</option>
                                                                    @elseif($hastanelers->hastane_adi)
                                                                    <option value="{{$hastanelers->hastane_il}}" selected>{{$hastanelers->hastane_il}}</option>

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
                                                    <label>Hastane İlçesi</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <select name="hastane_ilce" id="hastane_ilce" class="form-control" >
                                                                @if(empty($hastanelers->hastane_ilce))
                                                                    <option value="{{$hastanelers->hastane_ilce}}">Seçin...</option>
                                                                @elseif($hastanelers->hastane_ilce)
                                                                    <option value="{{$hastanelers->hastane_ilce}}" selected>{{$hastanelers->hastane_ilce}}</option>

                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                                            <script>
                                                $.getJSON("/backend/il-bolge.json", function(sonuc){
                                                    $.each(sonuc, function(index, value){
                                                        var row="";
                                                        row +='<option value="'+value.il+'">'+value.il+'</option>';
                                                        $("#hastane_il").append(row);
                                                    })
                                                });


                                                $("#hastane_il").on("change", function(){
                                                    var il=$(this).val();

                                                    $("#hastane_ilce").attr("disabled", false).html("<option value=''>Seçin..</option>");
                                                    $.getJSON("/backend/il-ilce.json", function(sonuc){
                                                        $.each(sonuc, function(index, value){
                                                            var row="";
                                                            if(value.il==il)
                                                            {
                                                                row +='<option value="'+value.ilce+'">'+value.ilce+'</option>';
                                                                $("#hastane_ilce").append(row);
                                                            }
                                                        });
                                                    });
                                                });

                                            </script>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Hastane Adresi</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="text"
                                                                   name="hastane_adres"
                                                                   value="{{$hastanelers->hastane_adres }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Hastane Telefon</label>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <input class="form-control" type="tel"
                                                                   name="hastane_tel"
                                                                   value="{{$hastanelers->hastane_tel }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


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

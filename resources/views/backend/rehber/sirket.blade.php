@extends('backend.layout')

@section('title') Kullanıcı Düzenleme Sayfası- MediRehber Admin Paneli | Burak BİLİCİ @endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Şirket
                <small>Medicana Çamlıca</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Adı Soyadı</th>
                                    <th>Hastane Adı</th>
                                    <th>Çalıştığı Birim / Bölüm</th>
                                    <th>Dec / Sabit</th>
                                    <th>Mail Adresi</th>
                                    <th>Bölüm</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Burak Bilici</td>
                                    <td>Çamlıca Medicana</td>
                                    <td>Bilgi Sistemleri Müdürlüğü /  Bilgi Sistemleri Uzmanı</td>
                                    <td>1560 / 1453</td>
                                    <td>bbilici@medicana.com.tr</td>
                                    <td>Bilgi Sistemleri</td>
                                    <td style="width: 5px;">
                                        <a href="#">
                                            <i class="fa fa-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td style="width: 5px;">
                                        <a href="javascript:void(0)">
                                            <i id="" class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection


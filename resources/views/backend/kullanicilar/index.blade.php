
@extends('backend.layout')

@section('title')
    Tüm Kullanıcılar - MediRehber Admin Paneli | Burak BİLİCİ
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Anasayfa
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content-header">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Settings</h3>
            </div>
            <div class="box-body">
              
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Açıklama</th>
                        <th>İçerik</th>
                        <th>Anahtar Değer</th>
                        <th>Type</th>
                        <th></th>
                        <th></th>
                    </tr>
                   
                    </thead>
                </table>
    
                
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>
@endsection
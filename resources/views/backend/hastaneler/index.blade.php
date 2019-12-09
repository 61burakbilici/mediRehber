@extends('backend.layout')

@section('title')
Kullanıcılar - MediRehber Admin Paneli | Burak BİLİCİ
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box box-primary ">

        <div class="box-header with-border">
          <h3 class="box-title">Hastaneler</h3>
        </div>
        <div class="class box-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hastane Adı</th>
                    <th scope="col">İl</th>
                    <th scope="col">Telefon</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody id="sortable">

                  @foreach ($data['hastanelers'] as $hastanelers)
                    <tr>
                    <th scope="row" class="sortable">{{$loop->iteration}}</th>
                    <td >{{$hastanelers->hastane_adi}}</td>
                    <td>{{$hastanelers->hastane_il}}</td>
                    <td>{{$hastanelers->hastane_tel}}</td>
                    <td style="width: 5px;"><a href="javascript:void(0)"><i class="fa fa-pencil-square"></i></a>  </td>
                    <td style="width: 5px;"><a href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>  </td>
                  </tr>

                  @endforeach

                </tbody>
              </table>
        </div>  
      </div>
    </section>

    

  </div>    
@endsection

@section('css')
    
@endsection

@section('js')
    
@endsection
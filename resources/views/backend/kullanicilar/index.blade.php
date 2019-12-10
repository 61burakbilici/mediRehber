@extends('backend.layout')

@section('title')
Kullanıcılar - MediRehber Admin Paneli | Burak BİLİCİ
@endsection

@section('content')
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content container-fluid">

      
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Kullanıcılar</h3>
  
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                    <div class="col-md-12">

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>#</th>
                                <th>Adı Soyadı</th>
                                <th>Hastanesi</th>
                                <th>Telefon</th>
                                <th>Email</th>
                                <th></th>
                                <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                @foreach ($data['user'] as $item)   
                                @php
                                  $hastane_id =$item->id;
                                    $hastane = DB::table('hastanelers')
                                    ->where('id', $hastane_id)->first();
                                @endphp
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->users_name}}</td>
                                <td>{{$hastane->hastane_adi}}</td>
                                <td>{{$item->users_tel}}</td>
                                <td>{{$item->users_email}}</td>
                                <td style="width: 5px;"><a href="{{{ route('kullanicilar.duzenle', ['id'=>$item->id]) }}}"><i class="fa fa-pencil-square"></i></a>  </td>
                                <td style="width: 5px;"><a href="javascript:void(0)"><i id="{{$item->id}}" class="fa fa-trash-o"></i></a>  </td>
                              </tr>
                              @endforeach
                              </tbody>
                            </table>
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
  <script type="text/javascript">
        $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
                function () {
                    location.href = "/admin/kullanicilar/sil/" + destroy_id;
                },
                function () {
                    alertify.error('Silme işlemi iptal edildi')
                }
            )

        });

  </script>
@endsection

@section('css')
    
  <!-- DataTables -->
 
@endsection

@section('js')
<!-- jQuery 3 -->
<script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/backend/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection
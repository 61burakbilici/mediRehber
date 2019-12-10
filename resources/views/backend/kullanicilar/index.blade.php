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
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>Trident</td>
                                <td>Internet
                                  Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                              </tr>
                              
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/plugins/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/plugins/moment/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url('assets/dist/js/pages/dashboard.js') ?>"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js') ?>"></script>
<!-- jsGrid -->
<script src="<?php echo base_url('assets/plugins/jsgrid/demos/db.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jsgrid/jsgrid.min.js') ?>"></script>
<!-- DataTables -->
<!-- <script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.js") ?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js") ?>"></script> -->

<!-- Include Extra Script -->

<?php 
    if(!empty($extra_script)){
        if(is_array($extra_script)){
            foreach($extra_script as $script){
                echo $script;
            };
        }
        else{
            echo $extra_script;
        }
    }
?>

<!-- End Include Extra Script -->

<script>
  // $(function () {
  //   $('#datatable').DataTable();
  // });

  // function hitung_total() {
  //   var elements = document.getElementById("form_barang").elements;
  //   var obj ={};
  //   var total_barang = 0;
  //   for(var i = 0 ; i < elements.length ; i++){
  //     var item = elements.item(i);
  //     obj[item.name] = item.value;
  //     if (item.type == "number") {
  //       total_barang = total_barang + Number(item.value);

  //     }
  //   }
  //   document.getElementById("text_total_harga").innerHTML = "Rp. " + total_barang;
  //   document.getElementById("total_harga").value = total_barang;
  //   $('html, body').animate({scrollTop: '0px'}, 0);
  // }

</script>
</body>
</html>

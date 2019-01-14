    </div>
    <footer>
      <div class="pull-right">
        2019 &copy TigerShark Shop 
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>admin_assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>admin_assets/js/bootstrap.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url(); ?>admin_assets/js/custom.min.js"></script>

<script src="<?php echo base_url('admin_assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('admin_assets/datatables-plugins/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('admin_assets/datatables-responsive/dataTables.responsive.js') ?>"></script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
<!-- Flot -->
<!-- /Flot -->

<!-- /gauge.js -->
</body>
</html>
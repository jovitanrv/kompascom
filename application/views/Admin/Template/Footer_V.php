        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->

    <!-- Modals Start-->
    <div class="login-form-area adminpro-pd mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div id="PrimaryModalftblack" class="modal modal-adminpro-general default-popup-PrimaryModal PrimaryModal-bgcolor fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                    <i class="fa fa-check modal-check-pro"></i>
                                    <h2>Berhasil!</h2>
                                    <?php if(isset($_SESSION['Success'])) { ?>
                                        <p>Data berita BERHASIL diTambahkan.</p>
                                    <?php } ?>
                                    <?php if(isset($_SESSION['Success_Edit'])) { ?>
                                        <p>Data berita BERHASIL diUpdate.</p>
                                    <?php } ?>
                                    <?php if(isset($_SESSION['Success_Delete'])) { ?>
                                        <p>Data berita BERHASIL diDelete.</p>
                                    <?php } ?>
                                </div>
                                <div class="modal-footer footer-modal-admin">
                                    <a data-dismiss="modal" href="#">Done</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="DangerModalftblack" class="modal modal-adminpro-general FullColor-popup-DangerModal PrimaryModal-bgcolor fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-close-area modal-close-df">
                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="modal-body">
                                    <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                    <h2>Gagal!</h2>
                                    <p>Data berita GAGAL ditambahkan.</p>
                                </div>
                                <div class="modal-footer footer-modal-admin">
                                    <a data-dismiss="modal" href="#">Done</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <!-- Modals End-->
  
    <!-- jquery
		============================================ -->
        <script src="<?php echo base_url(); ?>assets/admin/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/sparkline/sparkline-active.js"></script>
    <!-- modal JS
		============================================ -->
        <script src="<?php echo base_url(); ?>assets/admin/js/modal-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/icheck/icheck-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/data-table/bootstrap-table-export.js"></script>
    <!-- summernote JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/summernote.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/summernote-active.js"></script>  
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/admin/js/main.js"></script>
    <!-- Alert JS
		============================================ -->
    <script>
        var session_failed = "<?php echo $_SESSION['Failed'] ?>";
        if(session_failed) {
            $('#DangerModalftblack').modal('show');
        }
    </script>
    
    <script>
        var session_success = "<?php echo $_SESSION['Success'] ?>";
        if(session_success) {
            $('#PrimaryModalftblack').modal('show');
        }
    </script>

    <script>
        var session_success = "<?php echo $_SESSION['Success_Edit'] ?>";
        if(session_success) {
            $('#PrimaryModalftblack').modal('show');
        }
    </script>

    <script>
        var session_success = "<?php echo $_SESSION['Success_Delete'] ?>";
        if(session_success) {
            $('#PrimaryModalftblack').modal('show');
        }
    </script>
</body>

</html>
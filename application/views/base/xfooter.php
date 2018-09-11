
    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="<?php echo base_url(); ?>static/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url(); ?>static/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="<?php echo base_url(); ?>static/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- datatables -->
    <script src="<?php echo base_url(); ?>static/assets/datatables/media/js/jquery.dataTables.min.js"></script>
    <!-- datatables buttons-->
    <script src="<?php echo base_url(); ?>static/assets/datatables-buttons/js/dataTables.buttons.js"></script>
    <script src="<?php echo base_url(); ?>static/js/custom/datatables/buttons.uikit.js"></script>
    <script src="<?php echo base_url(); ?>static/assets/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>static/assets/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>static/assets/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>static/assets/datatables-buttons/js/buttons.colVis.js"></script>
    <script src="<?php echo base_url(); ?>static/assets/datatables-buttons/js/buttons.html5.js"></script>
    <script src="<?php echo base_url(); ?>static/assets/datatables-buttons/js/buttons.print.js"></script>

    <!-- datatables custom integration -->
    <script src="<?php echo base_url(); ?>static/js/custom/datatables/datatables.uikit.min.js"></script>

    <!--  datatables functions -->
    <script src="<?php echo base_url(); ?>static/js/pages/plugins_datatables.min.js"></script>
    
    <script>
        $(function() {
            if(isHighDensity()) {
                $.getScript( "<?php echo base_url(); ?>static/js/custom/dense.min.js", function(data) {
                    // enable hires images
                    altair_helpers.retina_images();
                });
            }
            if(Modernizr.touch) {
                // fastClick (touch devices)
                FastClick.attach(document.body);
            }
        });
        $window.load(function() {
            // ie fixes
            altair_helpers.ie_fix();
        });
    </script>


</body>
</html>
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
    <!-- application js -->
     <script src="<?php echo base_url(); ?>static/js/application/pusher.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- common functions -->
    <script src="<?php echo base_url(); ?>static/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url(); ?>static/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="<?php echo base_url(); ?>static/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- parsley (validation) -->
    <script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
    </script>
    <script src="<?php echo base_url(); ?>static/assets/parsleyjs/dist/parsley.min.js"></script>

    <!--  forms validation functions -->
    <script src="<?php echo base_url(); ?>static/js/pages/forms_validation.min.js"></script>
    
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
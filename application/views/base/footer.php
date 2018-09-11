
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
    <!-- d3 -->
    <script src="<?php echo base_url(); ?>static/assets/d3/d3.min.js"></script>
    <!-- metrics graphics (charts) -->
    <script src="<?php echo base_url(); ?>static/assets/metrics-graphics/dist/metricsgraphics.min.js"></script>
    <!-- chartist (charts) -->
    <script src="<?php echo base_url(); ?>static/assets/chartist/dist/chartist.min.js"></script>
    <!-- maplace (google maps) -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyC2FodI8g-iCz1KHRFE7_4r8MFLA7Zbyhk"></script>
    <script src="<?php echo base_url(); ?>static/assets/maplace-js/dist/maplace.min.js"></script>
    <!-- peity (small charts) -->
    <script src="<?php echo base_url(); ?>static/assets/peity/jquery.peity.min.js"></script>
    <!-- easy-pie-chart (circular statistics) -->
    <script src="<?php echo base_url(); ?>static/assets/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- countUp -->
    <script src="<?php echo base_url(); ?>static/assets/countUp.js/dist/countUp.min.js"></script>
    <!-- handlebars.js -->
    <script src="<?php echo base_url(); ?>static/assets/handlebars/handlebars.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/custom/handlebars_helpers.min.js"></script>
    <!-- CLNDR -->
    <script src="<?php echo base_url(); ?>static/assets/clndr/clndr.min.js"></script>

    <!--  dashbord functions -->
    <script src="<?php echo base_url(); ?>static/js/pages/dashboard.min.js"></script>
    <!--  help/faq functions -->
    <script src="<?php echo base_url(); ?>static/js/pages/page_help.min.js"></script>
    <!-- special adon -->
    <script src="<?php echo base_url(); ?>static/js/pages/forms_advanced.min.js"></script>
    
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
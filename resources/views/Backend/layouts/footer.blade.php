<div class="page-footer">
    <div class="page-footer-inner"> <?php echo date('Y'); ?> &copy; Dummy Project By
        <a href="javascript:" target="_blank" class="makerCss">Sabin Koju</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- end footer -->
</div>
<!-- start js include path -->
<script src="{{ asset('Backend/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/popper/popper.js') }}"></script>
<script src="{{ asset('Backend/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('Backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/sparkline/jquery.sparkline.js') }}"></script>
<script src="http://radixtouch.in/templates/admin/smart/source/assets/js/pages/sparkline/sparkline-data.js"></script>
<!-- Common js-->
<script src="{{ asset('Backend/js/app.js') }}"></script>
<script src="{{ asset('Backend/js/layout.js') }}"></script>
<script src="{{ asset('Backend/js/theme-color.js') }}"></script>
<!-- material -->
<script src="{{ asset('Backend/plugins/material/material.min.js') }}"></script>
<!-- chart js -->
<script src="http://radixtouch.in/templates/admin/smart/source/assets/plugins/chart-js/Chart.bundle.js"></script>
<script src="{{ asset('Backend/plugins/chart-js/utils.js') }}"></script>
<!-- summernote -->

<!-- Data Table -->
<script src="{{asset('Backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('Backend/js/pages/table/table_data.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables/export/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables/export/buttons.flash.min.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables/export/jszip.min.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables/export/pdfmake.min.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables/export/vfs_fonts.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables/export/buttons.html5.min.js')}}"></script>
<script src="{{asset('Backend/plugins/datatables/export/buttons.print.min.js')}}"></script>
<!-- end js include path -->

@yield('scripts')

</body>

</html>

  
 {{--  <script type="text/javascript" src="{{ asset('Admin/node_modules/axios/dist/axios.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('Admin/node_modules/vue/dist/vue.js') }}"></script> --}}
  <!-- Jquery Core Js -->

    <script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('Admin/node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>

     @include('layout.ajax.'.((!empty($ajax))?$ajax:''))


    <script type="text/javascript" src="{{ url('/js/function.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('Admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('Admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('Admin/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('Admin/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>


    
    <!-- Custom Js -->
    <script src="{{asset('Admin/js/admin.js')}}"></script>

    
    {{-- <script src="{{asset('Admin/js/pages/forms/basic-form-elements.js')}}"></script> --}}
    <script src="{{asset('Admin/js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('Admin/js/demo.js')}}"></script>
</body>

</html>

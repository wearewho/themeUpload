
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="{{ URL::asset('adminlte/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('adminlte/js/select2.full.min.js') }}"></script>
<script src="{{ URL::asset('adminlte/js/main.js') }}"></script>
<script src="{{ URL::asset('adminlte/js/app.min.js') }}"></script>

<!-- Export Files Datatables -->
<!-- 
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script> 
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>--> 

<script src="{{ url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url('adminlte/js/app.min.js') }}"></script>

<script>
    window._token = '{{ csrf_token() }}';
</script>

<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <!-- Sweet Alert -->
 @if (session()->has('complete'))
<script>
    swal({
    title: "Login Complete!",
    text: "Welcome back, "+"<?php echo session()->get('complete'); ?>",
    icon: 'success',
    showConfirmButton: false
    });
</script>
@endif 
@if (session()->has('insertComplete'))
<script>
    swal({
    title: "<?php echo session()->get('insertComplete'); ?>",
    icon: 'success',
    showConfirmButton: false
    });
</script>
@endif 
@if (session()->has('editComplete'))
<script>
    swal({
    title: "<?php echo session()->get('editComplete'); ?>",
    icon: 'success',
    showConfirmButton: false
    });
</script>
@endif 

@yield('javascript')
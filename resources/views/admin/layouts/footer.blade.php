</div>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
{{-- <footer class="footer">
  <div class="row">
    <div class="col-12 d-flex justify-content-center footer-copyright">
        <p class="mr-5">© <script>document.write(new Date().getFullYear())</script> , All right reserved</p>
        <p><a href="{{ route('terms-of-service') }}">Terms of Services</a> | <a href="{{ route('privacy-policy') }}">Privacy Policy</a></p>
    </div>
  </div>
</footer> --}}


<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{ asset('admin-assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin-assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin-assets/js/template.js') }}"></script>
<script src="{{ asset('admin-assets/js/settings.js') }}"></script>
<script src="{{ asset('admin-assets/js/todolist.js') }}"></script>
<script src="{{ asset('admin-assets/js/dashboard.js') }}"></script>
<script src="{{ asset('admin-assets/js/Chart.roundedBarCharts.js') }}"></script>
<script src="{{ URL::to('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>


<!--DataTable-->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
</body>

</html>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });

</script>
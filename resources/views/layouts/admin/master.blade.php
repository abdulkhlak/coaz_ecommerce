<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/theme-responsive.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/bower_components/morris.js/morris.css')}}">
    <link rel="stylesheet" href="{{asset('backend/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <link rel="stylesheet"
          href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}">
    <!-- pluign css -->
{{--    <link href="{{asset('backend')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">--}}

<!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("backend")}}/plugins/select2/select2.min.css">
    <!-- font awsemae --->
    <script src="https://kit.fontawesome.com/c692cc0aa4.js" crossorigin="anonymous"></script>
    <style>
        .notifyjs-corner {
            z-index: 10000 !important;
        }
    </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!--header-->
@include('layouts.header')

<!--sidebar for admin-->
    @include('layouts.sidebar')


    <div class="content-wrapper">


        <!-- section of dashboard -->
        @yield('content')


    </div>
    <!-- footer -->
    @include('layouts.footer')

    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    </aside>

</div>


<script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script>$.widget.bridge('uibutton', $.ui.button);</script>
<script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('backend/bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{asset('backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('backend/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{asset('backend/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<script type="text/javascript" src="{{asset('backend')}}/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<!-- DataTables -->
<script src="{{asset("backend")}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset("backend")}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- notify ----->
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
@if(session()->has('success'))
    <script>
        $(function () {
            $.notify("{{session()->get('success')}}", {globalPostion: 'top right', className: 'success'});
        });
    </script>
@endif
<!-- sweet alert script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $(function () {
        $(document).on('click', '#delete', function (e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        });
    });
</script>
{{--<script type="text/javascript" src="{{asset('backend')}}/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>--}}
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>

<!-- Select2 -->
<script src="{{asset("backend")}}/plugins/select2/select2.full.min.js"></script>

<!-- Page script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>

@yield('scripts')
</body>
</html>

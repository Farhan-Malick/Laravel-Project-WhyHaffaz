<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layouts.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">

                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h2>Our Sheikhs Section</h2>
                                    <div class="col-sm-12" style="text-align: center; color:green; font-size:20px">
                                        {{ session('msg') }}
                                    </div>
                                    <div class="col-sm-12" style="text-align: center; color:red; font-size:20px">
                                        {{ session('msgForDelete') }}</div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr width="100%">
                                                <th width="10%">ID</th>
                                                <th width="20%">Heading</th>
                                                <th width="25%">Description 1</th>
                                                <th width="25%">Description 2 </th>
                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($our_result as $list)
                                                <tr>
                                                    <td>{{ $list->id }}</td>
                                                    <td>{{ $list->heading }}</td>
                                                    <td class="toggle-text">
                                                        {{ Str::limit($list->description1, 60) }}
                                                    <td class="toggle-text">
                                                        {{ Str::limit($list->description2, 60) }}
                                                    <td>
                                                        <a class="btn btn-primary"
                                                            href="{{ URL('/admin/oursheikh/oursheikhedit/' . $list->id) }}">Edit</a>
                                                        <a class="btn btn-danger"
                                                            href="{{ URL('/admin/oursheikh/delete' . $list->id) }}">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="10%">ID</th>
                                                <th width="20%">Heading</th>
                                                <th width="25%">Description 1</th>
                                                <th width="25%">Description 2 </th>
                                                <th width="20%">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h1>Our Honourable Sheikhs</h1>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="10%">ID</th>
                                                <th width="20%">First Name</th>
                                                <th width="20%">Last Name</th>
                                                <th width="30%">Images</th>
                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($no_result as $list)
                                            <tr>
                                                <td>{{ $list->id }}</td>
                                                <td>{{ $list->fname }}</td>
                                                <td>{{ $list->lname }}</td>
                                                <td><img src="{{ asset('storage/app/public/post/oursheikhs/' . $list->image) }}"
                                                        width="150px" height="100px" /></td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ URL('/admin/oursheikh/oursheikhpart/oursheikhedit/' . $list->id) }}">Edit</a>
                                                    <a class="btn btn-danger"
                                                        href="{{ URL('/admin/oursheikh/oursheikhpart/delete' . $list->id) }}">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tr>
                                            <tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th width="10%">ID</th>
                                                <th width="20%">First Name</th>
                                                <th width="20%">Last Name</th>
                                                <th width="30%">Images</th>
                                                <th width="20%">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('public/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('public/admin/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('public/admin/dist/js/demo.js') }}"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
</body>

</html>

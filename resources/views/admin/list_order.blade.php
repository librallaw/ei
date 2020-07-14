<!DOCTYPE html>
<html lang="en">


@include("admin.includes.header");

<body class="fix-sidebar">

     @include("admin.includes.nav");

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">List Orders</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Orders</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        @include('admin.includes.alert');

                        <div class="white-box">
                            <h3 class="box-title m-b-0">Order</h3>
                            <p class="text-muted m-b-30">All Orders</p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Product</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Delete</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $x = 1; ?>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{$x++}}</td>
                                            <td><img src="/images/{{$order->image}}" alt="banner" style="height: 50px; width: 50px;"/></td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->price}}</td>
                                            <td><a href="{{ route('deleteOrder', ['id' => $order->id]) }}"> <span><i class="fa fa-trash-o"></i></span></a></td>
                                            <td>
                                                <form>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            @if($order->status == 0)
                                                                <span class="label label-danger">Order Canceled</span>
                                                            @else
                                                            @if($order->status == 4)
                                                                    <a href="{{ route('updateStatus', ['id' => $order->id]) }}" class="btn btn-warning btn-outline">Confirm Order</a> ||
                                                                    <a href="{{ route('cancelOrder', ['id' => $order->id]) }}" class="btn btn-danger btn-outline">Cancel Order</a>
                                                                @elseif($order->status == 3)
                                                                    <a href="{{ route('updateStatus', ['id' => $order->id]) }}" class="btn btn-info btn-outline">Ship Order</a>
                                                                @elseif($order->status == 2)
                                                                    <a href="{{ route('updateStatus', ['id' => $order->id]) }}" class="btn btn-success btn-outline">Deliver Order</a>
                                                                @elseif($order->status == 1)
                                                                    <span class="label label-success">Order Delivered</span>
                                                                @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                @if($order->status == 4)
                                                    <span class="label label-warning">Pending</span>
                                                @elseif($order->status == 3)
                                                    <span class="label label-primary">Confirmed</span>
                                                @elseif($order->status == 2)
                                                    <span class="label label-info">Shipped</span>
                                                @elseif($order->status == 1)
                                                    <span class="label label-success">Delivered</span>
                                                @elseif($order->status == 0)
                                                    <span class="label label-danger">Canceled</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         @include("admin.includes.footer")
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
@include("admin.includes.footer2")

    <!-- start - This is for export functionality only -->
<!--    <script src="../../../../../cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>-->
<!--    <script src="../../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>-->
<!--    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>-->
<!--    <script src="../../../../../cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>-->
<!--    <script src="../../../../../cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>-->
<!--    <script src="../../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>-->
<!--    <script src="../../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>-->
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!--Style Switcher -->
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/view.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 15:02:44 GMT -->
</html>

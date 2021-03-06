<!DOCTYPE html>
<html lang="en">


@include("admin.includes.header");

<body class="fix-sidebar">

     @include("admin.includes.nav");

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">View Section Image</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Product</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        @include('admin.includes.alert');

                        <div class="white-box">
                            <h3 class="box-title m-b-0">Products</h3>
                            <p class="text-muted m-b-30">Products</p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Special Product</th>
                                            <th>Discount</th>
                                            <th>Hot_deal</th>
                                            <th>Availability</th>
                                            <th>Category</th>
                                            <th>image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $x = 1;?>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{$x++}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                @if($product->special_product === 0)
                                                    <span class="label label-rounded label-danger">No</span>
                                                    @else
                                                    <span class="label label-rounded label-success">Yes</span>
                                                @endif
                                            </td>
                                            <td>{{$product->discount}}</td>
                                            <td>
                                                @if($product->hot_deal === 0)
                                                    <span class="label label-rounded label-danger">No</span>
                                                @else
                                                    <span class="label label-rounded label-success">Yes</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($product->availability === 0)
                                                    In stock
                                                @else
                                                    Not in stock
                                                @endif
                                            </td>
                                            <td>{{$product->category->category_name}}</td>
                                            <td><img src="/images/{{$product->product_image}}" alt="banner" style="height: 50px; width: 50px;"/></td>
                                            <td><a href="{{url('edit_product/'.$product->id)}}"><span class="label label-rouded label-warning"> Edit</span></a> || <a href="{{ route('deleteProduct', ['id' => $product->id]) }}"> <span class="label label-rounded label-danger">Delete</span></a></td>
                                            <td></td>
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

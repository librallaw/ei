<!DOCTYPE html>
<html lang="en">


    @include("admin.includes.header");


<body>
    >
    @include("admin.includes.nav");

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard 1</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- .col -->
                    <!-- /.col -->
                    <div class="col-md-12 col-sm-6">
                        <div class="row">
                            <!-- .col -->
                            <div class="col-md-3 col-sm-12">
                                <div class="white-box text-center bg-megna">
                                    <h1 class="text-white counter">{{count($products)}}</h1>
                                    <p class="text-white">Products</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-3 col-sm-12">
                                <div class="white-box text-center bg-inverse">
                                    <h1 class="text-white counter">{{count($sProducts)}}</h1>
                                    <p class="text-white">Special Products</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-3 col-sm-12">
                                <div class="white-box text-center bg-info">
                                    <h1 class="counter text-white">{{count($orders)}}</h1>
                                    <p class="text-white">Orders</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-3 col-sm-12">
                                <div class="white-box text-center bg-danger">
                                    <h1 class="text-white counter">6555</h1>
                                    <p class="text-white">FAQs</p>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- <div class="row">
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class="box-title">Tax Deduction</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-info">$647</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b>(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sparkline2dash" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class="box-title">Shipment</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-megna">$347</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b class="">(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sales1" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class="box-title">Revenue Generate</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-danger">$647</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b>(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sparkline2dash2" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class=" box-title">Order Got</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="">$347</h1>
                                    <p class="text-muted">APRIL 2016</p>
                                    <b class="">(150 Sales)</b>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sales12" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
               
                <!--/.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Students</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Students</th>
                                            <th>Date Added</th>
                                            <th>Courses Offered</th>
                                            <th>Fees</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Portal ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Steve N. Horton</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                            <td>Tailoring</td>
                                            <td>$45.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>Programmimg</td>
                                            <td>$245.30</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                                        </tr>
                                        <tr>
                                            <td>Lucy Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>Bead Making</td>
                                            <td>$38.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                                        </tr>
                                        <tr>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                            <td>Tailoring, Bag Making</td>
                                            <td>$77.99</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                                        </tr>
                                        <tr>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                            <td>Tailoring</td>
                                            <td>$18.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                            <td>Tailoring</td>
                                            <td>$658.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-danger">Refunded</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>

                                            <td>Scott S. Calabrese</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                            <td>Tailoring, Shoe Making</td>
                                            <td>$45.58</td>
                                            <td class="text-center">
                                                <div class="label label-table label-warning">Unpaid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .right-sidebar -->
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
      @include("admin.includes.footer");
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    @include("admin.includes.footer2");

    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function() {--}}
            {{--$.toast({--}}
                {{--heading: 'Welcome to Fresh Fire Chapel Admin.',--}}
                {{--text: 'Customise and edit anything.',--}}
                {{--position: 'top-right',--}}
                {{--loaderBg: '#ff6849',--}}
                {{--icon: 'info',--}}
                {{--hideAfter: 3500,--}}
                {{--stack: 6--}}
            {{--})--}}
        {{--});--}}
    {{--</script>--}}
    <!--Style Switcher -->
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/pixeladmin/inverse/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Oct 2018 14:59:06 GMT -->
</html>

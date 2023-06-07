@extends('layouts.master')

@section('title','Milton Auto - Admin Dashboard')

@section('content')

<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 sales">
        <h4><strong>ORDERS</strong></h4>
        <div>
            <table class="table table-striped">
                
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>RAM 1500 STARTER PMGR 12-VOLT, CW 13-TOOTH, 56029652AA SND0800</td>
                        <td>$ 99.9</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>RAM 1500 STARTER PMGR 12-VOLT, CW 13-TOOTH, 56029652AA SND0800</td>
                        <td>$ 99.9</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>RAM 1500 STARTER PMGR 12-VOLT, CW 13-TOOTH, 56029652AA SND0800</td>
                        <td>$ 99.9</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>RAM 1500 STARTER PMGR 12-VOLT, CW 13-TOOTH, 56029652AA SND0800</td>
                        <td>$ 99.9</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>RAM 1500 STARTER PMGR 12-VOLT, CW 13-TOOTH, 56029652AA SND0800</td>
                        <td>$ 99.9</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    

                    <tr>
                        <td colspan="5" class="text-center"><a href="#" style="color:#000;">click to see more....</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-12">
        <h4><strong>LEFT SIDE 1</strong></h4>
        <div>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </div>

        <h4><strong>LEFT SIDE 2</strong></h4>
        <div>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </div>
    </div>
</div>


<!-- Start Chart -->
<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 sales">
        <h4><strong>Monthly Sales Chart</strong></h4>
        <div class="chart_style">
            <div  style="">
                <canvas id="myChart"></canvas>
              </div>
              
              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
              
              <script>
                const ctx = document.getElementById('myChart');
              
                new Chart(ctx, {
                  type: 'doughnut',
                  data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                      label: '$ ',
                      data: [12, 19, 3, 5, 2, 3, 7, 10, 13, 11, 9, 13],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    scales: {
                      y: {
                        beginAtZero: true
                      }
                    }
                  }
                });
              </script>

        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-12">
        <h4><strong>LEFT SIDE 1</strong></h4>
        <div>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </div>

        <h4><strong>LEFT SIDE 2</strong></h4>
        <div>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </div>
    </div>
</div>
<!-- End Chart -->

<div class="row">
    <div class="col-lg-10 col-md-10 col-sm-12 sales">
        <h4><strong>New Registered Customers</strong></h4>
        <div>
            <table class="table table-striped">
                
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Office</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    <tr>
                        <td>27-05-2023</td>
                        <td>MILT_<?php echo time(); ?></td>
                        <td>John Doe</td>
                        <td>Ontario</td>
                        <td>+1-201-201-2553</td>
                        <td>Office</td>
                        <td class="text-center"><button class="btn-danger"><i class="fa fa-ban"></i></button></td>
                    </tr>

                    

                    <tr>
                        <td colspan="7" class="text-center"><a href="#" style="color:#000;">click to see more....</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-12">
        <h4><strong>LEFT SIDE 1</strong></h4>
        <div>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </div>

        <h4><strong>LEFT SIDE 2</strong></h4>
        <div>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </div>
    </div>
</div>


@endsection('content')
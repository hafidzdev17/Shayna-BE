@extends('layouts.default')

@section('title','Shayna - Dashboard')
    
@section('content')
  <!-- Animated -->
  <div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text">Rp. <span class="count">300</span></div>
                                <div class="stat-heading">Penghasilan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">50</span></div>
                                <div class="stat-heading">Penjualan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Pembelian Terbaru </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor</th>
                                <th>Total Transaksi</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Hafid</td>
                                  <td>do.crazy192@gmail.com</td>
                                  <td>18001010</td>
                                  <td>100</td>
                                  <td>Ngengek</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->

            <div class="col-xl-4">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card br-0">
                            <div class="card-body">
                                <div class="chart-container ov-h">
                                    <div id="flotPie1" class="float-chart"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>
            </div> <!-- /.col-md-4 -->
        </div>
    </div>
    <!-- /.orders -->
  <!-- /#add-category -->
  </div>
  <!-- .animated -->
@endsection


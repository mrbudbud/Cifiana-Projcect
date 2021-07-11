@extends('kasir.template')

@section('title', 'Data Barang')

@section('content')

@include('sweetalert::alert')

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Data Barang</h1>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sa
                        les</h3>
                    <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg">$18,230.00</span>
                        <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span class="text-muted">Since last month</span>
                    </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> This year
                    </span>

                    <span>
                        <i class="fas fa-square text-gray"></i> Last year
                    </span>
                    </div>
                </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
    </div>
  </section>
  <!-- /.content -->

@endsection

@push('script')
  <!-- OPTIONAL SCRIPTS -->
<script src="{{asset('LTE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('LTE/dist/js/pages/dashboard3.js')}}"></script>
@endpush



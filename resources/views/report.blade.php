@extends('header')
@section('content')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-12 col-xl-23">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                            <form>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-2">
                                                                        <input type="text" class="form-control" placeholder="Date Awal">
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" class="form-control" placeholder="Date Akhir">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="text" class="form-control" placeholder="Customer">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="text" class="form-control" placeholder="Invoice">
                                                                    </div>
                                                                    
                                                            </div>
                                                                <button  type="button" class="btn btn-primary" >
                                                                   Filter
                            </button>
                                                                                </form>
                                                                        </div>
                                                                    </div>
                                                    </div>
                                            <!-- card1 end -->
                                            <!-- Statestics Start -->
                                            <div class="col-md-12 col-xl-23">
                                                <div class="card">
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Invoice</th>
                                                                        <th>Date</th>
                                                                        <th>Customer</th>
                                                                        <th>Total</th>
                                                                        <th>Discount</th>
                                                                        <th>Grand Toal</th>
                                                                        <th>Detail</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endsection
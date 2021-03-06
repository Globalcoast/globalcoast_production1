@extends('layouts.admin_dashboard')

@section('admin_dashboard_content')




<div class="row">

                    <div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10">


                        <div class="ribbon-wrapper card">
                                    <div class="ribbon ribbon-info">All Requeted Capitals</div>
                                    
                                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Investor</th>
                                                <th>Amount ($)</th>
                                                <th>Currency | Investor's ADDS</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            $count=($Capitals->currentPage() * $Capitals->perPage())-($Capitals->perPage() - 1);
                                            ?>

                                        	@foreach($Capitals as $Capital)

                                        	


                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$Capital->user->name}}</td>
                                                <td>{{number_format($Capital->amount)}}</td>
                                                <td>
                                                    {{$Capital->user->currency_type}}
                                                    <br>

                                                    @if(isset($Capital->user->wallet_address))

                                                    <label class="label label-info label-sm">

                                                         {{$Capital->user->wallet_address}}
                                                        
                                                    </label>
                                                   
                                                    @else
                                                    <label class="label label-info label-sm">
                                                    ---
                                                </label>

                                                    @endif
                                                </td>
                                                <td>

                                                	@if($Capital->has_reinvested==1)
                                                    <label href="" class="label label-xs label-success">Reinvested</label>
                                                    @else

                                                    @if($Capital->has_ended==1)
                                                    <label class="label label-xs label-success">Paid</label>
                                                    @endif

                                                     @if($Capital->has_confirmed_payment==1)
                                                    <label class="label label-xs label-success">Comfirmed</label>
                                                    @endif


                                                     @if($Capital->has_requested==1)
                                                    <label class="label label-xs label-success">Requested</label>
                                                    @endif

                                                    @endif

                                                    @if($Capital->automate==1)
                                                    <label href="" class="label label-xs label-info">Automated</label>
                                                    @endif
                                                </td>

                                                <td>
                                                   
                                                   @if($Capital->has_requested==1 && $Capital->has_ended==0 && $Capital->automate==0)
                                                    <a href="{{URL::to('')}}" class="btn btn-sm btn-primary">Pay</a>

                                                    
                                                    <a href="{{URL::to('/admin/request/capital/automate/'.$Capital->id)}}" class="btn btn-sm btn-primary">Automate Payment</a>

                                                    <a href="{{URL::to('/admin/request/capital/con_trans/'.$Capital->id)}}" class="">.</a>
                                                   

                                                   @endif
                                                    
                                                </td>
                                                
                                                
                                            </tr>

                                            <?php
                                            	$count++;
                                            ?>

                                            @endforeach

                                           
                                           
                                        </tbody>
                                    </table>
                                </div>


                                <center>
                                	{{$Capitals->links()}}
                                </center>

                            </div>
                        </div>
                                   
                                </div>



                        
                    </div>

                    <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                </div>

@endsection

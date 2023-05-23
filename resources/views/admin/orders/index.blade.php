@extends('layouts.admin')

@section('title')
   Orders 
@endsection
@section('content')
<a class="btn btn-warning float-end" href="{{ route('generate-pdf') }}">PDF GENERARION</a>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">New Orders</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order Date</th>
                                    <th>Tracking Number</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>   
                            </thead>  
                            <tbody>
                                @foreach($orders as $item)
                                    <tr>
                                        <td>{{date('d-m-y',strtotime($item->created_at))}}</td>
                                        <td>{{$item->tracking_no}}</td>
                                        <td>{{$item->total_price}}</td>
                                        <td>
                                            @if ($item->status == '0')
                                              <span class="badge bg-warning text-dark">Pending</span>
                                            @else
                                              <span class="badge bg-success">Completed</span>
                                            @endif
                                          </td>                                        <td>
                                            <a href="{{url('admin/view-order/'.$item->id)}}" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach    
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
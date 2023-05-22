@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4> Product Page</h4>
            <hr>
        </div>

        <div class="card-body">
            <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
            </form>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Category</th> 
                      <th>Name</th>
                      <th>Selling Price</th> 
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($products as $item)              
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->selling_price}}</td>
                        <td>
                            <img src="{{'assets/uploads/products/'.$item->image}}" class="cat-image">
                        </td>
                        <td>
                            <a  href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a  href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
              
                <a class="btn btn-warning float-end" href="{{ route('products.export') }}">Export Product Data</a>
          </table>
        </div>
    </div>
@endsection 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <a href="{{route('computer.create')}}" class='btn btn-primary'>Add new product</a>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($computers as $computer)
                            <tr>
                            <td>{{$computer->id}}</td>
                            <td>{{$computer->name}}</td>
                            <td>{{$computer->price}}</td>
                            <td>{{$computer->desc}}</td>
                            <td>
                              <a href="{{route('computer.edit',$computer->id)}}" class="btn btn-success">Update</a>
                              <form action="{{route('computer.destroy',$computer->id)}}" method="post" calss="d-inline-block">
                              @csrf
                              @method('delete')
                              <button class="btn btn-primary">Remove</button>
                              </form>
                              </td>
                            </tr>
                            @endforeach
                         
                        </tbody>
                      </table>
                </form>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

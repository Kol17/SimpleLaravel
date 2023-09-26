@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                    <a href="{{route('item.create')}}" class='btn btn-primary'>Add</a>
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                        <th>{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <a href="{{route('item.edit',$item->id)}}" class='btn btn-success'>Update</a>
                            <form action="{{route('item.destroy',$item->id)}}" method='post'>
                                @csrf
                                @method('delete')
                                <button class='btn btn-danger'>Remove</button>
                            </form>
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

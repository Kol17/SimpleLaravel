@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                    <a href="{{route('mobile.create')}}" class='btn btn-primary'>Add</a>
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Brand</th>
                        <th scope="col">OS</th>
                        <th scope="col">Note</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mobiles as $m)
                        <tr>
                        <th>{{$m->id}}</th>
                        <td>{{$m->name}}</td>
                        <td>{{$m->os}}</td>
                        <td>{{$m->note}}</td>
                        <td>
                            <a href="{{route('mobile.edit',$m->id)}}" class='btn btn-success'>Update</a>
                            <form action="{{route('mobile.destroy',$m->id)}}" method='post'>
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

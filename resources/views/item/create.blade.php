@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <form method='post' action="{{route('item.store')}}">
                        @csrf
                            <div class="form-group">
                                <label >Item Name</label>
                                <input type="text" class="form-control"  placeholder="Enter name" name='name' value="{{old('name')}}">
                            @error('name')
                            <small class='text-danger'>{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control"  placeholder="Enter price" name='price' value="{{old('price')}}">
                            @error('price')
                                <small class='text-danger'>{{$message}}</small>
                            @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form action='{{route('computer.update',$computer->id)}}' method='post'>
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label>Brand name</label>
                        <input type="text" class="form-control" placeholder="Enter brand" name="name" value="{{old('name',$computer->name)}}">
                        @error('name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter price" name="price" value="{{old('price',$computer->price)}}">
                        @error('price')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Description</label>
                        <textarea class='form-control' name='desc'>{{old('desc',$computer->desc)}}</textarea>
                        @error('desc')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

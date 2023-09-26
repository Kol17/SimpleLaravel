@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <form action="{{route('mobile.store')}}" method='post'>
                        @csrf
                            <div class="form-group">
                                <label >Phone Brand</label>
                                <input type="text" class="form-control"  placeholder="Enter name" name='brand'>
                            </div>
                            <div class="form-group">
                                <label>OS</label>
                                <input type="text" class="form-control"  placeholder="Enter operating system" name='os'>
                            </div>
                            <div class="form-group">
                                <label >Note</label>
                                <textarea class="form-control" name="note"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

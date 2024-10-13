@extends('layout')

@section('content')
    <h1>Create a new menu</h1>
    <form method="POST" action="{{ route('restaurant.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name food">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="decimal" name="price" class="form-control" id="price" placeholder="Enter prace food">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('restaurant.index') }}">Back to the list</a>
@endsection
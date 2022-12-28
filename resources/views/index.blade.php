@extends('layout')
@section('body')

<form action="" class="col-10 col-md-6 m-auto my-3">
    <input placeholder="Search..." class="form-control" type="text" name="search" value="{{old("search")}}" >
</form>
  <div class="container shadow rounded my-2 p-5">
    <div class="row">
        @foreach ($images as $image)
        <div class="col-12 col-md-4 my-3">
            <div class="card w-100" >
                <img 
                style="height: 250px;object-fit:cover"
                loading="lazy" src="{{ $image['webformatURL'] }}" class="card-img-top" alt="{{ $image['tags'] }}">
                <div class="card-body">
                    <p class="card-text">{{ $image['tags'] }}</p>
                    <a target="_blank" href="{{ $image['userImageURL'] }}" class="btn btn-info text-white">User Image</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
  </div>
@endsection

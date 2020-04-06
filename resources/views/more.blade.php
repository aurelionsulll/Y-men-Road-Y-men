@extends('layouts.app')
@section('content')
<div class="home d-flex flex-column align-items-start " style="margin-top:150px; margin-bottom:70px">
    <div class="container col-md-9">
        <div class="card mb-3">
            <img src="{{asset('images/'.$mores->image) }}" class="card-img-top" alt="..." width="100px" height="450px">
                <div class="card-body">
                  <h5 class="card-title">{{$mores->text }}</h5>
                  <p class="card-text">{{ $mores->subtext }}</p>
                  <p class="card-text"><small class="text-muted">{{ $mores->created_at}}</small></p>
                </div>
              </div>
    </div>
</div>
@endsection
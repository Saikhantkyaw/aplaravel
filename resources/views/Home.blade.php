@extends('layout')
@section('content')
@foreach($data as $post)
<h2 class="" style="text-align:center"> SImple Blog Site</h2>
<div class="container">
        <div class="card" style="text-align:center">
          <div class="card-body">
            <h4 class="card-title"> {{ $post->name}}</h4>
            <p class="card-text"> {{ $post->description}}</p>
            <a href="#" class="btn btn-primary" >view</a>
          
          </div>
        </div>
</div>
@endforeach
@endsection
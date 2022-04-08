@extends('admin.layouts.base')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
            Tag #{{$tag->id}}
            </div>
            <div class="card-body">
            <h5 class="card-title">{{$tag->name}}</h5>
            <a href="{{route('admin.tags.index')}}" class="btn btn-primary">Torna a tutte le categorie</a>
            </div>
        </div>
    </div>
@endsection

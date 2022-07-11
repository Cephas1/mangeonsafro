@extends('layouts.app-back')

@section('content')

    <form action="{{ route('categorie-shop.store') }}" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="nom">
        </div>
        <div>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="file" name="image" placeholder="image">
        </div>
        <button class="btn btn-primary" type="submit">Cree</button>
    </form>

@endsection

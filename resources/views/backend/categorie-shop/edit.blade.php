@extends('layouts.app-back')

@section('content')

    <form action="{{ route('categorie-shop.update', ['categorie_shop' => $categorie]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <input type="text" name="name" value="{{ $categorie->name }}">
        </div>
        <button class="btn btn-primary" type="submit">Modifier</button>
    </form>

@endsection

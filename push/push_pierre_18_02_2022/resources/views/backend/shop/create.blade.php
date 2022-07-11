@extends('layouts.app-back')

@section('content')

    <form action="{{ route('shop.store') }}" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="nom">
        </div>
        <div>
            <select name="categorie_shop_id">
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <textarea name="content" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Cree</button>
    </form>

@endsection

<x-app-layout>
    <h2 style="font-size: 20px">liste de toute les catégories</h2>
    <a href="{{ route('categorie-shop.create') }}" class="btn btn-primary">Créé une catégorie</a>
    @foreach ($categories as $categorie)
        <div style="display: flex;justify-content: space-between;margin-bottom: 10px;padding: 15px;">
            <div>{{ $categorie->name }}</div>
            <div>{{ $category->description }}</div>
            <div>{{ $category->created_at }}</div>
            <div>
                <a href="{{ route('categorie-shop.edit', ['categorie_shop' => $categorie]) }}"
                    class="btn btn-success mr-2">modifier</a>
                <form style="display: inline-block"
                    action="{{ route('categorie-shop.destroy', ['categorie_shop' => $categorie]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">supprimer</button>
                </form>
            </div>
        </div>
    @endforeach
</x-app-layout>

{{-- @extends('layouts.app-back')

@section('content')

    <h2 style="font-size: 20px">liste de toute les catégories</h2>
    <a href="{{ route('categorie-shop.create') }}" class="btn btn-primary">Créé une catégorie</a>
    @foreach ($categories as $categorie)
        <div style="display: flex;justify-content: space-between;margin-bottom: 10px;padding: 15px;">
            <div>{{ $categorie->name }}</div>
            <div>
                <a href="{{ route('categorie-shop.edit', ['categorie_shop' => $categorie]) }}"
                    class="btn btn-success mr-2">modifier</a>
                <form style="display: inline-block"
                    action="{{ route('categorie-shop.destroy', ['categorie_shop' => $categorie]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">supprimer</button>
                </form>
            </div>
        </div>
    @endforeach

@endsection --}}

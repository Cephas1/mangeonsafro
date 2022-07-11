<x-app-layout>
    <h2>Liste des Shops</h2>
    <a class="btn btn-primary" href="{{ route('shop.create') }}">Cree unn nouveau shop</a>
    @foreach ($shops as $shop)
        <div style="display: flex;justify-content: space-between;margin-bottom: 10px;padding: 15px;">
            <div>
                {{ $shop->name }}
            </div>
            <div>
                <a href="{{ route('shop.edit', ['shop' => $shop]) }}" class="btn btn-success mr-2">modifier</a>
                <form style="display: inline-block" action="{{ route('shop.destroy', ['shop' => $shop]) }}"
                    method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">supprimer</button>
                </form>
            </div>
        </div>
    @endforeach
</x-app-layout>

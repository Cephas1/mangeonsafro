@extends('layouts.app-back')

@section('content')

    <div class="page-wrapper">
        <div class="form">
            <div class="form-header">
                <h5 class="form-title">MODIFICATION DE PRODUIT</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="form-body">
                <form method='post' action="{{ route('products.edit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nom du produit <span class="text-danger">*</span></label>
                        <div >
                            <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label> Boutiques <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>-- Choix de Boutiques --</option>
                            @foreach ($shops as $shop)
                                <option value ="{{ $shop->id }}" >{{ $shop->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label> Catégories <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>-- Choix de catégorie --</option>
                            @foreach ($productsCategories as $category)
                                <option value ="{{ $category->id }}" >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image <span class="text-danger">*</span></label>
                        <div class="">
                            <input class="form-control" type="file" value="{{ !empty($product->images)? $product->images : ""  }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description<span class="text-danger">*</span></label>
                        <textarea rows="4" name="description" class="form-control">{{ $product->description }}</textarea>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection

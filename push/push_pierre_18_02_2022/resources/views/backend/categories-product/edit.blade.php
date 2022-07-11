@extends('layouts.app-back')

@section('content')

    @if (session('success'))
    <h6 class="alert alert-success">{{ session('success') }}</h6>
    @elseif (session('error'))
    <h6 class="alert alert-danger">{{ session('error') }}</h6>
    @elseif (session('warning'))
    <h6 class="alert alert-danger">{{ session('warning') }}</h6>
    @endif

    <div class="form">
        <div class="form-header">
            <h5 class="form-title">MODIFICATION DE CATEGORIE</h5>
            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> --}}
        </div>
        <div class="form-body">
            <form method='post' action="{{ route('categories-product.edit.create', $category->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nom de la Catégorie <span class="text-danger">*</span></label>
                    <div >
                        <input class="form-control" type="text" name="name" value="{{ $category->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Image <span class="text-danger">*</span></label>
                    <div class="">
                        <input class="form-control" type="file" value="{{ @if(!empty($category->images)) $category->images[0] @else "" @endif }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Description<span class="text-danger">*</span></label>
                    <textarea rows="5" class="form-control">{{ $category->description }}</textarea>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>


@endsection

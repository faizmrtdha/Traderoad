@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product</h1>
</div>
<div class="col-lg-8">

    <form action="/dashboard/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label ">Product Name</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $product->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label ">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $product->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label class="form-label" for="thumbnail">Thumbnail</label>
        <img class="image-preview-thumbnail img-fluid col-sm-5 mb-3">
        <div class="input-group mb-3">
            <input type="file" name="thumbnail" class="form-control" multiple  id="thumbnail" onchange="previewImageT()">
            <label class="input-group-text" for="thumbnail">Upload</label>
        </div>
        <label class="form-label" for="img-product">Product Image</label>
        <img class="image-preview-product img-fluid col-sm-5 mb-3">
        <div class="input-group mb-3">
            <input type="file" name="img-product[]" class="form-control" multiple  id="img-product" onchange="previewImageP()">
            <label class="input-group-text" for="img-product">Upload</label>
        </div>
        <div class="mb-3">
            <label  for="desc">Description</label>
            @error('desc')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
            <input id="desc" type="hidden" name="desc" value="{{ old('desc', $product->desc) }}">
            <trix-editor input="desc"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>

</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/product/checkSlug?title=' + title.value)
        .then(Response => Response.json())
        .then(data => slug.value = data.slug)
    });

    function previewImageT(){
        const imgThumbnail = document.querySelector('#thumbnail');
        const imgPreviewThumbnail = document.querySelector('.image-preview-thumbnail');
        console.log(imgPreviewThumbnail);

        imgPreviewThumbnail.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(imgThumbnail.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreviewThumbnail.src = oFREvent.target.result;
        }
    }

    function previewImageP(){
        const imgProduct = document.querySelector('#img-product');
        const imgPreviewProduct = document.querySelector('.image-preview-product');

        imgPreviewProduct.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(imgProduct.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreviewProduct.src = oFREvent.target.result;
        }
    }
</script>
@endsection
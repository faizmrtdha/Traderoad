@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Product</h1>
</div>
<div class="col-lg-8">

    <form action="/dashboard/product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label ">Product Name</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label ">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label class="d-block" for="thumbnail">Thumbnail</label>
        <div class="input-group mb-3">
            <input type="file" name="thumbnail" class="d-block form-control" multiple  id="thumbnail">
            <label class="input-group-text" for="thumbnail">Upload</label>
        </div>
        <label class="d-block" for="img-product">Product Image</label>
        <div class="input-group mb-3">
            <input type="file" name="img-product[]" class="d-block form-control" multiple  id="img-product">
            <label class="input-group-text" for="img-product">Upload</label>
        </div>
        <div class="mb-3">
            <label  for="desc">Description</label>
            @error('desc')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
            <input id="desc" type="hidden" name="desc" value="{{ old('desc') }}">
            <trix-editor input="desc"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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
</script>
@endsection
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
  <strong>{{ session('success') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

{{-- @dd($product) --}}
<div class="table-responsive">
  <a href="/dashboard/product/create" class="btn btn-primary mb-3">Create new Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name Product</th>
          <th scope="col">Excerpt</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($product as $p)
              
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->slug }}</td>
            <td>
                <a href="/dashboard/product/{{ $p->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/product/{{ $p->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure delete?')"><span data-feather="x-circle"></span></button>
                </form>
                {{-- <a href="" class="badge bg-danger"></a> --}}
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection
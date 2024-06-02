@extends('layouts.app')
  
@section('title', 'Edit Portofolio')
  
@section('contents')
    <h1 class="mb-0">Edit Portofolio</h1>
    <hr />
    <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="nama_porto" class="form-control" placeholder="Title" value="{{ $portfolio->nama_porto }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="jenis" class="form-control" placeholder="Price" value="{{ $portfolio->jenis }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="link_porto" class="form-control" placeholder="Product Code" value="{{ $portfolio->link_porto }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="gambar" placeholder="Descriptoin" >{{ $portfolio->gambar }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
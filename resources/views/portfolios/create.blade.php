@extends('layouts.app')
  
@section('title', 'Create Portfolio')
  
@section('contents')
    <h1 class="mb-0">Add Portfolio</h1>
    <hr />
    <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_porto" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="jenis" class="form-control" placeholder="jenis">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="link_porto" class="form-control" placeholder="Link Portofolio">
            </div>
            <div class="col">
                <input type="text" name="gambar" id="gambar" class="form-control">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
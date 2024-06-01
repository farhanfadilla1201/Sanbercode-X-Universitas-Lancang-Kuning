@extends('layouts.master')

@section('title')
Halaman Tambah cast

@endsection

@section('content')

<form method="post" action="/cast">
    {{--validasion--}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{--from input--}}
    @csrf
    <div class="form-group">
      <label>cast name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>umur</label>
        <input type="number" class="form-control" name="umur">
      </div>
    <div class="form-group">
      <label>Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
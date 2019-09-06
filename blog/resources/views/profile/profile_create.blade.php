@extends('layout.main')

@section('content')
<div class="container">
    <form action="{{route('profile_create')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="address">Endereço</label>
            <input type="text"  id="address" name="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="address" name="email" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
@endsection

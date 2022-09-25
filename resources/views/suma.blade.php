@extends('app')
@section('title', "Suma")
@section('content')
<form action="{{route('suma')}}" method="POST">
    @csrf
        @if (session('success'))
            <h6 class="alert alert-success">{{session('success')}}</h6>
        @endif
        @error('numero1')
            <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror
        @error('numero2')
            <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror

    <div class="form-outline">
        <label class="form-label" for="typeNumber">Numero 1</label>
        <input type="number" name="numero1" class="form-control" />
    
    </div>
    <div class="form-outline">
        <label class="form-label" for="typeNumber">Numero 2</label>
        <input type="number" name="numero2" class="form-control" />
        
    </div>

    <button type="submit" class="btn btn-warning">Suma</button>
    @endsection
</form>
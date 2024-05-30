<x-layout>
    <div class="container">
        <h1>Crea la categoria</h1>
        @if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif
<form method="POST" action="{{route('categories.store')}}">
    @csrf
<div class="mb-3">
    <label class="form-label">Titolo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
    @error('title')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
    <div class="form-group">
    <label class="form-label">Descrizione</label>
  <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
  @error('description')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
</div>
<br>
<button type="submit" class="btn btn-primary">Crea</button>
</form>
</div>
</x-layout>
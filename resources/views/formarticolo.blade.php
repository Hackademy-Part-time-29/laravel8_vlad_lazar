<x-layout>
    <div class="container">
        <h1>Crea il tuo articolo</h1>
        @if(session()->has('success'))
        <div class="alert alert-success" role="success">
            {{session('success')}}
        </div>
        @endif
<form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label class="form-label">Titolo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
    @error('title')
    {{$message}}
    @enderror
  </div>
  <div class="form-label">
  <label>Articolo</label>
  <textarea class="form-control @error('body') is-invalid @enderror" rows="3" name="body">{{old('body')}}</textarea>
  @error('body')
    {{$message}}
    @enderror
</div>
<select class="form-select  @error('author_id') is-invalid @enderror" name="author_id">
  <option selected>Scegli l'autore</option>
  @foreach($authors as $author)
  <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
  @endforeach
</select>
@error('author_id')
    <span class="small text-danger">{{$message}}</span>
    @enderror
<div class="mb-3">
  <label class="form-label">Scegli l'immagine</label>
  <input class="form-control" type="file" name="cover">
  @error('cover')
    <span class="small text-danger">{{$message}}</span>
    @enderror
</div>
  <button type="submit" class="btn btn-primary">Crea</button>
</form>
    </div>
</x-layout>
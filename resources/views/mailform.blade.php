<x-layout>
    <div class="container">
        <h1>Contattaci in caso di necessità!</h1>
    @if(session()->has('success'))
    <div class="alert alert-success" role="success">
        {{session('success')}}
    </div>
    @endif
        <form method="POST" action="{{route('send.mail')}}">
            @csrf
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
    @error('email')
    {{$message}}
    @enderror 
  </div>
  <div class="mb-3">
    <label class="form-label">Nome e cognome</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
    @error('name')
    {{$message}}
    @enderror 
  </div>
  <div class="form-label">
  <label class="form-label">Descrivici il problema</label>
  <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
  @error('description')
    {{$message}}
    @enderror 
</div>
<br>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>
    </div>
</x-layout>
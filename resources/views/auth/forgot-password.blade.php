<x-layout>
    <div class="container">
        <h1>Recupera la password</h1>
        <form method="POST" action="{{route('password.email')}}">
            @csrf
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
    @error('email')
    {{$message}}
    @enderror 
  </div>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>
    </div>
</x-layout>
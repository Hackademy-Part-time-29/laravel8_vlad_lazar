<x-layout>
    <div class="container">
    <h1>Fai il login</h1>
        <form method="POST" action="/login">
            @csrf
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
    @error('email')
    {{$message}}
    @enderror 
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
    @error('password')
    {{$message}}
    @enderror 
  </div>
  <div class="form-check">
    <input type="checkbox" name="remember" class="form-check-input">
    <label class="form-check-label">Ricordati di me</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="{{route('password.request')}}">Recupera la tua password</a>
</form>
    </div>
</x-layout>
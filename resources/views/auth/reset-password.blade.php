<x-layout>
    <div class="container">
        <h1>Reimposta la password</h1>
        @if(session('status'))
    <div class="alert alert-success" role="success">
        {{session('status')}}
    </div>
    @endif
        <form method="POST" action="/reset-password">
            @csrf
            <input type="hidden" name="token" value="{{request()->route('token')}}">
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
    @error('email')
    {{$message}}
    @enderror 
  </div>
  <div class="mb-3">
    <label class="form-label">Nome e cognome</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
    @error('name')
    {{$message}}
    @enderror 
  </div>
  <div class="mb-3">
    <label class="form-label">Nuova password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
    @error('password')
    {{$message}}
    @enderror 
  </div>
  <div class="mb-3">
    <label class="form-label">Conferma la password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Conferma</button>
</form>
    </div>
</x-layout>
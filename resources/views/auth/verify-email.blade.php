<x-layout>
    <h1>Invia mail di conferma</h1>
    @if(session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        Ti abbiamo mandato una mail di verifica!
    </div>
    @endif
    <form method="POST" action="/email/verification-notification">
        @csrf
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Invia mail</button>
        </div>
    </form>
</x-layout>
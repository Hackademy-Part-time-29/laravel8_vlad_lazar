<x-layout>
    <div class="container">
        <h1>Articoli</h1>
            <div class="row">
                @foreach($articles as $article)
                <div class="col-3">
                    <x-card :article="$article"/>
                </div>
                @endforeach
            </div>
        </div>
</x-layout>
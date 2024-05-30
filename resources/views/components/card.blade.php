<div>
<div class="card" style="width: 18rem;">
@if($article->cover)
  <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    @empty($article->author)
    <p>{{'Autore non presente'}}</p>
    @else
    <a href="{{route('article.byAuthor',$article->author)}}">{{$article->author->name}} {{$article->author->name}}</a>
    @endempty
    <p class="card-text">{{Str::limit($article->body)}}</p>
    <a href="{{route('article', $article->id)}}" class="btn btn-primary">Leggi l'articolo</a>
  </div>
</div>
</div>
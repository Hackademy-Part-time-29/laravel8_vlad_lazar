<x-layout>
    <div class="container">
    <h1>Lista delle categorie</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Categoria</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($categories as $category)
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->title}}</td>
      <td>
        <a href="{{route('categories.show',$category)}}" class="btn btn-primary">Vedi</a>
        <a href="{{route('categories.edit',$category)}}" class="btn btn-primary">Modifica</a>
        <form method="POST" action="{{route('categories.destroy',$category)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
      </td>
      @endforeach
  </tbody>
</table>
    </div>
</x-layout>
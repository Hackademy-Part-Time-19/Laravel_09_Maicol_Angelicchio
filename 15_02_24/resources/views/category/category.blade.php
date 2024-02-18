<x-main>
    <h1>Categorie</h1>
    <a class="btn btn-primary" href="{{ route('category.create')}}" role="button">Inserisci nuova gategoria</a>
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item">
                {{$category['name']}}
                <div>
                    <button type="button" class="btn btn-warning">
                        <a href="{{ route('category.edit', ['category'=>$category->id])}}">Modified</a>
                    </button>
                    <form action=" {{ route('category.destroy', ['category'=>$category->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-main>
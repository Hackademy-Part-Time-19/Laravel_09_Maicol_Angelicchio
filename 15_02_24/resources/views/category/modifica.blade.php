<x-main>
    @if(session()->has('modified'))
        <h2 class="alert alert-success">{{session('modified')}}</h2>
    @endif
<form method="POST" action="{{ route('category.update', compact('category'))}}" class="mt-5 mx-auto col-lg-6">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nuovo nome categoria</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <button type="submit" class="btn btn-success">Modifica</button>
</form>
</x-main>
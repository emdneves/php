@extends('layouts.main')

@section('title')
    <title>Adicionar Users</title>
@endsection
@section('content')
    <div class="container">
        <h1>Adicionar Tarefa</h1>




       <form method="POST" action="{{ route('store_task') }}">
    @csrf

    <div class="form-group">
        <label for="category_id">Categoria</label>
        <select id="category_id" name="category_id" class="form-control">
            <option value="">Selecione uma categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="article">Artigo</label>
        <input type="text" id="article" name="article" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="cost">Custo</label>
        <input type="number" id="cost" name="cost" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="measure">Medida</label>
        <input type="text" id="measure" name="measure" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" id="type" name="type" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar Tarefa</button>
</form>

    </div>
    <a href="{{ route('home') }}">Voltar</a>
@endsection

@extends('layouts.index.main')
@section('title', 'Criar Welcome')

@section('content')
    <div class="row">
        <div class="col">
            <div class="container">
                <h5>Crie seu Welcome</h5>
                <form action="{{ route('welcome.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Titulo">
                        <label for="title">Titulo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="phrase" id="phrase" placeholder="Frase">
                        <label for="phrase">Frase</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" name="image" id="image" placeholder="Imagem" style="padding: 40px">
                        <label for="image">Imagem</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="url" class="form-control" name="url" id="url" placeholder="URL">
                        <label for="url">URL</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="period" aria-label="Selecione um Periodo" >
                            <option selected>---</option>
                            <option value="0">Manha 1   - 07:00 às 09:00</option>
                            <option value="1">Manha 2   - 09:00 às 12:00</option>
                            <option value="2">Manha 3   - 12:00 às 13:00</option>
                            <option value="3">Tarde 1   - 13:00 às 14:00</option>
                            <option value="4">Tarde 2   - 14:00 às 16:00</option>
                            <option value="5">Tarde 3   - 16:00 às 17:00</option>
                            <option value="6">Noite 1   - 17:00 às 18:00</option>
                            <option value="7">Noite 2   - 18:00 às 22:00</option>
                            <option value="8">Madrugada - 22:00 às 07:00</option>
                        </select>
                        <label for="phrase">Periodo de exibição</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="category" id="category" placeholder="Categoria">
                        <label for="category">Categoria</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Palavras chave">
                        <label for="keyword">Palavras chave (separação por virgula)</label>
                    </div>
    
                    <button type="submit" class="btn btn-success">Criar Welcome</button>
                </form>
            </div>
        </div>
    </div>
@endsection
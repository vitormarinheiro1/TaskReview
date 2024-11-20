<form action="{{ $action }}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label class="form-label" for="titulo">Titulo:</label>
        <input class="form-control" type="text" id="titulo" name="titulo" @isset($titulo)value="{{ $titulo }}"@endisset>

        <label class="form-label" for="descricao">Descrição:</label>
        <input class="form-control" type="text" id="descricao" name="descricao" @isset($descricao)value="{{ $descricao }}"@endisset>

        <label class="form-label" for="status">Status:</label>
        <select class="form-select" name="status" aria-label="Default select example">
            <option selected disabled>Escolha uma opção</option>
            <option value="Pendente" @isset($status) @if($status == 'Pendente') selected @endif @endisset>Pendente</option>
            <option value="Em Andamento" @isset($status) @if($status == 'Em Andamento') selected @endif @endisset>Em Andamento</option>
            <option value="Concluído" @isset($status) @if($status == 'Concluído') selected @endif @endisset>Concluído</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar dados</button>

</form>
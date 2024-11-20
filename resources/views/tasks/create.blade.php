<x-layout title="Adicionar Nova Tarefa">
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div class="mb-3">

            <label class="form-label" for="titulo">Titulo:</label>
            <input class="form-control" type="text" id="titulo" name="titulo">

            <label class="form-label" for="descricao">Descrição:</label>
            <input class="form-control" type="text" id="descricao" name="descricao">

            <label class="form-label" for="status">Status:</label>
            <select class="form-select" name="status" aria-label="Default select example">
                <option selected disabled>Escolha uma opção</option>
                <option value="Pendente">Pendente</option>
                <option value="Em Andamento">Em Andamento</option>
                <option value="Concluído">Concluído</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enviar dados</button>

    </form>
</x-layout>
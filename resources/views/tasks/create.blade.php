<x-layout title="Adicionar Nova Tarefa">
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        @csrf
        <div>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo">

            <label for="status">Status:</label>
            <input type="text" id="status" name="status">

            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao">
        </div>

        <button type="submit" class="btn btn-primary">Enviar dados</button>
    </form>
</x-layout>
<x-layout title="Tarefas">
    <a href="{{ route('tasks.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <table class="table border">
        <thead>
            <tr>
                <th scope="col">Número Tarefa</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->titulo }}</td>
                    <td>{{ $task->descricao }}</td>
                    <td>{{ $task->status }}</td>
                    <td>
                        <span class="d-flex">
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm">
                                Editar
                            </a>
                        <form action="{{ route('tasks.destroy', $task->id)}}" method="post" class="ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
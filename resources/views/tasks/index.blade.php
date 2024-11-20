<x-layout title="Tarefas">
    <a href="{{ route('tasks.create') }}" class="btn btn-dark mb-2">Adicionar</a>

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
                        <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
<x-layout title="TaskReview">
    <a href="{{ route('tasks.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul>
        @foreach ($tasks as $task)
            <p>{{ $task->titulo }}</p>
            <p>{{ $task->descricao }}</p>
            <p>{{ $task->status }}</p>
        @endforeach
    </ul>
</x-layout>
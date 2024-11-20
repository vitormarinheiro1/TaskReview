<x-layout title="Editar Tarefa '{{ $task->titulo }}'">
    <x-tasks.form :action="route('tasks.update', $task->id)" :titulo="$task->titulo" :descricao="$task->descricao" :status="$task->status" />
</x-layout>
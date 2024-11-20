<x-layout title="Adicionar Nova Tarefa">
    <x-tasks.form :action="route('tasks.store')" :titulo="old('titulo')" :descricao="old('descricao')" :status="old('status')" :update="false" />
</x-layout>
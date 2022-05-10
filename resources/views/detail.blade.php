@extends('layouts/layout')

@section('title', 'Detail for tasks')

@section('main')
	<div class="detail-for-tasks">
        <div>Titre : {{ $task->title }}</div>
        <div>Description : {{ $task->description }}</div>
        <div>Créé le : {{ $task->created_at->format('d F Y') }}</div>
	</div>
<div><button><a href="/task/{{ $task->id }}/delete">Supprimer la tâche</a></button></div>

@endsection
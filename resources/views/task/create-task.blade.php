@extends('layouts.layout')

@section('title', 'Create Task')

@section('content')
{{-- Conteudo --}}
<div class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="margin-top: 190px">
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="validationCustom01" class="form-label">Titulo da Tarefa*</label>
            <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="(Obrigatório)" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição da Atividade*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="description-task" placeholder="(Obrigatório)" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Create Task</button>

      </form>
</div>    
@endsection
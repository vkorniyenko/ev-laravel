<!-- resources/views/tasks.blade.php -->
@extends('layouts.app') <!--Наследуем layouts/app.blade.php -->
@section('content')
<!-- Bootstrap шаблон... -->
@if (count($tasks) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Имя     <span style='padding-left:20%;'>Цена</span>     
    </div>
    <div class="panel-body">
        <table class="table table-striped task-table">
	    <!-- Заголовок таблицы -->
	    <!-- Тело таблицы -->
	    <tbody>
		@foreach ($tasks as $task)
		<tr>
		    <!-- Имя задачи -->
		    <td class="table-text" id="product" data-title="{{$task->description}}">
			<div>{{ $task->name }}</div>
		    </td>
		    <td class="table-text">
			    <div>{{ $task->price }}</div>
		    </td> 
		    <td>
			<form action="{{ url('task/'.$task->id) }}" method="POST">
			    {{ csrf_field() }}
			    {{ method_field('DELETE') }}

			    <button type="submit" class="btn btn-danger">
				<i class="fa fa-trash"></i> Удалить
			    </button>
			</form>
		    </td>
		</tr>
		@endforeach
	    </tbody>
        </table>
    </div>
</div>
@endif
<div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой задачи -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
	{{ csrf_field() }}
	<!-- Имя задачи -->
	<div class="form-group">
	    <label for="task" class="col-sm-3 control-label">Продукт</label>
	    <div class="col-sm-5">
		<input type="text" name="name" id="task-name" class="form-control">
	    </div>
	</div>
	<div class="form-group">
	    <label for="task" class="col-sm-3 control-label" id="label">Цена</label>
	    <div class="col-sm-5">
		<input type="text" name="price" id="task-price" class="form-control">
	    </div>
	</div>
	<div class="form-group">
	    <label for="task" class="col-sm-3 control-label" id="label">Описание</label>
	    <div class="col-sm-5">
		<input type="text" name="description" id="task-text" class="form-control">
	    </div>
	</div>
	<!-- Кнопка добавления задачи -->
	<div class="form-group">
	    <div class="col-sm-offset-3 col-sm-6">
		<button type="submit" class="btn btn-default">
		    <i class="fa fa-plus"></i> Добавить продукт
		</button>
	    </div>
	</div>
    </form>
</div>
@endsection
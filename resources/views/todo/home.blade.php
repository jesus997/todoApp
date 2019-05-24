@extends('todo.layout.app')

@section('body')
<section class="todoapp">
    @include('todo.components.header')
    <section class="main">
        <input id="toggle-all" class="toggle-all" type="checkbox">
        <label for="toggle-all">Marcar todos como completos</label>
        <ul class="todo-list">
            @foreach ($items as $item)
                <li class="{{ $item->status ? "active" : "" }}">
                    <div class="view">
                        <a href="/listo/{{$item->name}}">
                            <input class="toggle" type="checkbox" checked>
                            <label>{{$item->name}} - {{ $item->status ? "Activo" : "Inactivo" }}</label>
                            <a class="destroy" href="/borrar/{{$item->id}}"></a>
                        </a>
                    </div>
                    <input class="edit" value="">
                </li>
            @endforeach
        </ul>
    </section>
    <footer class="footer">
        <span class="todo-count"><strong>0</strong> items restantes</span>
        <ul class="filters">
            <li>
                <a class="selected" href="#/">Todos</a>
            </li>
            <li>
                <a href="#/active">Activos</a>
            </li>
            <li>
                <a href="#/completed">Completados</a>
            </li>
        </ul>
        <button class="clear-completed">Limpiar todos los completados</button>
    </footer>
</section>
@endsection
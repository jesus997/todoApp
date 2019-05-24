<header class="header">
    <h1>todos</h1>
    <form action="/create" method="post">
        @csrf
        <input name="task" class="new-todo" placeholder="¿Que que hay que hacer?" autofocus>
    </form>
</header>
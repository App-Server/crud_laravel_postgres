<h3>Editar Blog</h3>

<form method="POST" action="{{ route('blogs.update', $blogs->id) }}">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @csrf
    @method('PUT')

    <label for="text">Título do Blog</label>
    <br>
    <input type="text" name="titulo-do-blog" value="{{ $blogs['titulo-do-blog'] }}">
    <br>
    <br>

    <label for="text">Conteúdo do Blog</label>
    <br>
    <textarea id="story" name="conteudo-do-blog" rows="10" cols="33">
        {{ $blogs['conteudo-do-blog'] }}
    </textarea>

    <br>
    <br>

    <button type="submit">Atualizar Cadastro</button>
</form>


<a href="{{ route('blogs.show') }}">Ver Blogs</a>


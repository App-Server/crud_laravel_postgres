<h3>Criar Blog</h3>

<form method="POST" action="{{ route('blogs.store') }}">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @csrf
    
    <label for="text">titulo-do-blog</label>
    <br>
    <input type="text" name="titulo-do-blog">
    <br>
    <br>
    <br>


    <label for="text">titulo-do-blog</label>
    <br>
    <textarea id="story" name="conteudo-do-blog" rows="10" cols="33">
    
    </textarea>

    <br>
    <br>

    <button type="submit">Cadastrar blog</button>

</form>

<a href="{{ route('blogs.show') }}">Ver Blog</a>


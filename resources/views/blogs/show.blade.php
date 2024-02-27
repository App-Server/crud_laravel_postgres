<a href="{{ route('blogs.create')}}">Criar Blog</a>

<h3>Lista de Blogs</h3>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Criado</td>
        <td>Atualizado</td>
        <td>Título</td>
        <td>Blog</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    @foreach ($Blogs as $blog)
    <tr>
        <td>{{ $blog->id }}</td>
        <td>{{ $blog->created_at }}</td>
        <td>{{ $blog->updated_at }}</td>
        <td>{{ $blog['titulo-do-blog'] }}</td>
        <td>{{ $blog['conteudo-do-blog'] }}</td>
        <td><a href="{{ route('blogs.edit', $blog->id) }}"><button>Edit</button></a></td>
        <td>
            <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

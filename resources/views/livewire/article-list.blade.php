<div>
    @if (session('articleDeleted'))
        <div class="alert alert-success">
            {{ session('articleDeleted') }}
        </div>
    @endif
    <table class="table table-striped shadow">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Creato il</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)

            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->created_at->format('d/m/Y')}}</td>
                <td>
                    <a href="{{route('article.edit', $article)}}" class="btn btn-warning">Modifica</a>
                    <a wire:click="destroy({{$article}})" class="btn btn-danger">Elimina</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
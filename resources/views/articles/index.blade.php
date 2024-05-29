<x-layout>
    <div class="container mt-5">
        <div class="text-center ">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Nome autore</th>
                    <th scope="col">Cognome autore</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Data</th>
                    <th scope="col">Pulsanti</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->author_name }}</td>
                        <td>{{ $article->author_surname }}</td>
                        <td>{{ $article->category }}</td>
                        <td>{{ Str::limit($article->text, 20) }}</td>
                        <td><a href="{{ route('articles.show', $article->id) }}"
                                class="btn btn-sm btn-primary">Visualizza</a>
                            <a href="{{ route('articles.edit', $article->id) }}"
                                class="btn btn-sm btn-warning">Modifica</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                               Cancella
                            </button>


                        </td>

                    </tr>
                    <!-- Modal -->
                    <div class="modal fade text-black" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cancella Articolo</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Stai per cancellare il seguente articolo: <strong>{{$article->title}}</strong></p>
                                    <p>Sei sicuro di voler procedere?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annulla</button>
                                        <form class="d-inline" action="{{ route('articles.destroy', $article->id) }}"
                                          method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger" type="submit">Cancella</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>Nessun libro presente</h2>
                @endforelse

            </tbody>
        </table>
        <div class="container text-white-50">
            <div class="row justify-content-center">
                <div class="col-4 testo-bianco">{{ $articles->links() }}</div>
            </div>
        </div>
    </div>
</x-layout>

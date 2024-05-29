<x-layout>

    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value="{{ old('title') }}" name="title"
                            type="text">
                        <label for="title">Titolo Articolo</label>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="author_name" value="{{ old('author_name') }}" name="author_name"
                            type="text">
                        <label for="author_name">Nome Autore</label>
                        @error('author_name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="author_surname" value="{{ old('author_surname') }}"
                            name="author_surname" type="text">
                        <label for="author_surname">Cognome Autore</label>
                        @error('author_surname')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="category" value="{{ old('category') }}" name="category"
                            type="text">
                        <label for="category">Categoria</label>
                        @error('category')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <div><textarea id="text" name="text" rows="4" style="width: 100%" value="{{old('text')}}" class="form-control" placeholder="Testo articolo" ></textarea></div>
                        @error('text')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="image" name="image" type="file">
                    </div>
                    @error('image')
                        {{ $message }}
                    @enderror
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

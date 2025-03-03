<x-layout>
    <div class="container">
        Contattami
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class=" container form-control" action="{{ route('send') }}" method="POST">
            @csrf
            <div>
                <label for="">Nome</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div>
                <label for="">Messaggio</label>
                <textarea name="message" id="" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
            </div>
            <div class="mt-3">
                <button class="btn btn-success" type="submit">Invia</button>
            </div>
        </form>
    </div>
</x-layout>

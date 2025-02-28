<x-layout>
    <ul>
        @foreach ($articles as $article)
            <x-card :article="$article" />
            {{-- <li><a href="/dettagli/{{ $article['slug'] }}">{{ $article['title'] }}</a></li> --}}
        @endforeach
    </ul>

</x-layout>

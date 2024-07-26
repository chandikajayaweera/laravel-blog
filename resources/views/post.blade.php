<x-nav>
    <x-slot:heading><h2 class="font-bold text-lg">{{ $post['title'] }}</h2></x-slot:heading>
    <p>
        Author: <a href="/author/{{ $author['id'] }}" class="text-blue-500 hover:underline">
            <strong>{{ $author['name'] }}</strong><br><br>
        </a>
        {{ $post['content'] }}
    </p>
</x-nav>

<x-nav>
    <x-slot:heading><h2 class="font-bold text-lg">{{ $post['title'] }}</h2></x-slot:heading>
    <p>
        {{ $post['content'] }}
    </p>
</x-nav>

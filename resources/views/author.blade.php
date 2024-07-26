<x-nav>
    <x-slot:heading><h1 class="font-bold text-lg">Author Page</h1></x-slot:heading>
    Name: {{ $author['name'] }}<br/>
    Email: {{ $author['email'] }}<br/>
    Joined at: {{ $author['created_at'] }}
</x-nav>

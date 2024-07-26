<x-nav>
    <x-slot:heading><h1>Home Page</h1></x-slot:heading>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="/post/{{ $post['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $post['title'] }}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-nav>

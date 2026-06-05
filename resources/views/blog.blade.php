<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)

        <article class="mb-5 border-b pb-5">

            <h2 class="text-xl font-bold">
                {{ $post['title'] }}
            </h2>

            <p>
                Penulis : {{ $post['author'] }}
            </p>

            <p>
                {{ $post['body'] }}
            </p>

        </article>

    @endforeach

</x-layout>
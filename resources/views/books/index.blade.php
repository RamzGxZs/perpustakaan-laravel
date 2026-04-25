<x-layouts.main.app title="Ramz Library | All Books">

    <section class="py-12 lg:py-16">
        <div class="space-y-3 mb-10 text-left">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">All Collections</h2>
            <p class="text-gray-500 text-lg">Explore our full library of books and literature.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:gap-8">
            @foreach ($books as $book)
                <x-ui.card
                    title="{{ $book->title }}"
                    author="{{ $book->author }}"
                    book_image="{{ $book->book_image }}"
										descriptions="{{ $book->descriptions }}"
                />
            @endforeach
        </div>

        @if($books->isEmpty())
            <div class="text-center py-20">
                <p class="text-gray-500 text-xl">No books found in our collection yet.</p>
            </div>
        @endif
    </section>

</x-layouts.main.app>

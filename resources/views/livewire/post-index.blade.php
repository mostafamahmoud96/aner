<div x-data
    class="post-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">

    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
        <div class="flex-none mx-2 md:mx-0">
            <a href="#">
                <img src="{{ asset('man.png') }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="w-full flex flex-col justify-between mx-2 md:mx-4">
            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                <a href="{{ route('post.show', $post) }}" class="post-link hover:underline">{{ $post->body }}</a>
            </h4>
        </div>
    </div>
</div>

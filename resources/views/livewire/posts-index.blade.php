<div>
    <div class="posts-container space-y-6 my-8">
         @forelse ($posts as $post)
            <livewire:post-index
                :key="$post->id"
                :post="$post"
                :votesCount="$post->votes_count"
            />
        @empty
            <div class="mx-auto w-70 mt-12">
                <img src="" alt="No posts" class="mx-auto mix-blend-luminosity">
                <div class="text-gray-400 text-center font-bold mt-6">No posts were found...</div>
            </div>
        @endforelse
    </div>

</div>

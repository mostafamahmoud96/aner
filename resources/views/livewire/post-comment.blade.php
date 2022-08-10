<div class="flex flex-col md:flex-row flex-1 px-4 py-6">
    <div class="flex-none">
        <a href="#">
            <img src="{{ asset('man.png') }}" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>

    </div>
    <div class="w-full md:mx-4">
        <div class="text-gray-600">
            <div class="mt-4 md:mt-0">
                {!! nl2br(e($comment->body)) !!}
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                {{-- @if ($comment->user->id === $comment->idea->user->id) --}}
                @if ($comment->user->id === $postUserId)
                    <div class="rounded-full border bg-gray-100 px-3 py-1">OP</div>
                    <div>&bull;</div>
                @endif
                <div>{{ $comment->created_at->diffForHumans() }}</div>
            </div>
            @auth
                <div class="text-gray-900 flex items-center space-x-2" x-data="{ isOpen: false }">
                    <div class="relative">
                            <li>
                                <a href="#"
                                    @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setEditComment', {{ $comment->id }})
                                    "
                                    class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                    Edit Comment
                                </a>
                            </li>

                        @can('delete', $comment)
                            <li>
                                <a href="#"
                                    @click.prevent="
                                        isOpen = false
                                        Livewire.emit('setDeleteComment', {{ $comment->id }})
                                    "
                                    class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                    Delete Comment
                                </a>
                            </li>
                        @endcan
                        </ul>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>
</div> <!-- end comment-container -->

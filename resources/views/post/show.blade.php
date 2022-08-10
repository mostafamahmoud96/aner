<x-app-layout>
    <x-slot name="title">
        Post Title
    </x-slot>
    <div>
        <a href="" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All ideas (or back to chosen category with filters)</span>
        </a>
    </div>

    <livewire:post-show :post="$post" />

    <livewire:post-comments :post="$post" />


</x-app-layout>

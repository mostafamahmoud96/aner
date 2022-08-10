<div>
    @auth
        <form wire:submit.prevent="createPost" action="#" method="POST" class="space-y-4 px-4 py-6">
            <div>
                <textarea wire:model.defer="body" name="idea" id="idea" cols="30" rows="4"
                    class="w-full bg-gray-100 rounded-xl border-none placeholder-gray-900 text-sm px-4 py-2"
                    placeholder="Describe your idea" required></textarea>
                @error('body')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between space-x-3">
                <button type="submit"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-gray font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                    <span class="ml-1">Submit</span>
                </button>
            </div>
            <div>
                @if (session('success-message'))
                    <div x-data="{ isVisible: true }" x-init="setTimeout(()=>{
                        isVisible= false
                    },5000)" x-show.transition.duration.1000ms="isVisible" class="text-green mt-4">
                        {{ session('success-message') }}
                    </div>
                @endif
            </div>
        </form>
    @else
        <div class="my-6 text-center">
            <a wire:click.prevent="redirectToLogin" href="{{ route('login') }}"
                class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200  font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                Login
            </a>
            <a wire:click.prevent="redirectToRegister" href="{{ route('register') }}"
                class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-4">
                Sign Up
            </a>
        </div>
    @endauth
</div>

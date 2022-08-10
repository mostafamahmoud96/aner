<x-app-layout>
    <div>
        <a href="" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">
                All Posts
            </span>
        </a>
    </div>
    <div class="button-container flex items-center justify-between mt-6">
        <button type="button"
            class="flex items-center w-32 justify-center h-11 text-xs bg-blue font-semibold rounded-xl
                       border border-blue hover:border-blue  transition duration-150  ease-in px-6 py-3 ">
            <span class="ml-1"> Reply </span>
        </button>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">
                    12
                </div>
                <div class="text-gray-400 text-sm leading-none">
                    comments
                </div>

            </div>


        </div>
    </div>

    <div class="comments-container space-y-6 ml-24 my-8">
        <div class="comment-container bg-white ease-in rounded-xl flex hover:shadow-md">
            <div class="border-r border-gray-100 px-5 py-8 ">
                <div class="text-center">
                    <div class="font-semibold text-2xl">Comments</div>
                    <div class="text-gray-500">12</div>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="{{ asset('man.png') }}" alt="" class="w-14 h-14 rounded-full">
                    </a>
                </div>
                <div class="w-full mx-4 ">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline"> Random Title</a>

                    </h4> --}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi reprehenderit
                        accusantium voluptatem qui quisquam ipsum,
                        ex aspernatur nam, ipsam illo doloribus expedita rerum mollitia earum obcaecati suscipit
                        nihil quo. Aperiam.
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-sm text-gray-400 font-semibold space-x-2">
                                <div class="font-bold text-blue-900">Mostafa </div>
                                <div>&bull;</div>
                                <div class="text-gray-900"> 10 hours ago</div>
                                <div>&bull;</div>
                            </div>

                            <div class="flex items-center space-x-2">
                                <div
                                    class="bg-gray-100 text-xss font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                    Open
                                </div>
                                <button
                                    class="relative bg-gray-200 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">

                                    <svg fill="currentColor" width="24" height="6">
                                        <path
                                            d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                            style="color: rgba(163, 163, 163, .5)">
                                    </svg>
                                    <ul class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                                        <li>
                                            <a href=""
                                                class="hover:bg-gray-700 transition duration-150 block ease-in px-5 py-3">
                                                Delete
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""
                                                class="hover:bg-gray-700 transition duration-150 block ease-in px-5 py-3">
                                                edit
                                            </a>
                                        </li>


                                    </ul>

                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>

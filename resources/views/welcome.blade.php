<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <section>
                        <h1 class="text-4xl text-blue-800">Short your link</h1>
                        <form method="POST" action="{{route("short.url")}}">
                            @csrf
                            <input class="border border-gray-300 rounded-lg"                       type="url" name="original_url" id="">
                            <button class="m-2px-6py-2bg-green-500 hover:bg-green-700 rounded-lg
                              type="submit">Shorten</button>
                        </form>
                    </section>
        </div>
    </div>
</div>
</div>
    </x-guest-layout>

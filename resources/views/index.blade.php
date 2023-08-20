<x-layout>
    <main class="flex flex-col justify-center items-center">
        <form class="px-16 py-16" method="POST" action="/check-in">
            @csrf
            {{--{{ $time }}--}}
            <label for="check_in_time"></label>
        <input name="check_in_time" type="datetime-local" id="check_in_time" value="{{ now() }}"/>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Check In</button>
        </form>
    </main>
</x-layout>

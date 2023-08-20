<x-layout>
    <main class="flex justify-center items-center">
        <form class="px-16 py-16" method="POST" action="/check-in">
            {{ $time }}
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Check In</button>
        </form>
    </main>
</x-layout>

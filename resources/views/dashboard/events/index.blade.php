@extends('layouts.dashboard.app')

@section('content')
    <section>
        <div class="relative  overflow-x-auto">
            <div class="flex mx-10 flex-row-reverse">
                <a href="{{ route('create_event') }}"> <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                        Event <i class="fa fa-plus"></i></button>
                </a>
            </div>
            <div>
                <div class="max-w-md mx-auto">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Errors!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Events
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Event_Status(Online/Offline)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Flyer
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $event->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $event->category }}
                            </td>
                            <td class="px-6 py-4">
                                <img class="w-16 h-12" src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}">
                            </td>

                            <td class="px-6 py-4 gap-2 flex flex-row">
                                <a href="{{ route('event_show', $event->slug) }}"> <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                        View
                                    </button>
                                </a>

                                <a href="/app/dashboard/event/{{ $event->id }}/edit">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                        Edit
                                    </button>
                                </a>
                                <form action="{{ route('delete_event', $event->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                        type="submit"
                                        onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                </form>
                                <a href="{{ route('manage_event', $event->slug) }}">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Manage
                                        Event</button>
                                </a>
                            </td>
                            <td>
                                <label for="toggleFour"
                                    class="flex items-center cursor-pointer select-none text-dark dark:text-white">
                                    <div class="relative">
                                        <input type="checkbox" id="toggleFour" class="peer sr-only" />
                                        <div
                                            class="block h-8 rounded-full box bg-dark dark:bg-dark-2 w-14 peer-checked:bg-primary">
                                        </div>
                                        <div
                                            class="absolute flex items-center justify-center w-6 h-6 transition bg-white rounded-full dot left-1 top-1 dark:bg-dark-5 peer-checked:translate-x-full peer-checked:dark:bg-white">
                                        </div>
                                    </div>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

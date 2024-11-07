@extends('layouts.dashboard.app')

@section('content')
    <section>
        <div class="flex mx-10 ">
            <a href="{{ route('create_ticket', $event->id) }}"> <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                    Ticket <i class="fa fa-plus"></i></button>
            </a>
        </div>
    </section>
    <section>
        <div>
            <a href="{{ url()->previous() }}"
                class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </section>

    <section>
        <div class="max-w-md mx-auto my-10">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Errors!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </section>

    <section>
        <h1 class="text-center text-3xl">Tickets</h1>

        @if (count($tickets) > 0)
            <div class="grid grid-cols-3">

                @foreach ($tickets as $ticket)
                    <div class="flex flex-col p-8  bg-white shadow-md hover:shodow-lg rounded-2xl gap-y-2 mb-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-16 h-16 rounded-2xl p-3 border border-blue-100 text-blue-400 bg-blue-50"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div class="flex flex-col ml-3">
                                    <div class="font-medium leading-none">{{ $ticket->type }} tickets</div>
                                    <p>Price: GHS {{ $ticket->tickets_sold }}</p>
                                    <p>Sold {{ $ticket->tickets_sold }}</p>
                                    <p>Left {{ $ticket->tickets_left }}</p>
                                    <p class="text-sm text-gray-600 leading-none mt-1">By deleting your account you will
                                        lose your
                                        all data
                                    </p>
                                </div>
                            </div>
                            <button
                                class="flex-no-shrink bg-red-500 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-500 text-white rounded-full">Delete</button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h1 class="text-4xl">No Tickets added yet</h1>
        @endif



    </section>

    <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
        <div
            class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
            <div
                class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                <div>
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                        Projects</h6>
                    <p
                        class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                        </svg>
                        <strong>30 done</strong> this month
                    </p>
                </div>
                <button aria-expanded="false" aria-haspopup="menu" id=":r5:"
                    class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                    type="button">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z">
                            </path>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                <table class="w-full min-w-[640px] table-auto">
                    <thead>
                        <tr>
                            <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                    Ticket type</p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                    Price</p>
                            </th>
                            <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                    Progress</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-4">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                            {{ $ticket->type }}</p>
                                    </div>
                                </td>

                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                        GHS {{ $ticket->price }}</p>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="w-10/12">
                                        
                                        <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                            {{ number_format((($ticket->tickets_sold / ($ticket->tickets_sold + $ticket->ticket_quantity))) * 100, 2) }}%
                                        </p>
                                        <div
                                            class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                            <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                style="width: {{ number_format((($ticket->tickets_sold / ($ticket->tickets_sold + $ticket->ticket_quantity))) * 100, 2) }}%;"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                       

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <section>
        <div class="flex flex-wrap bg-pink-500 ">
            <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5 mb-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-3 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Traffic</h5>
                                <span class="font-semibold text-xl text-blueGray-700">334,100</span>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-red-500">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-blueGray-400 mt-4">
                            <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 2,99% </span>
                            <span class="whitespace-nowrap"> Since last month </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class=" mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-4 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">New users</h5>
                                <span class="font-semibold text-xl text-blueGray-700">2,999</span>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-pink-500">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-blueGray-400 mt-4">
                            <span class="text-red-500 mr-2"><i class="fas fa-arrow-down"></i> 4,01%</span>
                            <span class="whitespace-nowrap"> Since last week </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">Sales</h5>
                                <span class="font-semibold text-xl text-blueGray-700">901</span>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-lightBlue-500">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-blueGray-400 mt-4">
                            <span class="text-red-500 mr-2"><i class="fas fa-arrow-down"></i> 1,25% </span>
                            <span class="whitespace-nowrap"> Since yesterday </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">Performance</h5>
                                <span class="font-semibold text-xl text-blueGray-700">51.02% </span>
                            </div>
                            <div class="relative w-auto pl-4 flex-initial">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-emerald-500">
                                    <i class="fas fa-percent"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-blueGray-400 mt-4">
                            <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 12% </span>
                            <span class="whitespace-nowrap"> Since last mounth </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="relative pt-8 pb-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                            Made with <a href="https://www.creative-tim.com/product/notus-js"
                                class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a
                                href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800"
                                target="_blank"> Creative Tim</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection

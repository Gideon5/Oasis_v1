@extends('layouts.dashboard.app')

@section('content')
    <div class="flex flex-1">
        <!-- Main -->
        <main class="flex flex-col px-4 ">


            <h1 class="text-5xl font-bold text-gray-500">Dashboard </h1>

            <div class="mt-12">
                <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div
                            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p
                                class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Today's Money</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                $53k</h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p
                                class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+55%</strong>&nbsp;than last week
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div
                            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p
                                class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Today's Users</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                2,300</h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p
                                class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+3%</strong>&nbsp;than last month
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div
                            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p
                                class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                New Clients</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                3,462</h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p
                                class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-red-500">-2%</strong>&nbsp;than yesterday
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div
                            class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p
                                class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                Sales</p>
                            <h4
                                class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                $103,430</h4>
                        </div>
                        <div class="border-t border-blue-gray-50 p-4">
                            <p
                                class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                <strong class="text-green-500">+5%</strong>&nbsp;than yesterday
                            </p>
                        </div>
                    </div>
                </div>

               
            </div>
            

            <div class="flex justify-center bg-gray-100 py-10 p-14">
                <!---== First Stats Container ====--->
                <div class="container mx-auto pr-4">
                    <div
                        class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                        <div class="h-20 bg-red-400 flex items-center justify-between">
                            <p class="mr-0 text-white text-lg pl-5">USERS</p>
                        </div>
                        <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
                            <p>TOTAL</p>
                            <a href="{{ route('all_users') }}"> 
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        View All
                                    </span>
                                </button>
                            </a>

                        </div>
                        <p class="py-4 text-3xl ml-5">20,456</p>
                        <!-- <hr > -->
                    </div>
                </div>
                <!---== First Stats Container ====--->

                <!---== Second Stats Container ====--->
                <div class="container mx-auto pr-4">
                    <div
                        class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                        <div class="h-20 bg-blue-500 flex items-center justify-between">
                            <p class="mr-0 text-white text-lg pl-5">EVENTS</p>
                        </div>
                        <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
                            <p>TOTAL</p>
                            <a href="{{ route('all_events') }}"> 
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        View All
                                    </span>
                                </button>
                            </a>
                        </div>
                        <p class="py-4 text-3xl ml-5">19,694</p>
                        <!-- <hr > -->
                    </div>
                </div>
                <!---== Second Stats Container ====--->

                <!---== Third Stats Container ====--->
                <div class="container mx-auto pr-4">
                    <div
                        class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                        <div class="h-20 bg-purple-400 flex items-center justify-between">
                            <p class="mr-0 text-white text-lg pl-5">ORDERS</p>
                        </div>
                        <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                            <p>TOTAL</p>
                            <button
                                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    View All
                                </span>
                            </button>
                        </div>
                        <p class="py-4 text-3xl ml-5">711</p>
                        <!-- <hr > -->
                    </div>
                </div>
                <!---== Third Stats Container ====--->

                <!---== Fourth Stats Container ====--->
                <div class="container mx-auto">
                    <div
                        class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                        <div class="h-20 bg-purple-900 flex items-center justify-between">
                            <p class="mr-0 text-white text-lg pl-5">YET TO</p>
                        </div>
                        <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                            <p>TOTAL</p>
                        </div>
                        <p class="py-4 text-3xl ml-5">0</p>
                        <!-- <hr > -->
                    </div>
                </div>
                <!---== Fourth Stats Container ====--->
            </div>
            <!---===================== FIRST ROW CONTAINING THE  STATS CARD ENDS HERE =============================-->

            <!------===================== SECOND ROW CONTAINING THE TABLE STATS STARTS HERE =============================-->
            <div class="flex justify-center bg-gray-100 py-10 p-5">
                <!--==== frist div begins here ====--->
                <div class="container mr-5 ml-2 mx-auto bg-white shadow-xl">
                    <div class="w-11/12 mx-auto">
                        <div class="bg-white my-6">
                            <table class="text-left w-full border-collapse">
                                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                                <thead>
                                    <tr>
                                        <th
                                            class="py-4 px-6 bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">
                                            KEYWORDS</th>
                                        <th
                                            class="py-4 px-6 text-center bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">
                                            TOTAL ENTERIES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">Bible</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            11980
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">Blah</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            340
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">Blah</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            901
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">Blah</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            11950
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">Blah</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            459
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--==== frist div ends here ====--->

                <!--==== Second div begins here ====--->
                <div class="container mr-5 mx-auto bg-white shadow-xl">
                    <div class="w-11/12 mx-auto">
                        <div class="bg-white my-6">
                            <table class="text-left w-full border-collapse">
                                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                                <thead>
                                    <tr>
                                        <th
                                            class="py-4 px-6 bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">
                                            MSISDN</th>
                                        <th
                                            class="py-4 px-6 text-center bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">
                                            ENTRIES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            495,455
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            495,455
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            495,455
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            32,333
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">26809304030</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            31,199
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--==== Second div ends here ====--->

                <!--==== Third div begins here ====--->
                <div class="container mx-auto bg-white shadow-xl">
                    <div class="w-11/12 mx-auto">
                        <div class="bg-white my-6">
                            <table class="text-left w-full border-collapse">
                                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                                <thead>
                                    <tr>
                                        <th
                                            class="py-4 px-6 bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">
                                            MSISDN</th>
                                        <th
                                            class="py-4 px-6 text-center bg-purple-400 font-bold uppercase text-sm text-white border-b border-grey-light">
                                            POINTS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                                        <td class="py-4 text-center px-6 border-b border-grey-light">
                                            11,290
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                                        <td class="py-4 text-center px-6 border-b border-grey-light">
                                            9,230
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            234
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            56,230
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">28679609009</td>
                                        <td class="py-4 px-6 text-center border-b border-grey-light">
                                            323
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            
            </div>
            <!-- Content -->
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                    class="h-4 w-4 text-blue-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5"></path>
                                </svg>
                                <strong>30 done</strong> this month
                            </p>
                        </div>
                        <button aria-expanded="false" aria-haspopup="menu" id=":r5:"
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                            type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
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
                                        <p
                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                            companies</p>
                                    </th>
                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                        <p
                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                            budget</p>
                                    </th>
                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                        <p
                                            class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                            completion</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p
                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                Material XD Version</p>
                                        </div>
                                    </td>

                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p
                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                            $14,000</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p
                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                60%</p>
                                            <div
                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                    style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p
                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                Add Progress Track</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p
                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                            $3,000</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p
                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                10%</p>
                                            <div
                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                    style="width: 10%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p
                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                Fix Platform Errors</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p
                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                            Not set</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p
                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                100%</p>
                                            <div
                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p
                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                Launch our Mobile App</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p
                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                            $20,500</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p
                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                100%</p>
                                            <div
                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p
                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                                Add the New Pricing Page</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p
                                            class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                            $500</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p
                                                class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                                25%</p>
                                            <div
                                                class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                    style="width: 25%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </main>

   
    </div>

@endsection

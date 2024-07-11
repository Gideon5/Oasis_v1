@extends('layouts.dashboard.app')

@section('content')
    <div>
        <section class="py-2">
            <div class="w-full max-w-7xl mx-auto px-6 md:px-8">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 lg:gap-0">
                    <div class="block">
                        <h2 class="font-manrope font-bold text-2xl leading-9 text-gray-900 mb-3">Create New Event</h2>
                        <p class="font-normal text-sm leading-6 text-gray-500">Remember to avoid sharing sensitive personal
                            information online</p>
                    </div> 

                </div>
            </div>
            <div>
                <div class="max-w-md mx-auto">
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
                
            </div>

            
        </section>
    

        <section>
            <div>
                <form class="max-w-md mx-auto" method="POST" action="{{ route('add_event') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="name" id="floating_first_name"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_first_name"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Event
                                Name</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="location" id="floating_last_name"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_last_name"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Location</label>
                        </div>
                    </div>
                    <div class="col-md-6 flex flex-col  pb-3">
                        Description
                        <textarea class="input-styling" name="description" id="" cols="30" rows="3"></textarea>
                    </div>
                    <div class="col-md-6 flex flex-col  pb-3 my;;;;-10">
                        <div class="col-md-6 flex flex-col pb-3">
                            <label for="category" class="mb-2">Select Category:</label>
                            <select id="category" name="category" class="form-select">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 flex flex-col  pb-3 my;;;;-10">
                        <label for="">Date</label>
                        <input type="date" name="date">
                    </div>
                    <div class="col-md-6 flex flex-col  pb-3 my;;;;-10">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-col">
                                <label for="start-time" class="mb-2">Start Time:</label>
                                <input type="time" id="start_time" name="start_time" class="form-control">
                            </div>
                            <div class="flex flex-col">
                                <label for="end-time" class="mb-2">End Time:</label>
                                <input type="time" id="end_time" name="end_time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div> 
                        <label for="image" class="mb-2">Select Flyer:</label>
                        <input type="file" id="image" name="image" accept="image/*" class="form-control">
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>
        </section>
        <section>

        </section>
    </div>
@endsection

@extends('layouts.layouts')
@section('content')

<!-- component -->
<section class="bg-white">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://cdni.iconscout.com/illustration/premium/thumb/sign-up-page-1886582-1598253.png')">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize">
                    Please Sign Up
                </h1>

                <p class="mt-4 text-gray-500">
                    Let’s get you all set up so you can verify your personal account and begin setting up your profile.
                </p>

                <div class="mt-6">
                    <h1 class="text-gray-500">Select type of account</h1>

                    
                    <div class="mt-3 md:flex md:items-center md:-mx-2">
                    <a href="/signup" button class="flex justify-center w-full px-6 py-3 text-white bg-blue-500 rounded-md md:w-auto md:mx-2 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="mx-2">
                                Client
                            </span>
                        </a>

                        <button class="flex justify-center w-full px-6 py-3 text-white bg-blue-500 rounded-md md:w-auto md:mx-2 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="mx-2">
                                Admin
                            </span>
                        </button>
                    </div>
                </div>

<!-- ADMIN SIGNUP FORM -->
    <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" method="POST" action="/adminsignup">
        @csrf
        <div>
            <label class="block mb-2 text-sm text-gray-600">Name</label>
            <input type="text" name="name" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <div>
            <label class="block mb-2 text-sm text-gray-600">Email</label>
            <input type="email" name="email" placeholder="email@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <div>
            <label class="block mb-2 text-sm text-gray-600">Password</label>
            <input type="password" name="password" placeholder="Enter your Password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <button
            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
            <span>Sign Up </span>

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </form>
            </div>
        </div>
    </div>
</section>
@stop
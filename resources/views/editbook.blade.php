@extends('layouts.layouts')
@section('content')


<div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
        Book an Appointment
    </div>
    <form class="py-4 px-6" action="{{ route('book.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" value="{{$book->property_name}}" required type="text" name="property_name" placeholder="Enter your name">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
                Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email" value="{{$book->property_email}}" required type="email" name="property_email" placeholder="Enter your email">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="phone">
                Phone Number
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="phone" value="{{$book->property_number}}" required type="tel" name="property_number" placeholder="Enter your phone number">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="date">
                Date
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="date" value="{{$book->property_date}}" required type="date" name="property_date" placeholder="Select a date">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="time">
                Time
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="time" value="{{$book->property_time}}" required type="time" name="property_time" placeholder="Select a time">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="service">
                Service
            </label>
            <select
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="service" required name="property_service">
                <option value="{{$book->property_service}}">Select a service</option>
                <option value="privateroooms">Private Rooms</option>
                <option value="sharedrooms">Shareed Rooms</option>
                <option value="breakfast">Bed and Breakfast</option>
                <option value="extended">Extended Accomodation</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="message">
                Message
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="message" name="property_message" rows="4" placeholder="Enter any additional information"></textarea>
        </div>
        <div class="flex items-center justify-                                                                                                                                                                                                                                                                                                                                                                                                                                                         center mb-4">
            <button
                class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                type="submit">
                Proceed
            </button>
        </div>

    </form>
</div>
@stop
@extends('layouts.layouts')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card w-50 p-3 shadow-lg rounded">
        <div class="card-header text-center bg-primary text-white rounded-top">
            <h1>{{ $bookings->property_name }}</h1>
        </div>
        <div class="card-body bg-light rounded-bottom">
            <p class="card-text"><strong>Email:</strong> <span class="text-muted">{{ $bookings->property_email }}</span></p>
            <p class="card-text"><strong>Phone Number:</strong> <span class="text-muted">{{ $bookings->property_number }}</span></p>
            <p class="card-text"><strong>Date:</strong> <span class="text-muted">{{ $bookings->property_date }}</span></p>
            <p class="card-text"><strong>Time:</strong> <span class="text-muted">{{ $bookings->property_time }}</span></p>
            <p class="card-text"><strong>Service:</strong> <span class="text-muted">{{ $bookings->property_service }}</span></p>
            <p class="card-text"><strong>Message:</strong> <span class="text-muted">{{ $bookings->property_message }}</span></p>
        </div>
    </div>
</div>
@endsection
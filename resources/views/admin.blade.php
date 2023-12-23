@extends('layouts.layouts')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Admin Panel</h1>
    <div class="card">
        <div class="card-header bg-primary text-white">Manage Properties</div>
        <div class="card-body">
            <button id="addPropertyButton" class="btn btn-success mb-3">Add Property</button>

            <div id="propertyFormContainer" style="display: none;">
                <form action="/addProperty" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="propertyName">Property Name:</label>
                        <input type="text" class="form-control" id="propertyName" name="propertyName">
                    </div>
                    <div class="form-group">
                        <label for="propertyValue">Property Value:</label>
                        <input type="text" class="form-control" id="propertyValue" name="propertyValue">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('addPropertyButton').addEventListener('click', function() {
        document.getElementById('propertyFormContainer').style.display = 'block';
    });
</script>
@endsection
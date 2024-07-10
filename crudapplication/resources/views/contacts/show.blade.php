@extends('contacts.layout')
@section('content')


<div class="card">
    <div class="card-header">Contact us Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-text">Name : {{ $contacts->name }}</h5>
            <h5 class="card-text">Address : {{ $contacts->address }}</h5>
            <h5 class="card-text">Phone : {{ $contacts->mobile }}</h5>
        </div>

        </hr>

    </div>
</div>
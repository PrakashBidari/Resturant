@extends('backend.layouts.master')
@section('main')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Contact Show</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body pt-3">
                <p> <strong>Name: </strong>{{ $contact->name}} </p>
                <p> <strong>Email: </strong>{{ $contact->email}} </p>
                <p> <strong>Phone: </strong>{{ $contact->phone}} </p>
                <p> <strong>Class: </strong>{{ $contact->class}} </p>
                <p> <strong>Message: </strong>{{ $contact->message}} </p>
            </div>
        </div>

    </section>
@endsection

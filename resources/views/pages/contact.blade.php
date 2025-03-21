@extends('layouts.app')
@section('title', 'contact us')

@section('content')
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form action="{{ route('pages.ContactAction') }}" method="POST" class="form">
            @csrf
            <div class="alert alert-success">
                @if (session('success'))
                {{ session('success') }}
            @endif
            </div>
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="subject">subject</label>
                    <input type="text" name="subject" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="message">message</label>
                    <textarea class="form-control" name="message" id="message" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

@endsection

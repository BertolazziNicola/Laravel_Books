@extends('layouts.main')

@section('page-title')
Create author
@endsection

@section('main-content')
<section class="row">
    @include('partials.navbar')
    <div class="col-md-4">
        @if (isset($author))
            <form action="{{ route('authors.update', $author->id) }}" method="POST">
                @method('PUT')
        @else
            <form action="{{ route('authors.store') }}" method="POST">
        @endif
                @csrf
                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter author's name" name="name" value="{{ $author->name ?? '' }}">

                    {{-- Display error --}}
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Birthday (optional) -->
                <div class="mb-3">
                    <label class="form-label d-flex justify-content-between align-items-center" for="birthday">
                        <span>Birthday</span>
                        <small class="text-muted">(optional)</small>
                    </label>
                    <input type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday"
                        max="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"
                        value="{{ isset($author) && isset($author->birthday) ? \Carbon\Carbon::parse($author->birthday)->format('Y-m-d') : '' }}">

                    {{-- Display error --}}
                    @error('birthday')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
    </div>
</section>
@endsection
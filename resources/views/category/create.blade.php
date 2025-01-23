@extends('layouts.main')

@section('page-title')
Create category
@endsection

@section('main-content')
<section class="row">
    @include('partials.navbar')
    <div class="col-md-4">
        @if (isset($category))
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @method('PUT')
        @else
            <form action="{{ route('categories.store') }}" method="POST">
        @endif
                @csrf
                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter category name" name="name" value="{{ $category->name ?? '' }}">

                    {{-- Display error --}}
                    @error('name')
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
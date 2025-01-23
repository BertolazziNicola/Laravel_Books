@extends('layouts.main')

@section('page-title')
Book detail
@endsection

@section('main-content')
<section class="row mb-5">
    @include('partials.navbar')
</section>
<article class="detail-book row py-3 px-1 rounded-4">
    <div class="col-md-4">
        <figure>
            @if (isset($book->cover))
                <img src="{{ asset('storage/' . $book->cover) }}" class="rounded" alt="Book cover">
            @else
                <img src="{{ asset('assets/no-cover.webp') }}" class="rounded" alt="Book cover">
            @endif
        </figure>
    </div>
    <div class="col-md-4">
        <h2 class="mb-3">{{ $book->title }}</h2>
        @if (isset($book->description))
            <div>
                <p>{{ $book->description }}</p>
            </div>
        @endif
        <div class="border-top mt-2 pt-3">
            @if (isset($book->author->name))
                <span class="badge text-bg-secondary">by {{ $book->author->name }}</span>
            @endif
            @if (isset($book->category->name))
                <span class="badge text-bg-secondary">{{ $book->category->name }}</span>
            @endif
            @if (isset($book->pages))
                <span class="badge text-bg-secondary">{{ $book->pages }} pages</span>
            @endif
        </div>
    </div>
</article>
@endsection
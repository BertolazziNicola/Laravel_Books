@extends('layouts.main')

@section('page-title')
    Books list
@endsection

@section('main-content')
    <section class="row">
        @include('partials.navbar')
    </section>
    <section class="row">
        <div class="col-md-12">
            <div class="list-book">
                @forelse ($books as $book)
                    @include('partials.index-book')
                @empty
                    <article class="card border-0">
                        <div class="card-body">
                            <h3 class="card-title">No books available</h3>
                        </div>
                    </article>
                @endforelse
            </div>
        </div>
    </section>
@endsection

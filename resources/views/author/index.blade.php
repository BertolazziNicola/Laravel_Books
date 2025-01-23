@extends('layouts.main')

@section('page-title')
    Authors list
@endsection

@section('main-content')
    <section class="row">
        @include('partials.navbar')
        <div class="col-md-6">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="w-auto">#</th>
                        <th scope="col" class="w-50">Author</th>
                        <th scope="col" class="w-25">Birthday</th>
                        <th scope="col" class="w-auto text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($authors as $author)
                        @include('partials.index-author')
                    @empty
                    <tr>
                        <td colspan="4" align="center">No authors available</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection

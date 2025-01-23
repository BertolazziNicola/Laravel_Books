@extends('layouts.main')

@section('page-title')
    Categories list
@endsection

@section('main-content')
    <section class="row">
        <div class="col-md-12">
            @include('partials.navbar')
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="w-auto">#</th>
                        <th scope="col" class="w-75">Category</th>
                        <th scope="col" class="w-auto text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        @include('partials.index-category')
                    @empty
                        <tr>
                            <td colspan="3" align="center">No categories available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection

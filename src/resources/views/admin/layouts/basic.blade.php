@extends('basic::admin.layouts.basic')

@section('pagecontent')

<div class="big-container">

    <nav class="pagenav">
        {{-- <ul>
            <li>
                <a href="{{ route('admin.search.items') }}" class="button button-left">{{ __('search::elf.items') }}</a>
                <a href="{{ route('admin.search.items.create') }}" class="button button-right">+</a>
            </li>
        </ul> --}}
    </nav>
    @section('searchpage-content')
    @show

</div>
@endsection

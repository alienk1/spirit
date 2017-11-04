@extends('master')

@section('title', 'Page Title')

@section('styles')
    @parent

@endsection

@section('scripts')
    @parent
    <script src="{{ asset('dist/view-greek-ru.js') }}"></script>
@endsection

@section('content')

    @include('blocks.header')
    <div class="blog-sidebar-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="post">
                        <div class="intro" data="{{ $data->ot_nt . '.' . $data->book }}">
                            @include('blocks.loads.bible')
                        </div>
                        <div class="pages">
                            @include('blocks.paginator.paginator2')
                        </div>
                        <div class="box-other">
                            @include('blocks.loads.otherLinks2')
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 sidebar">
                    @include('blocks.right.links2')
                </div>
            </div>
        </div>
    </div>
    @include('blocks.footer')
    @include('blocks.modals.detalWordModal')
@endsection
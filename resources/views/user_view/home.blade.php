@extends('user_view.master')

@section('content')

    {{--    deskripsi tentang gfc--}}
    @include('user_view.about')

    {{--    struktur team--}}
    @include('user_view.team')

    {{--    media di gfc--}}
    @include('user_view.media')

    {{--    kegiatan di gfc--}}
    @include('user_view.activity')

    {{--    event di gfc--}}
    @include('user_view.events')


    @include('user_view.testimonial')
    @include('user_view.blog')
    @include('user_view.contact')
@endsection
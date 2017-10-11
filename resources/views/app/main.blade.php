@extends("common.html")

@section("head_tag")
    <title>@yield("title")</title>
@endsection

@section("head_css")
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css" crossorigin="anonymous">
    @yield("custom_css")
@endsection

@section("body")
    @include("common.header")
    @yield("content")
    @include("common.footer")
@endsection

@section("footer_js")
    <script src="/js/app.js" crossorigin="anonymous"></script>
    @yield("custom_js")
@endsection
@extends('public.layouts.default')

@section('content')
<section class="container mt-14">
    @include('public.page.blog._hightlight-section')
</section>

<section class="container">
    @include('public.page.blog._list-section')
</section>
@endsection

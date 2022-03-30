@extends('public.layouts.default')

@section('content')
<section class="container-sm mt-14 px-5 md:px-3 lg:px-0">
    @include('public.page.blog._hightlight-section')
</section>

<section class="container mt-24 md:mt-14 px-5">
    @include('public.page.blog._list-section')
</section>
@endsection

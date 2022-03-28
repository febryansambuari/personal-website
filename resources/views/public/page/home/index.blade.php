@extends('public.layouts.default')

@section('content')
<section class="container mt-24 sm:mt-36">
    @include('public.page.home._banner-section')
</section>

<section class="container mt-40 xs:mt-64 sm:mt-80">
    @include('public.page.home._post-section')
</section>

<section class="container mt-60">
    @include('public.page.home._project-section')
</section>
@endsection

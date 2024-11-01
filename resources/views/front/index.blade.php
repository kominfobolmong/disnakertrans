@extends('front.app')

@section('title', 'Beranda')

@section('content')

 <!-- banner-area -->
 @include('front.section.banner')
 <!-- banner-area-end -->

 <!-- artikel-area -->
 @include('front.section.artikel')
 <!-- artikel-area-end -->


 @include('front.section.infodata')

@endsection

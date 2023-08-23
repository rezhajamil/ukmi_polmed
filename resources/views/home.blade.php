@extends('layouts.app')
@section('body')
    <div class="bg-gradient-to-br to-teal-700 from-emerald-900">
        @include('layouts.navigation')
        @include('section.intro')
        @include('section.program')
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#header').addClass(
                        'bg-teal-900 shadow-md').removeClass(
                        'bg-transparent');
                    // Add the class to change header background
                } else {
                    $('#header').removeClass(
                        'bg-teal-900 shadow-md'
                    ).addClass('bg-transparent'); // Remove the class to make navbar background transparent

                }
            });
        });
    </script>
@endsection

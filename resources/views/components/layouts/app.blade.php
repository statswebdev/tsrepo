<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Tourism Statistics Survey' }}</title>


        <meta property="og:type" content="website">
        <meta property="og:url" content="http://tourismsurvey.stats.gov.mv/">
        <meta property="og:title" content="Tourism Statistics Survey">
        <meta property="og:description" content="Tourism Statistics Survey">
        <meta property="og:image" content="{{ asset('tourism_stat_survey.png') }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:site_name" content="Tourism Statistics Survey">
        <meta property="og:locale" content="en_US">


    

        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

        <link rel="stylesheet" href="{{asset('css/feather.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">

    </head>
    <body>
        @if (Auth::user())
            <livewire:inc.navbar />
        @endif
        
        {{ $slot }}

        <livewire:inc.footer />

        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/theme.min.js')}}"></script>

    </body>
</html>

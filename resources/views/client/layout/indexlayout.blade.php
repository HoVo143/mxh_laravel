
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
     integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="shortcut" href="{{asset('')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">

    <title>@yield('title')</title>
</head>
<body>
    @include('client.blocks.header')

    {{-- --------------------  ------------------------ --}}
    @yield('content')
    {{-- --------------------  ------------------------ --}}

    @include('client.blocks.footer');

    <script src="{{asset('assets/js/home.js')}}"></script>
    <script src="{{asset('assets/js/header.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <title>{{$data['title'] ?? 'Worldclass application development agency | Unikwork Systems'}}</title>
    {{-- <title>{{$seotitle}}</title> --}}
    <meta name='description' content="{{$data['description'] ?? 'Unikwork provides quality software development services that allow you to create quality software products that perform.'}}">
    {{-- <meta name="description" content="{{$data['description'] ?? 'Smart Software Development Solutions that Revolutionize the Way you Do Business'}}"> --}}
    <meta name="key_word" content="{{$data['key_word'] ?? 'software development agency, custom software development company​,custom mobile app development services, custom website development'}}">

    <meta property="og:url" content="<?php echo URL::current();?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$data['title']  ?? 'Worldclass application development agency | Unikwork Systems'}}">
    <meta property="og:description" content="{{$data["description"]  ?? 'Smart Software Development Solutions that Revolutionize the Way you Do Business'}}">
    <meta property="og:image" content="{{asset('images/unikwork-logo.png')}}">

    <meta property="twitter:url" content="<?php echo URL::current();?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="unikwork"/>
    <meta name="twitter:title" content="{{$data['title']  ?? 'Worldclass application development agency | Unikwork Systems'}}">
    <meta name="twitter:description" content="{{$data['description']  ?? 'Smart Software Development Solutions that Revolutionize the Way you Do Business'}}">
    <meta name="twitter:image" content="{{asset('images/unikwork-logo.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"WebSite","name":"unikwork systems","url":"https://unikwork.com","foundingDate":"","sameAs":["https://www.facebook.com/unikwork/","https://twitter.com/unikwork","https://in.linkedin.com/company/unikwork","https://www.upwork.com/ag/unikwork/","https://www.instagram.com/unikworkdotcom/"]}
    </script>
    <link href="{{asset('images/favicon.png')}}" rel="icon">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/font-awesome.min.css')}}" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    <link href="{{url('public/css/style.css')}}" rel="stylesheet">
    {{-- <link href="https://www.unikwork.com/public/css/style.css" rel="stylesheet"> --}}
</head>
@include('layouts.topbar')
<body>

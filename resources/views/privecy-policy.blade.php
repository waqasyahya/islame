@extends('Header-Layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/privecy_condition.css') }}" />
    <title>islame- privecy</title>

</head>

<body>
    <div class="w" style="background: linear-gradient(to top, #006d74, #02904c);height: auto; width: 100%; margin-top:80px; text-align: center; display: flex; align-items: center; justify-content: center; padding: 
    0px 5px;">
        <span class="w" style="display: flex; flex-direction: column; align-items: center; font-weight: 500; font-size: 67px; color: white; line-height: 80px; padding-bottom: 40px; padding-top: 60px;" class="all-youneed-to-know-about-islam">
            {{ $data->main_heading }}
            <div class="p" style="font-size: 22px; font-weight: 300;" class="about-page-main-heading">{{ $data->main_paragraph1 }}</div>
            <span class="p" style="font-size: 22px; font-weight: 300;margin-top:-40px;" class="about-page-main-heading"> {{ $data->main_paragraph2 }}</span>
        </span>
    </div>

   
    <h1 class="w" style="margin-top: 3px;">{{ $data->heading1 }}</h1>
    <p class="card ">
        {{ $data->paragraph1 }}



    </p>
    <h1 class="w">{{ $data->heading2 }}</h1>
    <p class="card " style="font-size: justify;">
        {{ $data->paragraph2 }}
    </p>
    <h2 class="w">{{ $data->heading3 }}
    </h2>
    <h3 class="w">{{ $data->heading4 }}</h3>
    <p class="card" style="font-size: justify;">
        {{ $data->paragraph4 }}</p>
    <h1 class="w">{{ $data->heading5 }}</h1>
    <p class="card" style="font-size: justify;">
        {{ $data->paragraph5 }}</p>
    <h1 class="w">{{ $data->heading6 }}</h1>
    <p class="card " style="font-size: justify;">
        {{ $data->paragraph6 }}</p>
    <h1 class="w">{{ $data->heading7 }}</h1>
    <p class="card " style="font-size: justify;">
        {{ $data->paragraph7 }}
    <p>
    <h1 class="w">{{ $data->heading8 }}</h1>
    <p class="card shadow-lg" style="font-size: justify;">
        {{ $data->paragraph8 }}
    </p>
    <h1 class="w">{{ $data->heading9 }}</h1>
    <p class="card " style="font-size: justify;">
        {{ $data->paragraph9 }}</p>
    <h1 class="w">{{ $data->heading10 }}</h1>
    <p class="card " style="font-size: justify;">

        {{ $data->paragraph10 }}</p>
    @include('Footer-Layout')

</body>

</html>

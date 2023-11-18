@extends('Header-Layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/privecy_condition.css') }}" />
    <title>islame term-condition</title>
</head>

<body>
    <div style="background: linear-gradient(to top, #006d74, #02904c);height: auto; width: 100%; margin-top:80px; text-align: center; display: flex; align-items: center; justify-content: center; padding: 
    0px 5px;">
        <span style="display: flex; flex-direction: column; align-items: center; font-weight: 500; font-size: 67px; color: white; line-height: 80px; padding-bottom: 40px; padding-top: 60px;" class="all-youneed-to-know-about-islam">
            {{ $data->main_heading }}
            <div style="font-size: 22px; font-weight: 300;" class="about-page-main-heading">{{ $data->main_paragraph1 }}</div>
            <span style="font-size: 22px; font-weight: 300;margin-top:-40px;" class="about-page-main-heading"> {{ $data->main_paragraph2 }}</span>
        </span>
    </div>
    {{-- <h1 style="margin-top: 110px; color:white;text-align:center;    font-size: 3.3rem; ">{{$data->main_heading}}</h1>
    <p style="text-align: center;">
        {{$data->main_paragraph1}}<br>
        {{$data->main_paragraph2}}
    </p>
        --}}
    <h1 class="w" style="margin-top:10px;">{{$data->heading1}}</h1>
    <p class="card" style="font-size: justify;">
      {{$data->paragraph1}}<br>
    <h1 class="w">{{$data->heading2}}</h1>
    <p class="card" style="font-size: justify;">
        {{$data->paragraph2}}<br>
   
    </p>
    <h1 class="w">{{$data->heading3}}</h1>

    <p class="card" style="font-size: justify;">
        {{$data->paragraph3}}<br>
       
    </p>
    <h1 class="w">{{$data->heading4}}</h1>

    <p class="card" style="font-size: justify;">
        {{$data->paragraph4_1}}<br>
        {{$data->paragraph4_2}}
        
      
    </p>
    <h1 class="w">{{$data->heading5}}</h1>

    <p class="card" style="font-size: justify;">
        {{$data->paragraph5_1}}<br>
       
        
        {{$data->paragraph5_2}}<br>

        {{$data->paragraph5_3}}<br>

        {{$data->paragraph5_4}}<br>

    </p>
    <h1 class="w">{{$data->heading6}}</h1>

    <p class="card" style="font-size: justify;">
        {{$data->paragraph6}}
    </p>
    <h1 class="w">{{$data->heading7}}</h1>

    <p class="card" style="font-size: justify;">
        {{$data->paragraph7_1}}<br>
        {{$data->paragraph7_2}}<br>
        {{$data->paragraph7_3}}<br>
        {{$data->paragraph7_4}}
    </p>
    <h1 class="w">{{$data->heading8}}</h1>

    <p class="card" style="font-size: justify;">
        {{$data->paragraph8_1}}<br>
        {{$data->paragraph8_2}}
    </p>
    <h1 class="w">{{$data->heading9}}</h1>
    <p class="card" style="font-size: justify;">
        {{$data->paragraph9}}
    </p>
    @include('Footer-Layout')

</body>

</html>

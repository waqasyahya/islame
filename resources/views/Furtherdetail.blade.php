@extends('Header-Layout') 
<title>islame-Guadiness</title>
<link rel="icon" type="image/png" sizes="16x16" href="/image/logo3.png">
<link rel="stylesheet" href="{{ asset('/css/Guaideness.css') }}" />
<body>    
<div style="margin-top: 150px;"></div>

    @foreach($data as $further)

{{-- Guaigeness --}}
<div class="card rounded shadow iframe-main-container">
    <div class="iframe-main-container-child1 d-flex text-white">
      <div class="text-center">{{$further->NameEng1}}</div>
      <div class="text-center">{{$further->NameArabic1}}</div>
      <div class="text-center">{{$further->NameUrdu1}}</div>
    </div>
    <div class="iframe-main-container2">
      <iframe
      src="{{$further->youtube_videos}}"
      frameborder="0"
       allowfullscreen
        width="100%"
        height="375px"
        class="main-iframe"
      >
      </iframe>
    </div>
    <div class="iframe-main-container3 px-2 text-white">
      <div class="iframe-main-container3-child1">
        <button
          class="btn border border-light text-white"
          onclick="hidediaplyfunc()"
          style="background: transparent"
        >
          Translate
        </button>
      </div>
      <div class="urdu iframe-main-container3-child2 text-end my-2">
        <bdo dir="rtl">
          {{$further->DescriptionUrdu}}
        </bdo>
      </div>
      <div class="english iframe-main-container3-child3 my-2 none">
        {{$further->DescriptionEng}}

       
      </div>
    </div>
  </div>
  <div class="text-center py-3">
    <button class="button-for-practice btn border border-dark" >
        <a href="{{url('/practic1/'.$further->detaillesson_id)}}" style="text-decoration: none; color:green;"> practics</a>
    </button>
  </div>
  <script>
    function hidediaplyfunc() {
      document
        .getElementsByClassName("iframe-main-container3-child3")[0]
        .classList.toggle("none");
    }
  </script>
{{-- Guaideness --}}

@endforeach
@include('Footer-Layout')









  
</body>

</html>

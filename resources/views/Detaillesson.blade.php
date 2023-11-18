@extends('Header-Layout') 
<title>islame- Detail Lesson</title>
<link rel="icon" type="image/png" sizes="16x16" href="/image/logo3.png">
<link rel="stylesheet" href="{{ asset('/css/Detaillesson.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<body>
  <script>
    AOS.init();
 
  </script>  









<div style="margin-top: 100px;">
@foreach($data as $detail)
<div data-aos="fade-in"  style="max-width: 100%; width: 100%;" >

<div
class="container detail-lesson-main-container d-flex justify-content-center mt-15"
style="margin: 10px auto;"
>
<div
  class="detail-lesson-container d-flex card shadow"
  style="border-radius: 1.25rem"
>
  <a
    href="{{ url('/Furtherdetail/'.$detail->id.'/'.$detail->read_id) }}"
    class="d-flex detail-lesson-link"
    style="width: 100%; text-decoration: none; color: white"
  >
    <div class="detail-lesson-div1 col-4 text-end">
        {{ $detail->NameEng1 }}
    </div>
    <div class="detail-lesson-div2 col-4 text-center">{{ $detail->NameArabic1 }}</div>
    <div
      class="detail-lesson-div3 col-4 text-end"
      style="text-align: end"
    >
    {{ $detail->NameUrdu1 }}
    </div>
  </a>
</div>
</div>
</div>
</div>
@endforeach
@include('Footer-Layout')









  




</body>

</html>

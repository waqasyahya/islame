@extends('Header-Layout')
<head>
    <link rel="stylesheet" href="{{ asset('/css/lesson12.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <title>islame- Lesson</title>
</head>
<body>
  <script>
    AOS.init();
 
  </script>
  


<div class="" style="margin-top: 130px;"></div>
@foreach($data as $student)
<div data-aos="fade-in"  style="max-width: 100%; width: 100%;" >

<div class="lesson-container">
 
  <div class="lesson-child-container1" data-tooltip="Mark As Favoruite"
    onclick="likelesson(this)"
    onmouseover="markunmarktext(this)" onmouseout="unmarktext(this)">
    <div style="position: relative; bottom: 6px; font-size: 20px">
    
      <div class="lesson-tooltip"></div>
      {{ $student->Number }}
    </div>
  </div>
  <a href="{{ url('/Detaillesson/'.$student->id) }}" style="text-decoration: none; color:#f6f9f9;width:70%;" >
  <div class="lesson-child-container2 card shadow" >
   
    <div class="lesson-child-container2-child1">
      <h2>{{ $student->NameEng }}</h2>
    </div>
    <div class="lesson-child-container2-child2">
        {{ $student->NameUrdu }}
    </div>
    <div class="lesson-child-container2-child3">
      {{ $student->NameArabic }}
    </div>
  
  </div>
</a>
</div>
</div>

@endforeach

@include('Footer-Layout')
<script>
  function likelesson(element) {
    const likebutton = document.getElementsByClassName(
      "lesson-child-container1"
    )[0];
    if (element.style.backgroundColor != "rgb(25, 135, 84)") {
      console.log("If Case Run like lesson");
      // console.log(likebutton)
      element.style.backgroundColor = "rgb(25, 135, 84)";
      element.style.color = "white";
      element.style.border = "1px solid black";
      document.getElementsByClassName("lesson-tooltip")[0].innerHTML = "";
    } else {
      console.log("else Case Run unlike lesson");

      element.style.backgroundColor = "white";
      element.style.color = "black";
      element.style.border = "1px solid black";
      document.getElementsByClassName("lesson-tooltip")[0].innerHTML = "";
    }
  }
  function markunmarktext(element) {
    const likebutton = document.getElementsByClassName(
      "lesson-child-container1"
    )[0];
    const tooltipdiv=element.children[0].children[0];
    console.log(tooltipdiv)
    console.log("function Run");
    if (element.style.backgroundColor != "rgb(25, 135, 84)") {
      console.log("if case run for mark");
      tooltipdiv.style.color =
        "black";
      tooltipdiv.innerHTML =
        "Mark As favivriute";
    } else {
      console.log("else case run for unmark");
      tooltipdiv.style.color =
        "black";
      tooltipdiv.innerHTML =
        "Unmark";
    }
  }
  function unmarktext(element) {
    element.children[0].children[0].innerHTML = "";
  }
</script>
</body>

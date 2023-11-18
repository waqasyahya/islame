@extends('Header-Layout') 

<!doctype html>
<html lang="en">
  <head >
 
   <style>
  .carousel-indicators li.active {
    background-color: white;
}
.w1{
  color: #f6f7f8 !important;
}
.w1.active{
  color: #f6f7f8 !important;
}

.carousel,
.carousel-inner,
.carousel-item {
    margin: 0;
    padding: 0;
    border: none !important;
}
   </style>
  </head>
  <body>






{{-- header --}}

                                                           <!--home-->
 <!-- Slider -->
 <div style="margin-top: 70px;">
 <div id="carouselExampleIndicators" class="carousel slide mt-lg-5 pt-lg-5" data-ride="carousel" data-interval="1500" data-pause="hover">
  <ol class="carousel-indicators">
    <li class="w1" data-target="#carouselExampleIndicators"  data-slide-to="0" class="active"></li>
    <li class="w1" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li class="w1" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  
  </ol>
  <div class="carousel-inner" >
    <!--one-->
  
    <!--two-->
 

<!--three-->

  <div class="carousel-item border-success active " >
      <div class="container rounded border card shadow container  "  style="height: 400px; width: 1500px !important;    border: #006D74 3px solid !important; border-radius: 33px !important; background: linear-gradient( to top ,#006D74,#02904C);">
        <div class="row">
         <div class="col-7">
          <h3 class="     font-weight-bold" style=" color: white; font-size: 28px;  margin-left: 100px;margin-top: 20px;   font-weight: 600;font-style: italic;">Guideness</h3>
        <p class="py-md-3 " style="margin-left: 80px; color:white;margin-top: 0px; font-size: 18px;">Yeh slide aapko islamic hidayat, zindagi ke masail, aur sawalon ke jawabat se rubaru karayegi, aapki roshni mein sachai aur sahih rasta dikhane ke liye. Is slide mein aapko islamic tajwezat, duaon ki ahmiyat, aur zindagi ke taqaze ko samajhne ka zariya milta hai. Aap yahan se ilm hasil karke apne har kadam par Allah ki raza aur hidayat ki raushni se sajda ada kar sakte hain.</p>
        <button class="btn   rounded border card shadow-lg" style=" width: 210px ; border: #006D74 1px solid; border-radius: 100px !important; height: 65px; font-size: 32px;  font-weight: 500;  padding-left: 18px !important; color: #006D74; margin-left: 27rem; margin-top: -20px; background-color: white;">Watch Now</button>

        </div>
         <div class="col-1"></div>
         <div class="col-4">
          <img class=" card shadow-lg animate__animated animate__fadeInUp   " style="  background: linear-gradient( to top ,#006D74,#02904C);border-radius:10px;  margin-left: 1rem; margin-top: 2rem; width: 260px;  height: 330px;" src="/image/Guideness12.png" alt="First slide">
         </div>
        </div>
      </div>
    </div>
<!--five-->
  <div class="carousel-item border-success  " >
      <div class="container rounded border card shadow container  "  style="height: 400px; width: 1500px !important;    border: #006D74 3px solid !important; border-radius: 33px !important; background: linear-gradient( to top ,#006D74,#02904C);">
        <div class="row">
         <div class="col-7">
          <h3 class="     font-weight-bold" style=" color: white; font-size: 28px;  margin-left: 100px;margin-top: 20px;   font-weight: 600;font-style: italic;">practice</h3>
        <p class="py-md-3 " style="margin-left: 80px; color:white;margin-top: 0px; font-size: 18px;">Amaliyat aur ibadat ko behtar samajhne ke liye, yeh slide aapko tajwezat aur amaliyat ki asan aur mufeed hidaayat degi, takmeel-e-amal ki raah mein. Is slide mein aapko rozmarra ke amal aur ibadat ko sahih tariqay se ada karne ke liye sujhavat aur tajwezat milti hain, aapke deen aur taqwa ko barhane ke liye. Aap apne ibadat aur amaliyat ko is slide ke zariye tazabzub kar sakte hain aur Allah ki qurbat hasil kar sakte hain.   </p>
        <button class="btn   rounded border card shadow-lg" style=" width: 210px ; border: #006D74 1px solid; border-radius: 100px !important; height: 65px; font-size: 32px;  font-weight: 500;  padding-left: 18px !important; color: #006D74; margin-left: 27rem; margin-top: -20px; background-color: white;">Watch Now</button>

        </div>
         <div class="col-1"></div>
         <div class="col-4">
          <img class=" card shadow-lg animate__animated animate__fadeInUp   " style="  border-radius: 33px !important; background: linear-gradient( to top ,#006D74,#02904C);   margin-left: -1rem; margin-top: 2rem; width: 270px;  height: 330px;" src="/image/practice12.png " alt="First slide">
         </div>
        </div>
      </div>
    </div>
<!--six-->
  <div class="carousel-item border-success  " >
      <div class="container rounded border card shadow container  "  style="height: 400px; width: 1500px !important;    border: #006D74 3px solid !important; border-radius: 33px !important; background: linear-gradient( to top ,#006D74,#02904C);">
        <div class="row">
         <div class="col-7">
          <h3 class="     font-weight-bold" style=" color: white; font-size: 28px;  margin-left: 100px;margin-top: 20px;   font-weight: 600;font-style: italic;">Testing</h3>
        <p class="py-md-3 " style="margin-left: 80px; color:white;margin-top: 0px; font-size: 18px;">Is slide par aap islamic ilm ki tijarat kar sakte hain. Quizzes aur tests ke zariye apne ilmi darjay ko barhayein aur apne ilm ko imtihan dein. Yahan aapko aik interactive tajwezat ka silsila milta hai jisse aap apne ilmi safar ko mazbooti se tijarat kar sakte hain, aur apne ilm ko amli taur par aazma sakte hain. Aap yahan par apne ilmi tayyari ko mazbooti se janch sakte hain aur behtar banna ke raaste par taeed hasil kar sakte hain.</p>
        <button class="btn   rounded border card shadow-lg" style=" width: 210px ; border: #006D74 1px solid; border-radius: 100px !important; height: 65px; font-size: 32px;  font-weight: 500;  padding-left: 18px !important; color: #006D74; margin-left: 27rem; margin-top: -20px; background-color: white;">Watch Now</button>

        </div>
         <div class="col-1"></div>
         <div class="col-4">
          <img class=" card shadow-lg animate__animated animate__fadeInUp   " style=" background: linear-gradient( to top ,#006D74,#02904C);  margin-left: -1rem; margin-top: 2rem; width: 270px;  height: 330px;" src="/image/testing5.png " alt="First slide">
         </div>
        </div>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev colo" style="width: 7rem; " href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-left: 90px; margin-top: 45px;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="margin-top: 45px; margin-right: 30px;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slider -->
 </div>

                                              





<!--ayat-->
<div class="container" style="margin-top: 60px;" >

  <div class="row  ">
    <div class="col-md-5 card shadow-sm mb-4 mb-md-0 fff" style="border: green solid 1.5px; border-radius: 5px; margin-top: 100px; height: 450px; margin-left: 50px;">
      <img src="image/hadithCardQuran.png" alt="not found" class="img3 card shadow" style="margin-left:  160px; width: 120px; height: 125px; margin-top: -65px; border: 1.5px green solid; border-radius: 60px;">
      <h4 class="chakra-heading fff1" style="margin-left: 115px; font-weight: 700;">Hadith of the day</h4>
   
      <p class="fff1" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; text-align: end;  ">
        رسول اللہ ﷺ نے فرمایا :’’ جنت کے آٹھ دروازے ہیں ، ان میں سے ایک دروازے کا نام ’’ الریان ‘‘ ہے ، اس میں سے صرف روزہ دار ہی داخل ہوں گے ۔‘‘
      </p>
      <p class="chakra-paragraph fff1" style="font-weight: 500; margin-top: 30px;">Hadith</p>
      <p class="chakra-paragraph fff1" style="font-weight: 500; margin-top: -15px;">Mishkat ul Masabih # 1957</p>
    </div>

    <div class="col-md-5 mb-5 card shadow-sm mb-md-2 fff" style="border: green solid 1.5px; border-radius: 5px; margin-top: 100px; height: 450px; margin-left: 70px;">
      <img src="image/ayatCardQuran.png" alt="not found" class="img3" style="margin-left: 160px; width: 120px; height: 125px; margin-top: -65px; border: 1.5px green solid; border-radius: 60px;">
      <h4 class="chakra-heading fff1" style="margin-left: 115px; font-weight: 700;">Ayat of the day</h4>
    
      <p class="fff1" style="font-size: 20px; border-bottom: green 1.5px solid; padding-bottom: 30px; font-family: Arial, Helvetica, sans-serif; text-align: end;">
        یٰۤاَیُّہَا الَّذِیۡنَ اٰمَنُوۡا کُتِبَ عَلَیۡکُمُ الصِّیَامُ کَمَا کُتِبَ<br>عَلَی الَّذِیۡنَ مِنۡ قَبۡلِکُمۡ لَعَلَّکُمۡ تَتَّقُوۡنَ ۱۸۳
      </p>
      <p>اے ایمان والو! تم پر روزے فرض کردیئے گئے ہیں ، جس طرح تم سے پہلے لوگوں پر فرض کیے گئے تھے ، تاکہ تمہارے اندر تقوی پیدا ہوا</p>
      <p class="chakra-paragraph fff1" style="font-weight: 500; margin-top: 30px;">Verse</p>
      <p class="chakra-paragraph fff1" style="font-weight: 500; margin-top: -15px;">Mishkat ul Masabih # 1957</p>
    </div>
  </div>

  </div>





<!--picture-->


<img src="image/topLine.jpg" style="width: 100%; margin-top: 50px;">

<h2 class="usman1 text-center mt-3 border  rounded p-2" style="color: #006D74" id="usman">Islame Features</h2>

<!--feature-->
<div class="container  border-end"  id="raw">
  <div class="row">

   <div class="col-6">
  <h2 class="border-bottom text-white border custom-rounded" style="width: 300px; height: 70px; padding: 12px; border-radius: 100px;  background: linear-gradient(to bottom, #006D74, #02904C);">Guideness Quran</h2>

  <p style="margin-top: 30px; font-weight: 500; font-size: large; font-style: italic; margin-left: 30px; text-align: justify;">Islame Quaida with Tajweed is a comprehensive guide that offers step-by-step instructions on how to read the Quran with proper pronunciation and Tajweed rules.</p>
  <p style="margin-top: 30px; font-weight: 500; font-style: italic; margin-left: 30px; text-align: justify;">The guide is designed to be user-friendly, making it accessible to both beginners and advanced learners. With its detailed explanations and helpful examples, Islame Quaida with Tajweed is an excellent resource for anyone seeking to enhance their Quranic recitation skills.</p>
  <p style="margin-top: 30px; font-weight: 500; font-style: italic; margin-left: 30px; text-align: justify;">The guide covers all the necessary aspects of Quranic recitation, including Arabic alphabets, pronunciation rules, and Tajweed. By following the guidance provided in Islame Quaida with Tajweed, learners can improve their recitation skills and deepen their understanding of the Quran.</p>
</div>

    <div class="col-6">
      <img src="image/phoneHolyQuran.svg"  style="width: 550px; height: 600px; border: 1.5 green solid; border-radius: 20px;">
    </div>
    
  </div>
</div>
<!--two-->
<div id="section1" >
<div class="container "  id="raw">
  <div class="row" >
    <div class="col-5">
      <img src="/image/practics55.svg" style="width: 555px; height: 530px; border: 1.5 green solid; margin-top:-163px;">
    </div>

    <div class="col-6" style="margin-left: 20px;">
      <h2 class="border-bottom text-white   border custom-rounded "style=" width: 300px; height: 70px;padding-left: 40px;padding-top:12px;  border-radius: 100px;  margin-left: 150px;   background: linear-gradient( to bottom ,#006D74,#02904C); border-bottom-right-radius: 100px;  ">Practics Quran</h2>

      <p style="margin-top: 30px; font-weight: 500; font-size: large; font-style: italic;margin-left: 30px;"> Practicing Islame Quaida with Tajweed is an essential part of mastering Quranic recitation skills. The guide provides ample opportunities for learners to practice and apply their knowledge of Arabic alphabets, pronunciation rules, and Tajweed </p>
      {{-- <p style="margin-top: 30px; font-weight: 500; font-style: oblique; margin-left: 30px;">The practice exercises included in Islame Quaida with Tajweed are designed to cater to both beginners and advanced learners, allowing them to gradually build their skills and confidence. With its emphasis on practical application, learners can develop their recitation skills in a structured and systematic manner</p> --}}
      <p style="margin-top: 30px; font-weight: 500; font-style: inherit; margin-left: 30px;"> By regularly practicing Islame Quaida with Tajweed, learners can achieve mastery over the art of Quranic recitation.
      </p>
    </div>
  </div>

    <div class="col-1"></div>

  </div>
</div>
<!--three-->


<div class="container  waqas card shadow-sm" style="margin-top: 50px;" id="raw">
  <div class="row">

    <div class="col-8">
      <h2 class="border-bottom text-white   border custom-rounded "style=" width: 300px; height: 70px;padding: 12px; border-top-right-radius: 100px;  margin-left: 35px;  background: linear-gradient( to bottom ,#006D74,#02904C); border-bottom-right-radius: 100px; ">Testing Quran</h2>

      <p style="margin-top: 30px; font-weight: 500; font-size: large; font-style: italic;margin-left: 30px;"> Testing of Islame Quaida with Tajweed is an important step in assessing one's Quranic recitation skills.  </p>
      <p style="margin-top: 30px; font-weight: 500; font-style: oblique; margin-left: 30px;"> The guide offers various testing tools and assessments that can help learners identify areas where they need to improve. The testing process includes a range of exercises that test learners' knowledge of Arabic alphabets, pronunciation rules, and Tajweed</p>
      <p style="margin-top: 30px; font-weight: 500; font-style: inherit; margin-left: 30px;"> By regularly testing their skills using Islame Quaida with Tajweed, learners can track their progress and adjust their learning accordingly. The testing process provides learners with valuable feedback, enabling them to refine their recitation skills and deepen their understanding of the Quran.</p>
    </div>
    <div class="col-3">
      <img src="/image/testing5.png" style="width: 350px; height: 420px; border: 1.5 green solid; border-radius: 20px;">
    </div>
    <div class="col-1"></div>
  </div>
</div>
</div>


{{-- <img src="image/topLine.jpg" style="width: 100%; margin-top: 80px;"> --}}
{{-- <h2 class="usman1 text-center mt-3 border  rounded p-2" style="color: #006D74" id="usman">More Features</h2> --}}
<center>
<button class="btn " style="background-color: #f6f7f8; margin-top:4%;"><a href="{{url('/MoreFeature')}}" style="text-decoration: none; color:#006D74;">More Feature</a></button>
</center>

<!--more feature-->










<!--home-->







 @include('Footer-Layout')

 
</body>

</html>

 @extends('Header-Layout')
 <title>islame - Practics</title>
 <link rel="stylesheet" href="{{ asset('/css/practics.css') }}" />

 <body>
     {{-- practics --}}
     @foreach ($data as $item)
         <div class="" style="margin-top: 120px;"></div>
         <div class="listening-recording-audio-main-container">
             <div>
                 <div class="listening-recording-audio-container rounded">
                     <div>
                         <div class="listening-recording-audio-container2 text-center ">
                             <div class="audio-recording-container">
                                 <div class="audio-subtitle-container border border-light">
                                     hello how are you Lorem ipsum, dolor sit amet consectetur adipisicing
                                     elit. Tempore itaque totam magni esse, saepe nobis? Praesentium
                                     officiis facilis quam quia illo saepe dignissimos cum, mollitia error
                                     nesciunt eius dolores qui?
                                 </div>
                                 <div style="width: 15%;">
                                     <div
                                         style="
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 100%;
          padding:5px 0px;
        ">
                                         <audio src="{{ asset('audiofolder/' . $item->audio1) }}"
                                             id="myAudio1"></audio>
                                         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                             fill="currentColor"
                                             class="bi bi-play-circle fa-solid fa-play play-pause-button text-white"
                                             viewBox="0 0 16 16" onclick="func()">
                                             <path
                                                 d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                             <path
                                                 d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                                         </svg>
                                         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                             fill="currentColor"
                                             class="bi bi-pause-circle fa-solid fa-pause play-pause-button text-white"
                                             id="none" viewBox="0 0 16 16" onclick="func()">
                                             <path
                                                 d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                             <path
                                                 d="M5 6.25a1.25 1.25 0 1 1 2.5 0v3.5a1.25 1.25 0 1 1-2.5 0v-3.5zm3.5 0a1.25 1.25 0 1 1 2.5 0v3.5a1.25 1.25 0 1 1-2.5 0v-3.5z" />
                                         </svg>
                                     </div>
                                 </div>
                             </div>
                             <hr />
                             <div class="audio-listning-container">
                                 <!-- <button id="recordButton">Record</button> -->
                                 <div class="listening-subtitle-container border border-light">
                                     hello how are you Lorem ipsum dolor, sit amet consectetur adipisicing
                                     elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae,
                                     atque!lorem10
                                     Lorem ipsum dolor sit amet consectetur adipisicing!
                                 </div>
                                 <div style="width: 15%;">
                                     <div
                                         style="
          width: 100%;
          height: 100%;
          display: flex;
          flex-direction: column;
          align-items: center;
          padding: 5px 0px;
        ">
                                         <audio id="myAudio2" class="audioPlayer"></audio>
                                         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                             fill="currentColor"
                                             class="bi bi-play-circle fa-solid fa-play play-pause-button text-white my-2 disabled-icon"
                                             viewBox="0 0 16 16" onclick="func2()">
                                             <path
                                                 d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                             <path
                                                 d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                                         </svg>
                                         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                             fill="currentColor"
                                             class="bi bi-pause-circle fa-solid fa-pause play-pause-button text-white my-2"
                                             id="none" viewBox="0 0 16 16" onclick="func2()">
                                             <path
                                                 d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                             <path
                                                 d="M5 6.25a1.25 1.25 0 1 1 2.5 0v3.5a1.25 1.25 0 1 1-2.5 0v-3.5zm3.5 0a1.25 1.25 0 1 1 2.5 0v3.5a1.25 1.25 0 1 1-2.5 0v-3.5z" />
                                         </svg>

                                         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                             fill="currentColor" class="bi bi-mic-fill record-mic" viewBox="0 0 16 16"
                                             id="recordButton" onclick="recordingaudio()">
                                             <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z" />
                                             <path
                                                 d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z" />
                                         </svg>
                                         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                             fill="currentColor" class="bi bi-mic-mute-fill none mute-mic"
                                             viewBox="0 0 16 16" onclick="recordingaudio()">
                                             <path
                                                 d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4.02 4.02 0 0 0 12 8V7a.5.5 0 0 1 1 0v1zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a4.973 4.973 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4zm3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3z" />
                                             <path
                                                 d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607zm-7.84-9.253 12 12 .708-.708-12-12-.708.708z" />
                                         </svg>
                                     </div>
                                 </div>

                             </div>
                         </div>

                         <div class="progress-bar-main-container">
                             <div class="progress-bar">
                                 <div class="how-much-progress px-2 " style="
        text-align: end;"></div>
                             </div>
                         </div>

                         <div class="hint-section rounded">
                             <div class="hint-heading">Hint Section</div>
                             <div class="d-flex " style="justify-content: space-between;">
                                 <!-- <hr> -->
                                 <!-- <hr> -->
                                 <div style="border: 1px solid ; width: 40%;"></div>
                                 <div style="border: 1px solid; width: 40%;"></div>
                             </div>
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius harum molestias
                             necessitatibus
                             natus earum. Alias tenetur, maxime soluta, explicabo tempora sed aperiam recusandae dolores
                             magnam obcaecati, doloremque non minus blanditiis?

                         </div>
                         <div class="my-2" style="display: flex;
  justify-content: space-between;">
                             <button class="btn border border-light text-white" style="background: transparent;">
                                 <a href="{{ url('/Furtherdetail/' . $item->id . '/' . $item->detaillesson_id) }}"
                                     style="text-decoration: none;color:white;">
                                     Guidence</a></button>
                             <button class="btn border border-light text-white" style="background: transparent;">
                                 <a href="{{ url('/Test/' . $item->detaillesson_id) }}"
                                     style="text-decoration: none;color:white;">
                                     Testing</a></button>
                         </div>


                     </div>
                 </div>
             </div>
         </div>
     @endforeach
     @include('Footer-Layout')

     <script>
         let progress = 50;
         if (progress <= 50) {
             document.getElementsByClassName("how-much-progress")[0].style.backgroundColor = "red";
             document.getElementsByClassName("how-much-progress")[0].style.color = "white";

         } else if (progress > 50 && progress <= 80) {
             document.getElementsByClassName("how-much-progress")[0].style.backgroundColor = "yellow";
             document.getElementsByClassName("how-much-progress")[0].style.color = "black";
         } else {
             document.getElementsByClassName("how-much-progress")[0].style.backgroundColor = "green";
             document.getElementsByClassName("how-much-progress")[0].style.color = "white";

         }
         document.getElementsByClassName(
             "how-much-progress"
         )[0].style.width = `${progress}%`;
         document.getElementsByClassName(
             "how-much-progress"
         )[0].innerHTML = `${progress}%`;
         document
             .getElementsByClassName("how-much-progress")[0]
             .classList.add("text-end");
     </script>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
     <script>
         const audioPlayer = document.getElementsByClassName("audioPlayer")[0];
         const recordmic = document.getElementsByClassName("record-mic")[0];
         const mutemic = document.getElementsByClassName("mute-mic")[0];

         let mediaRecorder;
         let chunks = [];

         function recordingaudio() {
             if (mediaRecorder && mediaRecorder.state === "recording") {
                 mediaRecorder.stop();
                 //   recordButton.textContent = "Record";
                 mutemic.classList.add("none");
                 recordmic.classList.remove("none");
                 recordmic.setAttribute("id", "recordButton");
                 mutemic.removeAttribute("id");
             } else {
                 startRecording();
                 //   recordButton.textContent = "Stop";
                 mutemic.classList.remove("none");
                 recordmic.classList.add("none");
                 recordmic.removeAttribute("id");
                 mutemic.setAttribute("id", "recordButton");
             }
         }

         function startRecording() {
             navigator.mediaDevices
                 .getUserMedia({
                     audio: true
                 })
                 .then((stream) => {
                     mediaRecorder = new MediaRecorder(stream);
                     mediaRecorder.ondataavailable = (event) => {
                         chunks.push(event.data);
                     };

                     mediaRecorder.onstop = () => {
                         document.getElementsByClassName("fa-play")[1].classList.remove('disabled-icon');
                         const audioBlob = new Blob(chunks, {
                             type: "audio/wav"
                         });
                         const audioUrl = URL.createObjectURL(audioBlob);
                         audioPlayer.src = audioUrl;
                         chunks = [];
                     };

                     mediaRecorder.start();
                 })
                 .catch((error) => {
                     console.error("Error accessing microphone:", error);
                 });
         }
     </script>
     <script>
         let audio1 = document.getElementById("myAudio1");

         var playPauseButton = document.querySelector(".play-pause-button");

         audio1.addEventListener("timeupdate", function() {
             var currentTime = audio1.currentTime;

             if (Math.floor(audio1.duration) == Math.floor(currentTime)) {
                 document.getElementsByClassName("fa-pause")[0].style.display = "none";
                 document.getElementsByClassName("fa-play")[0].style.display = "block";
             }


         });

         function func() {
             if (audio1.paused) {
                 console.log("play");
                 document.getElementsByClassName("fa-play")[0].style.display = "none";
                 audio1.play();
                 document.getElementsByClassName("fa-pause")[0].style.display =
                     "block";
             } else {
                 console.log("Pouse");
                 document.getElementsByClassName("fa-pause")[0].style.display = "none";
                 audio1.pause();

                 document.getElementsByClassName("fa-play")[0].style.display = "block";
             }
         }
     </script>

     <script>
         let audio = document.getElementById("myAudio2");

         // var playPauseButton = document.querySelector(".play-pause-button");

         audio.addEventListener("timeupdate", function() {
             var currentTime = audio.currentTime;

             if (Math.floor(audio.duration) == Math.floor(currentTime)) {
                 document.getElementsByClassName("fa-pause")[1].style.display = "none";
                 document.getElementsByClassName("fa-play")[1].style.display = "block";
             }

         });

         function func2() {
             if (audio.paused) {
                 // console.log("play");
                 document.getElementsByClassName("fa-play")[1].style.display = "none";
                 audio.play();
                 document.getElementsByClassName("fa-pause")[1].style.display =
                     "block";
             } else {
                 // console.log("Pouse");
                 document.getElementsByClassName("fa-pause")[1].style.display = "none";
                 audio.pause();
                 document.getElementsByClassName("fa-play")[1].style.display = "block";
             }
         }
     </script>
     {{-- practics --}}




 </body>

 </html>

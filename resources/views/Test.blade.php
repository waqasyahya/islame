@extends('Header-Layout')
<title>islame-Testing</title>
<link rel="icon" type="image/png" sizes="16x16" href="/image/logo3.png">
<link rel="stylesheet" href="{{ asset('css/testing.css') }}" />

<style>
    .options-container {
        display: flex;
        flex-direction: row;
    }

    .option-box {
        flex: 1;
        padding: 10px;
        border: 3px solid white;
        text-align: center;
        cursor: pointer;
        height: 100px !important;
        margin-top: 50px;
        color: white;
        font-size: 30px;
    }

    .correct-answer {
        background-color: #00FF00;
        /* Green for correct answer */
    }

    .wrong-answer {
        background-color: red;
    }
</style>

<div class="container mcq-main-container  ">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 rounded card shadow-lg"
            style="
          margin-top: 100px;
          background: linear-gradient(to bottom, #006d74, #02904c);

        ">
            @foreach ($data as $item)
                <div class="audio-player">
                    <div class="volume-control">
                        <div style="margin-top: 30px; border:#006d74 3px solid;border-radius:5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-play-circle fa-solid fa-play play-pause-button text-white"
                                viewBox="0 0 16 16" onclick="func()">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-pause-circle fa-solid fa-pause play-pause-button text-white"
                                viewBox="0 0 16 16" id="none" onclick="func()">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M5 6.25a1.25 1.25 0 1 1 2.5 0v3.5a1.25 1.25 0 1 1-2.5 0v-3.5zm3.5 0a1.25 1.25 0 1 1 2.5 0v3.5a1.25 1.25 0 1 1-2.5 0v-3.5z" />
                            </svg>
                        </div>
                    </div>
                    <audio src="{{ asset('audiofolder/' . $item->audio1) }}" id="myAudio"></audio>
                </div>

                <form method="POST" action="/quiz/submit">
                    @csrf
                    <input type="hidden" name="testing_id" value="{{ $item->id }}" />
                    <div class="options-container">
                        <div class="option-box" data-answer="{{ $item->option_1 }}">
                            {{ $item->option_1 }}
                        </div>
                        <div class="option-box" data-answer="{{ $item->option_2 }}">
                            {{ $item->option_2 }}
                        </div>
                    </div>
                    <div class="options-container">
                        <div class="option-box" data-answer="{{ $item->option_3 }}">
                            {{ $item->option_3 }}
                        </div>
                        <div class="option-box" data-answer="{{ $item->option_4 }}">
                            {{ $item->option_4 }}
                        </div>
                    </div>
                    <br />
                </form>
            @endforeach
        </div>
        <div class="col-1"></div>
    </div>
</div>




<center>
<button class="button-for-practice btn border border-dark" style="margin-top: 30px;" >
    <a href="{{url('/practic1/'.$item->detaillesson_id)}}" style="text-decoration: none; color:green;"> Practics</a>
</button>
</center>
@include('Footer-Layout')

<script>
    var correctAnswers = [
        @foreach ($data as $item)
            '{{ App\Models\Answer::where('testing_id', $item->id)->first()->correct_option }}',
        @endforeach
    ];

    $(document).ready(function() {
        $('.option-box').click(function() {
            var selectedAnswer = $(this).data('answer');

            // Check if the selected answer is correct or not
            if (correctAnswers.includes(selectedAnswer)) {
                $(this).addClass('correct-answer');
            } else {
                $(this).addClass('wrong-answer');
            }
        });
    });
</script>

<script>
    var audio = document.getElementById("myAudio");
    var playPauseButton = document.querySelector(".play-pause-button");
    var volumeUpButton = document.querySelector(".volume-up-button");
    var volumeDownButton = document.querySelector(".volume-down-button");

    audio.addEventListener("timeupdate", function() {
        var currentTime = audio.currentTime;
        if (Math.floor(audio.duration) == Math.floor(currentTime)) {
            document.getElementsByClassName("fa-pause")[0].style.display = "none";
            document.getElementsByClassName("fa-play")[0].style.display = "block";
        }
    });

    function func() {
        if (audio.paused) {
            document.getElementsByClassName("fa-play")[0].style.display = "none";
            audio.play();
            let element = document.getElementsByClassName("audio-player")[0];
            element.classList.add("playing");
            document.getElementsByClassName("fa-pause")[0].style.display = "block";
        } else {
            document.getElementsByClassName("fa-pause")[0].style.display = "none";
            audio.pause();
            let element = document.getElementsByClassName("audio-player")[0];
            element.classList.remove("playing");
            document.getElementsByClassName("fa-play")[0].style.display = "block";
        }
    }
</script>



</body>

</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>islame</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/image/logo3.png">
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/832a5a0186.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('css/Headfoot.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <style>
      @keyframes shake {
  0% { transform: translateX(0); }
  25% { transform: translateX(5px); }
  50% { transform: translateX(-5px); }
  75% { transform: translateX(5px); }
  100% { transform: translateX(-5px); }
}
.shake-button {
  animation: shake 2s ease infinite; }
    </style>
  </head>

  <body>
    {{-- Website Loaded --}}
     {{-- loaded --}}
     {{-- <div class="loader-container">
      <div class="button-container">
          <div class="button-text"> Islame</div>
          <div class="circle"></div>
          <div class="circle-reverse"></div>
      </div>
  </div> --}}
  {{-- loaded --}}
    {{-- Website Loaded --}}
    <!--header-->
    <header
      class="header fixed-top flex-fill"
      style="
        background: linear-gradient(to bottom, #006d74, #02904c);
        height: 83px;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
      "
    >
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <div
              id="mySidepanel"
              style="background: linear-gradient(to top, #006d74, #02904c)"
              class="sidepanel"
            >
              <img
                class="img4"
                src="/image/logo3.png"
                style="
                  width: 45px;
                  height: 45px;
                  border-radius: 30px;

                  margin-left: 70px;
                "
                alt=""
              />

              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                >&times;</a
              >

              <hr />
              <a href="{{url('/')}}" style="color: white">Home</a>
              <a href="{{url('/About')}}" style="color: white">About</a>
              <a href="{{url('/Blog')}}" style="color: white">Blog</a>
              <a href="{{url('/term-and-condition')}}" style="color: white"
                >Condition</a
              >
              <a href="{{url('/privecy-policy')}}" style="color: white">Policy</a>
              <a
                class="nav-link mobile-resp"
                style="color: white"
                aria-current="page"
                href="{{url('/lesson')}}"
                >Read</a
              >

              <a
                class="nav-link mobile-resp"
                style="color: white"
                href="{{url('/Quran')}}"
                >Quran</a
              >
            </div>
            <button
              class="openbtn"
              style="
                background: linear-gradient(to bottom, #006d74, #02904c);
                font-size: 35px;
                margin-top: 10px;
              "
              onclick="openNav()"
            >
              &#9776;
            </button>
            <button
              class="navbar-toggler btn-lg"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            ></button>
            <img
              class="img4"
              src="/image/logo3.png"
              style="
                width: 45px;
                height: 45px;
                border-radius: 30px;
                color: blue;
                margin-top: -25px;
                margin-left: 6px;
              "
              alt=""
            />
          </div>

          <div class="col-5">
            <center>
              <nav class="navbar navbar-expand-lg" style="margin-left: 50px">
                <div class="navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown me-5">
                      <a
                        id="nav1"
                        class="nav-link home1 dropdown-toggle computer-resp"
                        style="
                          font-size: 23px;
                          margin-top: 17px;
                          font-weight: 500;
                          color: white;
                        "
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        onclick="active('nav1')"
                      >
                        Home
                      </a>
                      <ul class="dropdown-menu">
                        <center>
                          <li>
                            <a class="dropdown-item" href="{{url('/')}}"
                              >Home</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{url('/About')}}"
                              >About</a
                            >
                          </li>

                          <li>
                            <a class="dropdown-item" href="{{url('/Blog')}}"
                              >Blog
                            </a>
                          </li>
                        </center>
                      </ul>
                    </li>
                    <li class="nav-item me-5 ww" onclick="active('nav2')">
                      <a
                        class="nav-link computer-resp"
                        id="nav2"
                        style="
                          font-size: 23px;
                          margin-top: 17px;
                          font-weight: 500;
                          color: white;
                        "
                        aria-current="page"
                        href="{{url('/lesson')}}"
                        >Learn</a
                      >
                    </li>
                    <li class="nav-item me-5 ww" onclick="active('nav3')">
                      <a
                        class="nav-link computer-resp"
                        id="nav3"
                        style="
                          font-size: 23px;
                          margin-top: 17px;
                          font-weight: 500;
                          color: white;
                        "
                        href="{{url('/Quran')}}"
                        >Read</a
                      >
                    </li>
                  </ul>
                </div>
              </nav>
            </center>
          </div>
          <div class="col-3">
            <button
              class="btn btn-sm float-end download   shake-button"
              style="
                background-color: white;
                margin-top: 23px;
                border: #006d74 solid 1px;
                border-radius: 30px;
                margin-left: 75px;
                width: 185px;
                font-size: 22px;
                font-weight: 500;
                height: 52px;
                color: #069999;
              "
            >
              Download
            </button>
          </div>
        </div>
      </div>
    </header>


    <script>
      function active(a) {
        document.getElementById("nav1").classList.remove("active");
        document.getElementById("nav2").classList.remove("active");
        document.getElementById("nav3").classList.remove("active");
        document.getElementById(a).classList.add("active");
      }
    //  side navbar in header
      function openNav() {
          document.getElementById("mySidepanel").style.width = "200px";
      }
      function closeNav() {
          document.getElementById("mySidepanel").style.width = "0";
      }
        //  side navbar in header
        // website Loader
      window.addEventListener('DOMContentLoaded', function() {
          var loaderContainer = document.querySelector('.loader-container');
          setTimeout(function() {
              loaderContainer.style.opacity = '0';
              setTimeout(function() {
                  loaderContainer.style.display = 'none';
                  document.body.style.overflow = 'auto';
              }, 200);
          }, 600);
      });
        // website Loader
  </script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

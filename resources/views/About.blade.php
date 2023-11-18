@extends('Header-Layout')
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

 <link rel="stylesheet" href="{{ asset('/css/About.css') }}" />
  

    <title>islame- About</title>
  
<style>

  </style>
  
</head>
<body >
  <script>
    AOS.init();
 
  </script>
    <div data-aos="fade-in"  style="max-width: 100%; width: 100%;">

    <div class="about-pageheading-section" style="background: linear-gradient(to top, #006d74, #02904c);height: auto; width: 100%; margin-top:80px; text-align: center; display: flex; align-items: center; justify-content: center; padding: 
    0px 5px;">
        <span style="display: flex; flex-direction: column; align-items: center; font-weight: 400; font-size: 67px; color: white; line-height: 80px; padding-bottom: 40px; padding-top: 80px;" class="all-youneed-to-know-about-islam">
            All You Need To<br>
            <div style="font-size: 82px; font-weight: 500;" class="about-page-main-heading">Know About Islame</div>
            <span style="font-size: 22px; font-weight: 300;" class="about-page-main-heading">  Learn everything there is to know about the dedicated team behind the Islame app and its successes</span>
        </span>
    </div>
    
    </div> 
    
    

@foreach ($data as $about)
    
    <div class="container-fluid">

    </div>
    <div data-aos="fade-in"  style="max-width: 100%; width: 100%;">
    <div class="container-fluid  card shadow-lg" style="margin-top: 50px; width:100%;">
        <center>
            <span class="shadow-lg  hw " style=" width: 100%; height: 90px;font-weight: 600; border-radius: 20px;padding-top: 30px; font-size: 50px;">{{$about->Heading}}</span>
            </center>
        <div class="w5  row flex-column-query">

            <div class="col-7 pleft-70" style="max-width: 100%;">
                <p class="bb rem1" style="font-size: 23px; text-align: justify; font: 1.4em ;margin-top: 20px; color: rgb(13, 1, 1);font-weight: 400;">

                    {{$about->detailpara}}
                </p>
            </div>
            <div class="col-5 pright-70" style="display: flex;align-items: center; max-width: 90%;">
                <img class="bb1"   src="{{ asset('image/' . $about->image) }}" class="card shadow-lg" style="height: 93%;  width: 80%; border: #02904C solid; border-radius: 15px; margin-top: 20px;">
            </div>
        </div>
    </div>
    </div>
    
    
    <img class="img  " src="image/topLine.jpg" style="width: 100%; margin-top: 50px;">

@endforeach


    <div class="  card  shadow-lg   container-fluid" style="background-color: rgb(242, 247, 247);">
        <h2 class="hw" style="text-align: center; font-weight: 700; margin-top: 20px;  font-size: 60px; margin-bottom: 10px;width: 100% !important;"> Meet Our Founder</h2>
        <h2 class="hw" style="text-align: center; font-weight: 400; margin-top: 1px;  font-size: 32px; margin-bottom: 20px; width: 100% !important;"> ★ Qamar Chishti ★</h2>
        <div class="w5   row flex-column-query">
            <div class=" col-7 pleft-70" style="max-width: 100%;">
              <p class="bb rem1" style="font-weight: 500; margin-top: 40px;text-align: justify;color: rgb(13, 1, 1);font-weight: 400;   font-size: 25px;">"The founders of Islame, Qamar Chishti, Waqas Yahya (a full-stack developer), and Zia ur Rehman (an expert in digital marketing), are dedicated individuals who share a passion for enhancing Islamic education through technology. Alongside their team of experienced developers and Islamic scholars, they have worked tirelessly to ensure that Islame meets the highest standards of quality and accuracy. Their commitment to merging technology and spirituality is evident in the success of Islame. With their expertise and dedication, Islame continues to grow and empower Muslims worldwide in their spiritual journey 
            </div>
            <div class="  col-5 " style="display: flex;justify-content: center;align-items: center; max-width: 100%;">
                <!-- image/QAMER CHISHTI.jpg -->
                
                <img class="bb1" src="/image/QAMER CHISHTI.jpg" alt="not found" style="width: 75%; height: 90%; border:5px #02904C solid; border-radius: 20px;margin-top:40px ;">
            </div>
        </div>
    </div>
    <img src="image/topLine.jpg" style="width: 100%;">
    <!--our team-->

    <div class="container " style="margin-top: 20px; width: 100%;" >
      <center>
      <span class="shadow-lg hw" style="margin-top: 20px; color: black; margin-bottom: 30px; font-size: 50px;  width: 100%; border-radius: 20px;">Our Islame Team</span>
      </center>
      <div class="row flex-column-query2" style="max-width: 100%; justify-content: space-around !important;">
          <div class="my-2 " >
            <div class="container-fluid  card shadow-lg our-team-member" style="width: 350px; border-radius: 20px;">
              <div class="team-boxes " style="border: #02904C; border-radius: 40px; margin-top: 20px;" >
                  <div class="team-thumb overlay-image view-overlay" style="margin:auto ">
                    <!-- image/QAMER CHISHTI.jpg -->
                    
                      <img src="/image/QAMER CHISHTI.jpg" alt="not found" style="width: 250px; height: 250px;">
                      <div class="clear">
                      </div>
                      <div class="mask team_quote">
                          <div class="port-zoom-link">
                              <p>
                                  <span class="accentcolor" style="font-weight:700;">Qamar Chisti</span>
                                  <br>
                                  <i>"Founder and CEO of the Taleeme and Islame App.</i>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="team-info">
                      <h2>QAMER CHISHTI</h2>
                      <p>
                      FOUNDER AND CEO.
                      </p>
                  </div>
                  <div class="separator">
                  </div>
                  <div class="team-social">
                      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                          </a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg></a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                      </a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg></a>
                  </div>
              </div>
          </div>
          </div>
          <div class="my-2">
            <div class="container-fluid  card shadow-lg our-team-member" style="width: 350px; border-radius: 20px;">
            <div class="team-boxes" style="border: #02904C; margin-top: 20px;  border-radius: 40px;">
              <div class="team-thumb overlay-image view-overlay" style="margin:auto; ">
                <!-- image/WAQAS YAHYA.jpg -->
                
                  <img src="/image/WAQAS YAHYA.jpg" alt="not found" style="width: 250px; height: 250px;">

                      <div class="clear">
                      </div>
                      <div class="mask team_quote">
                          <div class="port-zoom-link">
                              <p>
                                  <span class="accentcolor" style="font-weight:700;">Waqas Yahya</span>
                                  <br> "2 year experience in Full-Stack Development"
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="team-info">
                      <h2>MUHAMMAD WAQAS YAHYA</h2>
                      <p>
                          FULL STACK DEVELOPER .
                      </p>
                  </div>
                  <div class="separator">
                  </div>
                  <div class="team-social">
                      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                          </a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg></a>
                    
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                      </a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg></a>
                  </div>
              </div>
          </div>
          </div>
          <div class="my-2">
            <div class="container-fluid  card shadow-lg our-team-member" style="width: 350px; border-radius: 20px;">
            <div class="team-boxes" style="border: #02904C; border-radius: 40px; margin-top: 20px;">
              <div class="team-thumb overlay-image view-overlay" style="margin:auto ">

                <!-- image/ZIA ILYAS.jpg -->
                
                  <img src="/image/ZIA ILYAS.jpg" alt="not found" style="width: 250px; height: 250px;">
                      <div class="clear">
                      </div>
                      <div class="mask team_quote">
                          <div class="port-zoom-link">
                              <p>
                                  <span class="accentcolor" style="font-weight:700;">ZIA-UR-REHMAN</span>
                                  <br> "1 Year Experience in Digital Marketing and Management"
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="team-info">
                      <h2>ZIA-UR-REHMAN</h2>
                      <p>
                        DIGITAL MARKETING MANAGER
                      </p>
                  </div>
                  <div class="separator">
                  </div>
                  <div class="team-social">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                      </a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg></a>
                 

                          </a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                      </a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg></a>

                  </div>
              </div>
          </div>
      </div>
  </div>
    </div>
  </div>

  @include('Footer-Layout')


   







  


  
</body>

</html>
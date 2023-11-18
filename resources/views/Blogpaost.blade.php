@extends('Header-Layout') 
@foreach($data as $post)
<title>islame - {{$post->tittle}}</title>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <style>
      .blog-post-main-container {
        display: flex;
        justify-content: space-around;
        margin-top: 60px;
      }
    
      .img-container {
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .form-for-blog-post {
        width: 30%;
      }
      @media (min-width: 801px) and (max-width: 1100px) {
      }
      @media (min-width: 501px) and (max-width: 800px) {
        .blog-post-main-container {
          flex-direction: column;
        }
        .img-container {
          width: 100%;
          padding: 0px 10px;
        }
        .form-for-blog-post {
          width: 100%;
        }
        .img-container > img {
          height: 390px !important;
          width: 95% !important;
        }

        .form-for-blog-post > div {
          margin-top: 20px !important   ;
        }
      }

      @media (min-width: 250px) and (max-width: 500px) {
        .blog-post-main-container {
          flex-direction: column;
        }
        .img-container {
          width: 100%;
          padding: 0px 10px;
        }
        .form-for-blog-post {
          width: 100%;
        }
        .img-container > img {
          height: 200px !important;
          width: 95% !important;
        }
        .img-container > p {
          font-size: 14px !important;
        }
        .form-for-blog-post > div {
          margin-top: 20px !important   ;
        }
        .blog-post-main-heading > img {
          height: 90px !important;
        }
        .blog-post-main-heading > center > h1 {
          font-size: 1.7rem !important;
          margin-top: -65px !important;
        }
      }


    </style>
</head>
<body>
   
    
      <div
      class="container-fluid blog-post-main-heading"
      style="margin-top: 90px"
    >
      <img
      src="/image/blog123.jpg"
        style="height: 130px; width: 100%"
      />
      <center>
        <h1
          style="
            margin-top: -100px;
            color: white;
            font-weight: 600;

            font-size: 40px;
          "
        >
          {{$post->tittle}}
        </h1>
      </center>
    </div>
    <div class="container-fluid blog-post-main-container">
      <div class="img-container">
        <img
        src="{{ asset('Blogpostimage/' . $post->image) }}"
          alt="img here"
          style="height: 450px; width: 95%; border-radius: 10px;margin-top:30px;"
        />
        <p
          style="
            font-size: 18px;
            margin-top: 30px;
            text-align: justify;
            direction: rtl;
            overflow: visible;
            text-overflow: ellipsis;
            max-height: 300px;
          "
        >
          {{$post->Description1}} 
       
        </p>
        <p
          style="
            font-size: 18px;
            margin-top: 30px;
            text-align: justify;
            direction: rtl;
            overflow: visible;
            text-overflow: ellipsis;
            max-height: 300px;
          "
        >
          {{$post->Description2}} 
        
        </p>
        <p
          style="
            font-size: 18px;
            margin-top: 30px;
            text-align: justify;
            direction: rtl;
            overflow: visible;
            text-overflow: ellipsis;
            max-height: 300px;
          "
        >
          {{$post->Description3}}
        
        </p>
      </div>
      <div class="form-for-blog-post" style="margin-top: 30px;">
        <div
          class=""
          style="border: #006d74 2px solid; width: 100%; height: auto"
        >
          <h3
            class="blog-post-form-heading"
            style="
              background-color: #02904c;
              font-weight: 600;
              color: white;
              padding: 10px 0px;
              text-align: center;
              width: 100%;
            "
          >
            you can feedback
          </h3>
          <form class="container" enctype="multipart/form-data">
            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input
                type="text"
                class="form-control"
                id="full_name"
                name="full_name"
                required
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                required
              />
            </div>
            <div class="form-group">
              <label for="feedback" style="display: block">Feedback</label>
              <textarea
                class="form-control"
                id="feedback"
                name="feedback"
                rows="7"
                required
                style="margin-left: auto; display: block"
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-2">Submit</button>
          </form>
        </div>
      </div>
    </div>








  





      @endforeach
   @include('Footer-Layout')

</body>
</html>

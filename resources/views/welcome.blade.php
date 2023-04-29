<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AI Models</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Oswald:300,400,500,700");

@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800");

.gr-1 {
  background: linear-gradient(170deg, #01e4f8 0%, #3780b4 100%);
}
.gr-2 {
  background: linear-gradient(170deg, #b4ec51 0%, #429321 100%);
}
.gr-3 {
  background: linear-gradient(170deg, #c86dd7 0%, #3023ae 100%);
}
.gr-4 {
  background: linear-gradient(170deg, #52446c 0%, #b4aeea 100%);
}
.gr-5 {
  background: linear-gradient(170deg, #c86dd7 0%, #3023ae 100%);
}
.gr-6 {
  background: linear-gradient(170deg, #c86dd7 0%, #3023ae 100%);
}

* {
  transition: 0.5s;
}

.h-100 {
  height: 100vh !important;
}

.h-10 {
  margin-top: -650px;
}
.h-2 {
  margin-top: 20px;
}
.align-middle {
  position: relative;
  top: 10%;
  transform: translateY(-10%);
}

.column {
  /* margin-top: 3rem; */
  padding-left: 2rem;
  
}
.column:hover {
padding-left: 0;
}
.column .card .txt {
    margin-left: 1rem;
}
h1,
p {
color: rgba(255, 255, 255, 1);
opacity: 1;
}
a {
    color: rgba(255, 255, 255, 1);
    text-decoration: none;
}
a:after {
    width: 10%;
    }
.card {
  min-height: 170px;
  margin: 0;
  padding: 1.7rem 1.2rem;
  border: none;
  border-radius: 0;
  color: rgba(0, 0, 0, 1);
  letter-spacing: 0.05rem;
  font-family: "Oswald", sans-serif;
  box-shadow: 0 0 21px rgba(0, 0, 0, 0.27);
  .txt {
    margin-left: -3rem;
    z-index: 1;
    h1 {
      font-size: 1.5rem;
      font-weight: 300;
      text-transform: uppercase;
    }
    p {
      font-size: 0.7rem;
      font-family: "Open Sans", sans-serif;
      letter-spacing: 0rem;
      margin-top: 33px;
      opacity: 0;
      color: rgba(255, 255, 255, 1);
    }
  }
  a {
    z-index: 3;
    font-size: 0.7rem;
    color: rgba(0, 0, 0, 1);
    margin-left: 1rem;
    position: relative;
    bottom: -0.5rem;
    text-transform: uppercase;
    &:after {
      content: "";
      display: inline-block;
      height: 0.5em;
      width: 0;
      margin-right: -100%;
      margin-left: 10px;
      border-top: 1px solid rgba(255, 255, 255, 1);
      transition: 0.5s;
    }
  }
}

    </style>

</head>
<body>
    <div class="container h-100">
        <div class="row align-middle">
            <div class="col-md-6 col-lg-4 column">
            <a href="{{route('writePage')}}">
                <div class="card gr-1">
                    <div class="txt">
                        <h1>Searching Bot</h1>
                        <p>Write you title artical and problem-solving</p>
                    </div>
                    <div class="ico-card">
                        <i class="fa fa-rebel"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 column">
              <a href="{{route('imagePage')}}">
            <div class="card gr-2">
              <div class="txt">
                <h1>Generate AI Images</h1>
                <p>AI system that can create realistic images and art from a description in natural language</p>
              </div>
              <div class="ico-card">
                <i class="fa fa-codepen"></i>
              </div>
            </div>
              </a>
          </div>
          <div class="col-md-6 col-lg-4 column">
            <a href="{{route('grammar-correctionPage')}}">
            <div class="card gr-3">
              <div class="txt">
                <h1>Grammar correction</h1>
                <p>Corrects sentences into standard English.</p>
              </div>
              <div class="ico-card">
                <i class="fa fa-empire"></i>
              </div>
            </div>
          </a>
          </div>
      
        </div>
    </div>    
    <div class="container h-10">
      <div class="row align-middle">
          <div class="col-md-6 col-lg-4 column">
          <a href="{{route('extract-contact-informationPage')}}">
              <div class="card gr-3">
                  <div class="txt">
                      <h1>Extract contact information</h1>
                      <p>Extract contact information from a block of text.</p>
                  </div>
                  <div class="ico-card">
                      <i class="fa fa-rebel"></i>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-md-6 col-lg-4 column">
            <a href="{{route('keywordsPage')}}">
          <div class="card gr-1">
            <div class="txt">
              <h1>Keywords</h1>
              <p>Extract keywords from a block of text</p>
            </div>
            <div class="ico-card">
              <i class="fa fa-codepen"></i>
            </div>
          </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 column">
          <a href="{{route('laravel-problem-solvingPage')}}">
          <div class="card gr-2">
            <div class="txt">
              <h1>Laravel Problem Solving</h1>
              <p>solve Laravel problems.</p>
            </div>
            <div class="ico-card">
              <i class="fa fa-empire"></i>
            </div>
          </div>
        </a>
        </div>
    
      </div>
  </div>
  <div class="container h-2">
    <div class="row align-middle">
        {{-- <div class="col-md-6 col-lg-4 column">
        <a href="{{route('image-variationPage')}}">
            <div class="card gr-2">
                <div class="txt">
                    <h1>Create image variation</h1>
                    <p>Creates a variation of a given image.</p>
                </div>
                <div class="ico-card">
                    <i class="fa fa-rebel"></i>
                    </div>
                </div>
            </a>
        </div> --}}
        {{-- <div class="col-md-6 col-lg-4 column">
          <a href="{{route('keywordsPage')}}">
        <div class="card gr-1">
          <div class="txt">
            <h1>Keywords</h1>
            <p>Extract keywords from a block of text</p>
          </div>
          <div class="ico-card">
            <i class="fa fa-codepen"></i>
          </div>
        </div>
          </a>
      </div>
      <div class="col-md-6 col-lg-4 column">
        <a href="{{route('laravel-problem-solvingPage')}}">
        <div class="card gr-2">
          <div class="txt">
            <h1>Laravel Problem Solving</h1>
            <p>solve Laravel problems.</p>
          </div>
          <div class="ico-card">
            <i class="fa fa-empire"></i>
          </div>
        </div>
      </a>
      </div> --}}
  
    </div>
</div>
</body>
</html>
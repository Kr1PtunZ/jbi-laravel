<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ЖБИ УРАЙ</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
        <!-- font awesome style -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

        <!-- Custom styles for this template -->

        <link href="{{asset('css/style.css')}}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />




</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Номер : +79088854652
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : jbiurai@yandex.ru
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{route('index')}}">
              <span>
                ЖБИ УРАЙ
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('index')}}">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">О нас</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.blade.php">Оставить заявку</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('service')}}">Сертификаты</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail-box">
              <h1>
                Цех Железобетонных Изделий в Урае
              </h1>
              <p>
                Цех ЖБИ в городе Урай
              </p>
              <a href="#form">
                Оставить заявку
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="{{asset('storage/slider-img.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->

  <section class="about_section layout_padding-bottom" style="margin-top: 100px">
    <div class="container" >

      <div class="owl-carousel">
        <div class="carousel-element"><h3>Готовые решения</h3><img src="{{asset('storage/1.jpg')}}" alt=""></div>
        <div class="carousel-element"><h3>Фундамент</h3><img src="{{asset('storage/2.jpeg')}}" alt=""></div>
        <div class="carousel-element"><h3>Стяжка</h3><img src="{{asset('storage/4.jpg')}}" alt=""></div>
        <div class="carousel-element"><h3>Фасад</h3><img src="{{asset('storage/5.jpg')}}" alt=""></div>
      </div>

    </div>
  </section>

  <!-- end about section -->


  <!-- professional section -->

  <section class="professional_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('storage/professional-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="detail-box">
            <h2>
              Мы предоставляем <br>
              Высококачественные материалы для строительства
            </h2>
            <p>
              randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All randomised words which don't look even slightly
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end professional section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="{{asset('storage/s1.png')}}" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Maintenance
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="{{asset('storage/s2.png')}}" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Electrical
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="{{asset('storage/s3.png')}}" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Plumbing
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>
  <a href="" name="form"></a>

  <section class="contact_section layout_padding">
    <div class="container">

      <div class="header_container" >
        <h2>
          Отсавьте заявку и мы свяжемся с вами
        </h2>
      </div>
      <div class="row" >
        <div class="col-md-6">

            @if(!empty($errors))
                @for($i = 0; $i < count($errors); $i++)
                    <p style="border: 1px solid red; border-radius: 10px; padding: 5px">{{$errors[$i]}}</p>
                @endfor
            @endif
          <form action="{{route('createRequest')}}" method="post" id="myForm">
              @csrf
            <div>
              <input id="nameField" type="text" name="requestUsername" placeholder="Имя" style="color: black">
            </div>
            <div>
              <input id="phone" name="requestPhoneNumber" type="tel" maxlength="12"
                     required="required"
                     placeholder="Номер телефона"
                     pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" style="color: black">
            </div>
            <div>
              <input id="email" type="email" name="requestEmail" placeholder="Email" style="color: black"  >
            </div>
            <div>
              <input type="text" name="requestText" class="message-box" placeholder="Сообщение" style="color: black">
            </div>
            <div class="d-flex ">
              <button>
                Оставить заявку
              </button>
            </div>
          </form>
        </div>

        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
<div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/zhbi/178823778524/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">ЖБИ</a><a href="https://yandex.ru/maps/11192/uray/category/precast_concrete/184107681/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">ЖБИ в Урае</a><iframe src="https://yandex.ru/map-widget/v1/?ll=64.734342%2C60.146147&mode=poi&poi%5Bpoint%5D=64.734342%2C60.146147&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D178823778524&z=16.03" width="500" height="480" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <h4>
        Get In Touch
      </h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="info_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem Ipsum is simply dummy text
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p>
                      +02 1234567890
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <p>
                      demo@gmail.com
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-box">
      <h4>
        Follow Us
      </h4>
      <div class="box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>



  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap_css.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  <script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel();
      nav = false;
      lazyLoad = true;
      loop = true;
      autoWidth = true;
      autoplay = true;
      autoplaySpeed = 1000;
      center = true;
    });
  </script>
</body>

</html>

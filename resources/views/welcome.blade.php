@extends('master')
@section('content')
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Cover -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-3 text-center text-sm-start">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <h1>Монголын анхны №1 <div></div> iPhone & iPad <span class="text-warning">код гаргах үйлчилгээ</span></h1>
                    <p class="lead my-4">
                        Activation Lock(Hello), Passcode болон iDтай, Ашиглаж болдог iD гаргана
                    </p>
                    <a href="https://www.facebook.com/messages/t/icloudgargana/" target="_blank">
                        <button class="btn btn-warning btn-lg">БИДЭНТЭЙ ХОЛБОГДОХ</button>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 text-center">
                    <img class="home-img" src="images/hello.png" alt=""/>
                </div>
                <div class="col-lg-2 col-md-2 text-center">
                    <img class="home-img" src="images/passcode.png" alt=""/>
                </div>
                <div class="col-lg-2 col-md-2 text-center">
                    <img class="home-img" src="images/id.png" alt=""/>
                </div>
            </div>
        </div>
    </section>
 

    <!-- Boxes -->

    <section id="apple" class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card-body bg-dark text-light">
                        <div class="h1 mb-3">
                        <i class="bi bi-apple"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Activation Lock
                        </h3>
                        <p class="card-text">
                            Hello болсон утас 5s - Х, 2019 оноос өмнөх үеийн iPadууд гаргах боломжтой.
                           <span class="text-warning">Үйлдлийн систем буюу iOS нь 15 болсон бол гарах боломжгүй.</span> 
                        </p>
                        <a href="https://www.facebook.com/messages/t/icloudgargana/" class="btn btn-primary">Бидэнтэй холбогдох</a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body bg-warning text-dark">
                        <div class="h1 mb-3">
                        <i class="bi bi-apple"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Passcode + iD
                        </h3>
                        <p class="card-text">
                            Ямар моделын утас болон Үйлдлийн систем(iOS) нь хэдтэй байгаагаас хамаарна.
                            <span class="text-light">Үйлдлийн систем буюу iOS нь 15 болсон бол гарах боломжгүй.</span> 
                        </p>
                        <a href="https://www.facebook.com/messages/t/icloudgargana/" class="btn btn-dark">Бидэнтэй холбогдох</a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card-body bg-dark text-light">
                        <div class="h1 mb-3">
                        <i class="bi bi-apple"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Ашиглаж болдог iD
                        </h3>
                        <p class="card-text">
                            Бидэнд утасны imei кодоо явуулсан шалгуулах боломжтой.
                            <span class="text-warning">Блоклодсон iD гарахгүй.</span>
                        </p>
                        <a href="https://www.facebook.com/messages/t/icloudgargana/" class="btn btn-primary">Бидэнтэй холбогдох</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Learn Section-->
    
    <section id="find" class="p-5 bg-dark" >
        <div class="container">
            <div class="row align-items-center justify-content-between text-white">
                <div class="col-md">
                    <img src="images/find.png" class="img-fluid" alt="">
                </div>
                <div class="col-md">
                    <h2 class="text-warning">Алдсан/Олсон утсаа бүртгүүлэх</h2>
                    <p class="lead">
                        Энэхүү хэсэгт та алдсан/олсон утасныхаа imei кодыг бүртгүүлэн алдсан/олсон хүнийг нь олох боломжтой. (imei код нь сим хийдэг төмөр дээр байгаа.)
                    </p>
                    <p>
                    </p>
                    <a href="/find" class="btn btn-light mt-3">
                       <i class="bi bi-chevron-right"></i>IMEI бүртгүүлэх
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="p-5 bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-between text-dark">
                
                <div class="col-md">
                    <h2>Бидний тухай</h2>
                    <p class="lead">
                        2019 оноос үйл ажиллагаагаа эхлүүлсэн. Монголын анхны iPhone & iPad код гаргах үйлчилгээг нэвтрүүлсэн билээ.
                    </p>
                    <div>
                        Холбогдох утас: 90896959
                    </div>
                    <div>
                        Хаяг: Бөхийн өргөөний баянзүрх захын хойд талд ГЕО төвийн 2 давхарт 8 тоот.
                    </div>
                    <div id="mapA">
                        </div>
                </div>
                <div class="col-md">
                    <img src="images/COVER1.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ -->

    <section id="faq" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Түгээмэл асуулт</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <!-- Item 1-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions" aria-expanded="false" aria-controls="flush-collapseOne">
                        1. Утас гаргуулахад хэр утас вэ?
                    </button>
                  </h2>
                  <div id="questions" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Утаснаасаа шалтгаалаад 10 - 30 минут болно.</div>
                  </div>
                </div>
                <!-- Item 2-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" >
                        2. Гаргуулахад хэдэн төгрөг болох вэ?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" >
                    <div class="accordion-body">Утас болон ямар байдалтай, яаж гарахаас хамаарч ₮10,000 - ₮240,000 хооронд байгаа
                        Бидэнтэй холбогдож үнэ болон бусад мэдээллийг аваарай.
                    </div>
                  </div>
                </div>
                <!-- Item 3-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" >
                     3. Хэр найдвартай вэ?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" >
                    <div class="accordion-body">Манайх монголдоо анхны iPhone & iPad-ны код гаргах үйлчилгээг нэвтрүүлсэн. Таны утсыг боломжит бүх аргаар нь гаргаж өгнө. 
                        Манай <a href="https://www.facebook.com/messages/t/icloudgargana/" class="btn btn-primary">Facebook Page</a>-аас хэрэглэгчидийн сэтгэгдэл болон бусад зүйлсийг харах боломжтой.
                        
                    
                </div>

                  </div>
                </div>
              </div>

    </section>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script>
mapboxgl.accessToken = 'pk.eyJ1IjoiYmlsZ3V1bmc3IiwiYSI6ImNreHlrbzkxdjlkNzkycG11d3M2c2NxcWMifQ.OGvWrbMcPIFG_F-X04xVaA';
var map = new mapboxgl.Map({
container: 'mapA',
style: 'mapbox://styles/mapbox/streets-v11',
center: [47.9177523350529, 106.93341149444292],
zoom: 18,
});
</script>

@endsection
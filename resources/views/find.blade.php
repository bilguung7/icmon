@extends('master')
@section('content')

    @if(session()->has('Lost'))
	<script>
    Swal.fire({
  title: '<strong>Таны утсыг хүн олсон байна.</strong>',
  icon: 'success',
  html:
    'бидэнтэй холбогдож олсон хэрэглэгчийн ' +
    'мэдээллийг авна уу.',
    
    
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:'<a href="https://www.facebook.com/messages/t/icloudgargana/" target="_blank"><button class="btn btn-indigo">Энд дар</button></a>',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:'ХААХ',
  cancelButtonAriaLabel: 'Thumbs down'
});
</script>
	@endif
    @if(session()->has('Find'))
	<script>
    Swal.fire({
  title: '<strong>Энэ утас манай мэдээллийн санд бүртгэлтэй байна.</strong>',
  icon: 'success',
  html:
    'бидэнтэй холбогдож алдсан хэрэглэгчийн ' +
    'мэдээллийг авна уу.',
    
    
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:'<a href="https://www.facebook.com/messages/t/icloudgargana/" target="_blank"><button class="btn btn-indigo">Энд дар</button></a>',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:'ХААХ',
  cancelButtonAriaLabel: 'Thumbs down'
});
</script>
	@endif
    <section class="p-5 bg-dark" >
        <div class="container">
            <div class="row align-items-center justify-content-between text-white">
                <div class="col-md">
                    <img src="images/find.png" class="img-fluid" alt="">
                </div>
                <div class="col-md">
                    <h2 class="text-warning">Алдсан/Олсон утсаа бүртгүүлэх</h2>
                    <p class="lead">
                        Таны бүртгүүлсэн imei код бидний мэдээллийн санд хадгалагдах бөгөөд бүртгүүлсэн imei код мэдээллийн санд байвал таны утасны дугаар луу мэдэгдэх болно. 
                        <span class="text-warning">(imei код нь сим хийдэг төмөр дээр байгаа.)</span> 
                    </p>
                    <p>
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Form -->
    <section class="p-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 col-md-6">
                <div class="card-body bg-dark text-light">
                    <div class="h1 mb-3  text-center">
                    <i class="bi bi-search"></i>
                    </div>
                    <h3 class="card-title mb-3 text-center">
                        Утсаа хаясан
                    </h3>
                    <p class="card-text text-center">
                            Доорх хэсгийг бөглөнө үү.
                     
                    </p>
                    
                    <form action="imeiLost" method="post">
                        {{csrf_field()}}
                    
                        <div>
                        <label>Таны нэр:</label>
                        </div>
                        <input type="text" name="name">
                        
                    
                        <div>
                        <label>Утасны дугаар:</label>
                        </div>
                        <input type="phone" name="phone">
                        
                    
                        <div>
                        <label> Хаясан утасны imei код:</label>
                        </div>
                        <input type="number" name="imeiLost">
                        <div>
                        <input type="submit" class="btn btn-warning" id="imei" value="Бүртгүүлэх">
                        </div>
                    
                    
                    </form>
                    
                    
                </div>

            </div>


            <div class="col-lg-6 col-md-6">
                <div class="card-body bg-dark text-light">
                    <div class="h1 mb-3  text-center">
                    <i class="bi bi-phone"></i>
                    </div>
                    <h3 class="card-title mb-3 text-center">
                        Утас олсон
                    </h3>
                    <p class="card-text text-center">
                            Доорх хэсгийг бөглөнө үү.
                     
                    </p>
                    
                    <form action="imeiFind" method="post">
                        {{csrf_field()}}
                    
                        <div>
                        <label>Таны нэр:</label>
                        </div>
                        <input type="text" name="name">
                        
                    
                        <div>
                        <label>Утасны дугаар:</label>
                        </div>
                        <input type="phone" name="phone">
                        
                    
                        <div>
                        <label> Олсон утасны imei код:</label>
                        </div>
                        <input type="text" name="imeiLost">
                        <div>
                        <input type="submit" class="btn btn-warning" id="imei" value="Бүртгүүлэх">
                        </div>
                    </form>
                    

                </div>

            </div>
        </div>
    </section>

@endsection
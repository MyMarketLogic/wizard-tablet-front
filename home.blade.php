@extends('/projects/zebra-smb-2022/layout')
@section('wrapper')

@if($canal->locale->code=="pt")
<style>
    .fsp-2 {
    font-size: 2.3rem;
    line-height: 2.3rem;
    }
    .fsp-1 {
    font-size: 3rem;
    line-height: 3rem;
}

@media (max-width:767.98px){
.fsp-2{

  font-size: 1.5rem;
  line-height: 1.5rem;
}
.fsp-1{
  font-size:2.5rem;
  color: var(--bs-primary);
  font-weight:bold;
  line-height: 2.5rem;
}
.fsp-3{
  font-size:1rem;
  line-height:1rem
}
}
</style>

@endif

    @if (!empty($canal->koiwha))
        <a id="whatsapp" class="btn-whatsapp theme-btn-1" href="{{ $canal->koiwha }}" target="_blank"><i
                class="fab fa-whatsapp"></i>&nbsp;{!! __('zebra-smb-2022.global.contactWhatsapp') !!}</a>
    @endif
    <div class="banner__area-two " id="bghome">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="banner__area-two-content"> <span>{!! __('zebra-smb-2022.global.zebraPartner') !!}</span>


                        <h1>{!! preg_replace('/(#)/', '<br>', $canal->name) !!}</h1>
                        <a href="#ourSolutions" id="submi" class="theme-btn-1">{!! __('zebra-smb-2022.global.ourSolutions') !!} <i
                                class="fal fa-long-arrow-right"></i></a>
                        <!-- Prueba kami-->

                    </div>
                </div>
            </div>
        </div>
        <div class="banner__area-two-bottom">
            <div class="container">
                <div class="banner__area-two-bottom-icon">
                    <ul>
                        @if (!empty($canal->koifb))
                            <li><a id="facebook" href="{{ $canal->koifb }}" target="_blank"><i
                                        class="fab fa-2x fa-facebook"></i></a></li>
                        @endif
                        @if (!empty($canal->koilinke))
                            <li><a id="linkedin" href="{{ $canal->koilinke }}" target="_blank"><i
                                        class="fab fa-2x fa-linkedin"></i></a></li>
                        @endif
                        @if (!empty($canal->koiwha))
                            <li><a id="whatsapp" href="{{ $canal->koiwha }}" target="_blank"><i
                                        class="fab fa-2x fa-whatsapp"></i></a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a name="ourSolutions"></a>
    <div class="services__page section-padding">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-6 col-lg-8">
                    <div class="services__page-title lg-t-center">
                        <span class="subtitle">{!! __('zebra-smb-2022.global.wearepartners') !!}</span>
                        <h2>{!! __('zebra-smb-2022.global.ourSolutions') !!}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-12 mb-30">
                    <div class="services__page-item">
                        <div class="services__page-item-leftcol-12 col-lg-3 text-center">
                            <div class="row g-0 mb-sm-3 mb-lg-0">
                                <div class="col-12 text-center">
                                    <div class="services__page-item-left-icon">
                                        <i class="fa-thin fa-boxes-packing fa-2x"></i>

                                    </div>
                                </div>
                                <div class="col-12  text-center">
                                    <div class="services__page-item-left-content">
                                        <h4><a
                                                href="{{ route('project.canal.industry', ['project' => $canal->project->slug, 'canal' => $canal->slug, 'industry' => 'almacen']) }}">
                                                {!! __('zebra-smb-2022.menu.almacen') !!}
                                            </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services__page-item-center col-12 col-lg-8">
                            <p>{!! __('zebra-smb-2022.description.almacen') !!}</p>
                        </div>
                        <div class="services__page-item-right col-12 col-lg-1 text-center text-lg-end">
                            <a
                                href="{{ route('project.canal.industry', ['project' => $canal->project->slug, 'canal' => $canal->slug, 'industry' => 'almacen']) }}">
                                <i class="fa-thin fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-12 mb-30">
                    <div class="services__page-item row g-0">
                        <div class="services__page-item-leftcol-12 col-lg-3 text-center">
                            <div class="row g-0 mb-sm-3 mb-lg-0">
                                <div class="col-12 text-center">
                                    <div class="services__page-item-left-icon">
                                        <i class="fa-thin fa-industry-windows fa-2x"></i>

                                    </div>
                                </div>
                                <div class="col-12  text-center">
                                    <div class="services__page-item-left-content">
                                        <h4><a
                                                href="{{ route('project.canal.industry', ['project' => $canal->project->slug, 'canal' => $canal->slug, 'industry' => 'manufactura']) }}">
                                                {!! __('zebra-smb-2022.menu.manufactura') !!}
                                            </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="services__page-item-center col-12 col-lg-8">
                            <p>{!! __('zebra-smb-2022.description.manufactura') !!}</p>
                        </div>
                        <div class="services__page-item-right col-12 col-lg-1 text-center text-lg-end">
                            <a
                                href="{{ route('project.canal.industry', ['project' => $canal->project->slug, 'canal' => $canal->slug, 'industry' => 'manufactura']) }}">
                                <i class="fa-thin fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-12 mb-30">


                    <div class="services__page-item row g-0">
                        <div class="services__page-item-leftcol-12 col-lg-3 text-center">
                            <div class="row g-0 mb-sm-3 mb-lg-0">
                                <div class="col-12 text-center">
                                    <div class="services__page-item-left-icon">
                                        <i class="fa-thin fa-shop fa-2x"></i>

                                    </div>
                                </div>
                                <div class="col-12  text-center">
                                    <div class="services__page-item-left-content">
                                        <h4><a
                                                href="{{ route('project.canal.industry', ['project' => $canal->project->slug, 'canal' => $canal->slug, 'industry' => 'retail']) }}">
                                                {!! __('zebra-smb-2022.menu.retail') !!}
                                            </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="services__page-item-center col-12 col-lg-8">
                            <p>{!! __('zebra-smb-2022.description.retail') !!}</p>
                        </div>
                        <div class="services__page-item-right col-12 col-lg-1 text-center text-lg-end">
                            <a
                                href="{{ route('project.canal.industry', ['project' => $canal->project->slug, 'canal' => $canal->slug, 'industry' => 'retail']) }}">
                                <i class="fa-thin fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="portfolio__area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-60">
                    <div class="portfolio__area-two-title"> <span class="subtitle-one">Zebra -
                            {!! preg_replace('/(#)/', ' ', $canal->name) !!}</span>
                        <h2>{!! __('zebra-smb-2022.global.ourproducts') !!}</h2>
                    </div>
                    <div class="portfolio__area-two-btn">
                        <ul>
                            <li class="active" data-filter="*">{!! __('zebra-smb-2022.global.all') !!}</li>
                            @foreach ($project->category as $cat)
                                <li data-filter=".{{ $cat->slug }}">{!! __('zebra-smb-2022.category.' . $cat->slug) !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mb-30 portfolio__area-two-active">
                @foreach ($project->category as $cat)
                    @foreach ($cat->product as $product)
                        <div class="col-xl-4 col-md-6 col-lg-4 lg-mb-30 mb-4 {{ $product->category->slug }}">
                            <div class="portfolio__area-item">
                                <div class="portfolio__area-item-image">
                                    @if (!is_null($product->productimage->first()))
                                        <img src="{{ asset('storage/productimage/' . $product->productimage->first()->name) }}"
                                            class="" />
                                    @else
                                        <div class="fondoFake">
                                            <img src="{{ asset('assets/projects/zebra-smb-2022/img/Zebra_Technologies_logo.svg') }}"
                                                class="" height="356" />
                                        </div>
                                    @endif
                                    <div class="portfolio__area-item-image-content">
                                        <div class="portfolio__area-item-image-content-text">
                                            <span>{!! __('zebra-smb-2022.category.' . $product->category->slug) !!}</span>
                                            <h4><a
                                                    href="{{ route('project.canal.product', ['project' => $canal->project->slug, 'canal' => $canal->slug, 'category' => $product->category->slug, 'product' => $product->slug]) }}">
                                                    {{ $product->name }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="modalGiftCard">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-light text-dark">
                <canvas id="canvasConfetti"></canvas>
                <div id="overCanvas">
                    <div class="container">
                        <div class="row mx-md-3">
                            <div class="col-6">
                                <img src="/assets/projects/zebra-smb-2022/img/Zebra_Technologies_logo.svg" alt="Zebra" class="img-fluid" width="128">
                            </div>
                            <div class="col-6 text-end pt-3">
                                <span class="closeModal "><i class="fa-regular fa-circle-xmark fa-2x"></i></span>
                            </div>
                        </div>
                        <div class="row mx-md-3">
                            <div class="col-12 col-md-8 spaninline">
                                <span class="fsp-2">¡{!! __('zebra-smb-2022.global.participa') !!}</span>
                                <span class="fsp-1  text-uppercase">{!! __('zebra-smb-2022.global.giftcard') !!}!</span>
                            </div>
                            <div class="col-6 offset-3 offset-md-0 col-md-4 text-center">
                                <img src="{{ asset('assets/projects/zebra-smb-2022/img/giftcard.png') }}"
                                    class="img-fluid" />
                            </div>
                        </div>
                        <div class="row mx-md-1">
                            <div class="col-12 text-center my-3">
                                <span class="fsp-3 black fw-bold">{!! __('zebra-smb-2022.global.cotiza') !!}</span>
                                <span class="fsp-3">{!! __('zebra-smb-2022.global.obtendras') !!}!</span>
                            </div>
                        </div>
                        <div class="row mx-md-1 mx-mb-5">
                            <div class="col-12 text-center my-3">
                                <a href="#contact__area" id="btn-popup" class="theme-btn-1 closeModal" >{!! __('zebra-smb-2022.global.cotizaahora') !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection

    @section("script")

    window.n = 0;
    window.bgImageArray=["manufacturing","warehouse","retail"];
  
    window.base = "/assets/projects/zebra-smb-2022/img/",
    window.secs = 4;
    window.bgImageArray.forEach(function(img){
        var a = new Image();
        a.src = base + img+".jpg";
  
    });
  
    function backgroundSequence() {
        window.clearTimeout();
        var k = 0;
        for (i = 0; i < window.bgImageArray.length; i++) {
            setTimeout(function(){
                $("#bghome").css("backgroundImage","url(" + window.base + window.bgImageArray[k] + ".jpg) ");
  
            if ((k + 1) === bgImageArray.length) { setTimeout(function() { backgroundSequence() }, (window.secs * 1000))} else { k++; }
            }, (window.secs * 1000) * i)
        }
    }
  
  
  if($("#bghome").length>0){
    backgroundSequence();
  
  
  };
  $(window).on('load', function() {
    setTimeout(() =>{
  
  $('#modalGiftCard').modal('show');

  setTimeout(() =>{
    let canvas = document.getElementById("canvasConfetti");
    let context = canvas.getContext("2d");
    let width = $("#overCanvas").innerWidth();
    
    let height = $("#overCanvas").innerHeight();
    console.log(width);
    console.log(height);
    let particles = [];
    let particleSettings = {
        count: 100,
        gravity: 0.1,
        wave: 1
    };
    
    window.requestAnimationFrame =
        window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 1000 / 60);
        };
    
    //random number between range
    function randomNumberGenerator(min, max) {
        return Math.random() * (max - min) + min;
    }
    //Creates confetti
    function createConfetti() {
        while (particles.length < particleSettings.count) {
            let particle = new Particle();
            //random colors
            particle.color = `rgba(0, 167, 255,0.7)`;
            //store the particles
            particles.push(particle);
        }
    }
    //Starts the confetti 
    const startConfetti = () => {
        context.clearRect(0, 0, width, height);
        createConfetti();
        for (let i in particles) {
            //movement and shaking effect
            particleSettings.wave += 0.4;
            particles[i].tiltAngle += randomNumberGenerator(0.01, 0.2);
            particles[i].y +=
                (Math.sin(particleSettings.wave) +
                    particles[i].area +
                    particleSettings.gravity) *
                0.2;
            particles[i].tilt = Math.cos(particles[i].tiltAngle) * 0.3;
            //draw the particle on screen
            particles[i].draw();
            //if particle has crossed the screen height
            if (particles[i].y > height) {
                //reset the particle's properties
                particles[i] = new Particle();
                //random colors
                particles[i].color = `rgba(0, 167, 255,0.7)`;
            }
        }
        animationTimer = requestAnimationFrame(startConfetti);
    };
    
    //Particle and particle features
    function Particle() {
        this.x = Math.random() * width;
        this.y = Math.random() * height - height;
        this.area = randomNumberGenerator(10, 45);
        this.tilt = randomNumberGenerator(-4, 4);
        this.tiltAngle = 5;
    }
    //Methods associated with Particle
    Particle.prototype = {
        draw: function () {
            context.beginPath();
            context.lineWidth = this.area;
            context.strokeStyle = this.color;
            this.x = this.x + this.tilt;
            context.moveTo(this.x + this.area / 2, this.y);
            context.lineTo(this.x, this.y + this.tilt + this.area / 2);
            context.stroke();
        }
    };
    canvas.width = width;
    canvas.height = height;
    window.requestAnimationFrame(startConfetti);
  }, 100); 
  }, 5000);
  });

  $(".closeModal").click(function(){
    $('#modalGiftCard').modal('hide');
  });
  @endsection
  

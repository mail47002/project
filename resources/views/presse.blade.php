@extends('layouts.static')

@section('seo')
<meta name="description" content="Pfandnetzwerk.de ">
<title>Pfandnetzwerk.de in Presse und Medien</title>
@endsection



@section('hero')
<section class="section breadcrumb-area bg-overlay d-flex align-items-center" style="background: url('/assets/img/bg/shopping.jpg') no-repeat; background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Breamcrumb Content -->
                <div class="breadcrumb-content text-center">
                    <h1 class="text-white text-capitalize">Pressebereich</h1>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a class="text-uppercase text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active">Pressebereich</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<section id="contact" class="contact-area bg-gray ptb_100">
    <div class="container">
        <div class="row mb-5" style="dispaly: flex; justify-content: center; ">
            <div class="col-6 col-md-2">
                <button class="btn btn-cta btn-block article-switch mb-2 active" data-target="all">Alle</button>
            </div>
            <div class="col-6 col-md-2">
                <button class="btn btn-cta btn-block article-switch mb-2" data-target=".video">Video</button>
            </div>
            <div class="col-6 col-md-2">
                <button class="btn btn-cta btn-block article-switch mb-2" data-target=".print">Print</button>
            </div>
            <div class="col-6 col-md-2">
                <button class="btn btn-cta btn-block article-switch mb-2" data-target=".radio">Radio</button>
            </div>
        </div>
        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-6 mb-5 articleSelect {{$article->type}}">
                <div class="articleItem shadow">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{$article->url}}" target="_blank"><img src="{{$article->image}}" title="{{$article->title}}" alt="{{$article->title}}" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <p><strong><a href="{{$article->url}}" target="_blank">{{$article->media}}</a></strong></p>
                            <h3 class="mb-2">{{$article->title}}</h3>
                <p class="mb-3">{{$article->short}}</p>
                @if($article->type == 'radio')
                <audio
        controls
        src="{{$article->url}}">
            Your browser does not support the
            <code>audio</code> element.
    </audio>
                @else
                <p><a href="{{$article->url}}" class="btn btn-invert btn-fat" style="color" target="_blank">{{$article->cta}}</a></p>
                @endif
                          </div>
                    </div>
                </div>
                
        
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    function play() {
      var source = $(this).attr('data-source');
      var audio = document.getElementById(source);
      audio.play();
    }
  </script>

@endsection
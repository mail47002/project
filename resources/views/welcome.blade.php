@extends('layouts.base')

@section('seo')
<meta name="description" content="Pfandnetzwerk.de ">
<title>Pfandnetzwerk.de | Spende Dein Pfand</title>
@endsection

@section('hero')
<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-7 col-lg-6">
                <div class="welcome-intro">
                    <h1 class="text-white">Das Pfandnetzwerk</h1>
                    <h2 class="text-white">Spende Dein Pfand 2.0</h2>
                    <p class="text-white my-4">Für die einen ein Wegwerfprodukt im Centbereich, für Andere eine relevante Einnahmequelle: Die Pfandflasche. 
                        Das PFANDNETZWERK bietet mit digitalen Pfandtonnen ein komplettes System der Entsorgungslogistik und vereint verschiedene Partner, um gemeinsam die Umwelt und soziale Vereine zu unterstützen.</p>
                        
                    <!-- Store Buttons -->
                    <div class="button-group store-buttons d-flex">
                        <a href="#niroflow-pfandnetzwerk" class="btn btn-cta">
                            <i class="fas fa-hands-helping"></i> Werde jetzt Netzwerkpartner
                        </a>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6">
                <!-- Welcome Thumb -->
                <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                    <img src="/assets/img/welcome/PN_Gif_Tonne_oeffnen.gif" alt="Pfandtonne von Pfandnetzwerk.de" id="aniTonne">
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape-bottom">
        <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
            <defs></defs>
            <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                    <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                </g>
            </g>
        </svg>
    </div>
</section>
@endsection



@section('content')

<section id="features" class="section features-area style-two overflow-hidden mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-10">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Schnell</span>
                        erklärt
                    </span>
                    <h2 class="mb-3">Was ist das Pfandnetzwerk?</h2>
                    <p class="mt-5">Digitale Pfandtonnen werden vielerorts aufgestellt. Das Pfandnetzwerk kümmert sich um die Vernetzung und das Zusammenbringen aller beteiligten Partner (Aufstellorte, Sponsoren, Entsorger und Verwerter) und koordiniert den Ablauf. Durch Unterstützung von Sponsoren kann den Entsorgern (regionale, soziale Vereine) ein komplettes System rund um die digitalen Pfandtonnen zur Verfügung gestellt werden, bei dem jede gespendete Flasche einen Zugewinn darstellt. 
                    </p>
                    <p class="mt-2"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" id="expander">+ Erweiterte Infos</a></p>
                    <div class="collapse mt-5" id="collapseExample">
                        <div class="card card-body">
                          <p>Welche Probleme haben wir abseits der allgegenwärtigen Thematik um das Coronavirus? 
                            Beim Nachdenken kommt man schnell auf eine Vielzahl von Umwelt- und Nachhaltigkeitsthemen oder auch die Sorgen einiger Mitmenschen, denen es schlechter geht als einem selbst. Dabei haben wir in Deutschland viele tolle Unternehmen, Strukturen, Vereine und sinnvolle Ansätze, um gemeinsam so einiges zu schaffen…</p>
                            
                            <p>Trotz der immer häufigeren Verwendung von z.B. wiederverwendbaren Edelstahl-Trinkflaschen sind die Einweg- und Mehrwegflaschen aktuell noch nicht wegzudenken. Durch deutsche Pfandsysteme ist die Zurückführung von verschiedenen Flaschen (z.B. aus dem eigenen Haushalt) zum Recyclingkreislauf durch Supermärkte und Getränkemärkte gewährleistet. Doch was passiert mit den einzelnen ToGo-Flaschen, die mal eben am Imbiss oder einem Getränkeautomaten gekauft werden? Diese Pfandflaschen werden oft nicht bei einer Pfand-Annahestelle abgegeben, sondern weggeschmissen.</p>
                            
                           <p>Unter der Berücksichtigung zahlreicher Aspekte wie Flaschenaufkommen, Passantenströme, Sicherheit, Pfandsammler, Logistikwege usw. werden moderne, digitale Pfandtonnen aufgestellt, die sich harmonisch aber auffällig in die jeweilige Umgebung einfügen. Passanten können sämtliche Pfandprodukte einwerfen und spenden dadurch einem regionalen, sozialen Verein 100% des Pfandwerts. Die durch Unternehmen finanzierten Pfandtonnen erkennen mit ihrer Sensorik die innenliegenden Flaschen und benachrichtigen ab einem gewissen Füllstand den Verein vor Ort bzgl. der einzuleitenden Entleerung. Die Pfandeinnahmen stehen den Vereinen zur Verfügung, um z.B. Gehälter für sozial benachteiligte Menschen zu bezahlen, die dafür einen geregelten Arbeitsalltag erhalten und die Entsorgungslogistik durchführen. Zudem werden natürlich sämtliche Flaschen dem jeweiligen Recyclingkreislauf zugeführt. </p>
                            
                           <p>Das Pfandnetzwerk kümmert sich um die Vernetzung aller Partner und koordiniert den Ablauf. Durch Unterstützung der Sponsoren kann den Vereinen ein komplettes System zur Verfügung gestellt werden, bei dem jede gespendete Flasche einen Zugewinn für den sozialen Verein darstellt.</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="p-5 bg-white rounded shadow mb-5">
                    <!-- Rounded tabs -->
                    <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-row d-flex justify-content-around text-center bg-light border-0 rounded-nav">
                      <li class="nav-item flex-md-fill">
                        <a id="sponsoren-tab" data-toggle="tab" href="#sponsoren" role="tab" aria-controls="sponsoren" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active text-center"> <img src="/assets/img/icon/sponsoren.png" class="mb-2" width="80px" alt=""><br>Sponsoren</a>
                      </li>
                      <li class="nav-item flex-md-fill">
                        <a id="orte-tab" data-toggle="tab" href="#orte" role="tab" aria-controls="orte" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold"><img src="/assets/img/icon/aufstellorte.png" class="mb-2" width="80px" alt=""><br>Aufstellorte</a>
                      </li>
                      <li class="nav-item flex-md-fill">
                        <a id="entsorger-tab" data-toggle="tab" href="#entsorger" role="tab" aria-controls="entsorger" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold"><img src="/assets/img/icon/entsorger.png" class="mb-2" width="80px" alt=""><br>Entsorger</a>
                      </li>
                      <li class="nav-item flex-md-fill">
                        <a id="verwerter-tab" data-toggle="tab" href="#verwerter" role="tab" aria-controls="verwerter" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold"><img src="/assets/img/icon/verwerter.png" class="mb-2" width="80px" alt=""><br>Verwerter</a>
                      </li>
                      <li class="nav-item flex-md-fill">
                        <a id="jeder-tab" data-toggle="tab" href="#jeder" role="tab" aria-controls="jeder" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold"><img src="/assets/img/icon/jeder.png" class="mb-2" width="80px" alt=""><br>Jeder</a>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div id="sponsoren" role="tabpanel" aria-labelledby="sponsoren-tab" class="tab-pane fade px-4 py-5 show active">
                        <p class="text-muted">... finanzieren die digitalen Pfandtonnen und stellen diese den sozialen Vereinen zur Verfügung.</p>
                      </div>
                      <div id="orte" role="tabpanel" aria-labelledby="orte-tab" class="tab-pane fade px-4 py-5">
                        <p class="text-muted">... sind z.B. Firmengelände, Messen, Bahnhöfe, Shoppingcenter, Freibäder etc.</p>
                      </div>
                      <div id="entsorger" role="tabpanel" aria-labelledby="entsorger-tab" class="tab-pane fade px-4 py-5">
                        <p class="text-muted">... sind meist soziale Vereine, die sich um die Entleerung der vollen Tonnen kümmern.</p>
                      </div>
                      <div id="verwerter" role="tabpanel" aria-labelledby="verwerter-tab" class="tab-pane fade px-4 py-5">
                        <p class="text-muted">... nehmen die gesammelten Flaschen entgegen und vergüten diese, z.B. Der Grüne Punkt.</p>
                      </div>
                      <div id="jeder" role="tabpanel" aria-labelledby="jeder-tab" class="tab-pane fade px-4 py-5">
                        <p class="text-muted">… ist für das Konzept wichtig. Gerne bei bestehenden Standorten Pfandflaschen einwerfen oder neue Aufstollorte vorschlagen. Danke!</p>
                      </div>
                    </div>
                    <!-- End rounded tabs -->
                  </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12 col-md-6 col-lg-4 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-wow-delay="0.4s">
                    <!-- Featured Image -->
                    <div class="mb-3">
                        <i class="fas fa-trash-restore-alt my-icon"></i>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Sammeln</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Featured Image -->
                    <div class="mb-3">
                        <i class="fas fa-recycle my-icon"></i>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Recyclen</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-wow-delay="0.4s">
                    <!-- Featured Image -->
                    <div class="mb-3">
                        <i class="fas fa-hands-heart my-icon"></i>
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Spenden</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis culpa expedita dignissimos.</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
{{-- <section class="iq-features">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-3 col-md-12"></div>
          <div class="col-lg-6 col-md-12">
             <div class="holderCircle">
                <div class="round"></div>
                <div class="dotCircle">
                   <span class="itemDot active itemDot1" data-tab="1">
                   <i class="fa fa-clock-o"></i>
                   <span class="forActive"></span>
                   </span>
                   <span class="itemDot itemDot2" data-tab="2">
                   <i class="fa fa-comments"></i>
                   <span class="forActive"></span>
                   </span>
                   <span class="itemDot itemDot3" data-tab="3">
                   <i class="fa fa-user"></i>
                   <span class="forActive"></span>
                   </span>
                   <span class="itemDot itemDot4" data-tab="4">
                   <i class="fa fa-tags"></i>
                   <span class="forActive"></span>
                   </span>
                   <span class="itemDot itemDot5" data-tab="5">
                   <i class="fa fa-upload"></i>
                   <span class="forActive"></span>
                   </span>
                   <span class="itemDot itemDot6" data-tab="6">
                   <i class="fa fa-briefcase"></i>
                   <span class="forActive"></span>
                   </span>
                </div>
                <div class="contentCircle">
                   <div class="CirItem title-box active CirItem1">
                      <h2 class="title"><span>Sponsoren</span></h2>
                      <p>... finanzieren die digitalen Pfandtonnen und stellen sie den sozialen Vereinen zur Verfügung.</p>
                      <i class="fa fa-clock-o"></i>
                   </div>
                   <div class="CirItem title-box CirItem2">
                      <h2 class="title"><span>Aufstellorte</span></h2>
                      <p>... sind z.B. Firmengelände, Messen, Bahnhöfe, Shoppingcenter etc.</p>
                      <i class="fa fa-comments"></i>
                   </div>
                   <div class="CirItem title-box CirItem3">
                      <h2 class="title"><span>Entsorger</span></h2>
                      <p>... sind meist soziale Vereine, die sich um die Entleerung der vollen Tonnen kümmern.</p>
                      <i class="fa fa-user"></i>
                   </div>
                   <div class="CirItem title-box CirItem4">
                      <h2 class="title"><span>Verwerter</span></h2>
                      <p>... nehmen die gesammelten Flaschen entgegen und vergüten diese, wie z.B. Der Grüne Punkt.</p>
                      <i class="fa fa-tags"></i>
                   </div>
                   <div class="CirItem title-box CirItem5">
                      <h2 class="title"><span>Sharing</span></h2>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                      <i class="fa fa-upload"></i>
                   </div>
                   <div class="CirItem title-box CirItem6">
                      <h2 class="title"><span>Support</span></h2>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                      <i class="fa fa-briefcase"></i>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-12"></div>
       </div>
    </div>
</section> --}}
@include('partials.logoset')<!-- ***** Work Area Start ***** -->
<section class="section work-area bg-overlay overflow-hidden ptb_50" style="background: url('/assets/img/bg/shopping.jpg') no-repeat; background-size:cover; background-position: center bottom; background-attachment: scroll;">
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-12 col-md-10 col-lg-8">
               <!-- Work Content -->
               <div class="section-heading text-center">
                <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3 bg-white">
                    <i class="far fa-lightbulb text-primary mr-1"></i>
                    <span class="text-primary">Interaktiv</span>
                    erkunden
                </span>
                <h2 class="mb-3 blueafter text-white">Die digitale Pfandtonne</h2>
                   <p class="text-white my-3 mt-5 mb-sm-5">Unsere Box steckt voll mit Features. Wähle einen Bereich aus und entdecke die Pfandtonne.</p>
                   <div class="row justify-content-center">
                       <div class="col-md-4" style="margin-top: 50px">
                           <button class="btn btn-cta btn-block dot-switch mb-2 active" data-target="all">Alle</button>
                           <button class="btn btn-cta btn-block dot-switch mb-2" data-target=".technik">Technik</button>
                           <button class="btn btn-cta btn-block dot-switch mb-2" data-target=".funktion">Funktionalität</button>
                           <button class="btn btn-cta btn-block dot-switch mb-2" data-target=".gestaltung">Gestaltung</button>
                           <button class="btn btn-cta btn-block dot-switch mb-2" data-target=".sicherheit">Sicherheit</button>
                       </div>
                       <div class="col-md-8">
                        <div class="litetooltip-hotspot-wrapper" style="max-width: 450px">
                            <div class="litetooltip-hotspot-container" style="padding-bottom: 160%">
                            <img src="https://pfandnetzwerk.de/assets/img/features/thumb-1.png" data-width="450" data-height="720" />
                            <div class="hotspot funktion" style="top: 20.27777777777778%; left: 58.22222222222222%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110446100" data-location="top" data-template="" data-templatename="" data-opacity="1" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="58.22222222222222" data-hotspot-y="20.27777777777778" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Drei Einwurfmöglichkeiten mit Akustik und Geruchsdämmung</div>
                            </div>
                            
                            <div class="hotspot technik" style="top: 2.638888888888889%; left: 59.77777777777777%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976798" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="59.77777777777777" data-hotspot-y="2.638888888888889" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Außenantenne für idealen Empfang</div>
                            </div>
                            
                            <div class="hotspot technik" style="top: 8.61111111111111%; left: 28.000000000000004%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976800" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="28.000000000000004" data-hotspot-y="8.61111111111111" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Technikeinheit: Sensor, Mess- und Übertragungstechnik, Stromversorgung usw.</div>
                            </div>
                            
                            <div class="hotspot gestaltung" style="top: 25.13888888888889%; left: 20.88888888888889%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976803" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="20.88888888888889" data-hotspot-y="25.13888888888889" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Anti-Graffiti-Beschichtung bei jedem Motiv</div>
                            </div>
                            
                            <div class="hotspot gestaltung" style="top: 35.41666666666667%; left: 30.444444444444446%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976805" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="30.444444444444446" data-hotspot-y="35.41666666666667" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Logo des Sponsors</div>
                            </div>
                            
                            <div class="hotspot gestaltung" style="top: 46.52777777777778%; left: 29.555555555555557%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976806" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="29.555555555555557" data-hotspot-y="46.52777777777778" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Logo des Spendenempfängers</div>
                            </div>
                            
                            <div class="hotspot sicherheit" style="top: 61.38888888888889%; left: 20.22222222222222%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976810" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="20.22222222222222" data-hotspot-y="61.38888888888889" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Kompressions-Stangenschloss mit zwei Schließpunkten</div>
                            </div>
                            
                            <div class="hotspot sicherheit" style="top: 94.44444444444444%; left: 41.77777777777778%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976812" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="41.77777777777778" data-hotspot-y="94.44444444444444" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Fester Stand durch verstellbare Standfüße</div>
                            </div>
                            
                            <div class="hotspot sicherheit" style="top: 88.75%; left: 55.333333333333336%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110206527" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="55.333333333333336" data-hotspot-y="88.75" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Dämmmatte gegen Flaschenbruch</div>
                            </div>
                            
                            <div class="hotspot gestaltung" style="top: 69.58333333333333%; left: 41.55555555555556%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976815" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="41.55555555555556" data-hotspot-y="69.58333333333333" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">"Spende Dein Pfand" als Hauptaussage</div>
                            </div>
                            
                            <div class="hotspot gestaltung" style="top: 23.75%; left: 73.55555555555556%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617109976817" data-location="top" data-template="default" data-templatename="default" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="73.55555555555556" data-hotspot-y="23.75" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Um die drei Einwurfbereiche herum zeigen sympathische Pfandflaschen, was hinein gehört</div>
                            </div>
                            
                            <div class="hotspot technik" style="top: 2.361111111111111%; left: 48.888888888888886%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110029864" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="48.888888888888886" data-hotspot-y="2.361111111111111" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Optional: GPS</div>
                            </div>
                            
                            <div class="hotspot funktion" style="top: 3.0555555555555554%; left: 37.55555555555555%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110024060" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="37.55555555555555" data-hotspot-y="3.0555555555555554" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Indoor &amp; Outdoor geeignet</div>
                            </div>
                            
                            <div class="hotspot technik" style="top: 15.972222222222221%; left: 24.444444444444443%; width: 4.222222222222222%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110363634" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="24.444444444444443" data-hotspot-y="15.972222222222221" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Optional Soundmodul</div>
                            </div>
                            
                            <div class="hotspot technik" style="top: 28.333333333333332%; left: 48.66666666666667%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110125840" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="48.66666666666667" data-hotspot-y="28.333333333333332" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">RFID-Chip zur Identifikation</div>
                            </div>
                            
                            <div class="hotspot sicherheit" style="top: 67.36111111111111%; left: 20%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110348384" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="20" data-hotspot-y="67.36111111111111" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Digitaler Schließzylinder</div>
                            </div>
                            
                            <div class="hotspot sicherheit" style="top: 91.38888888888889%; left: 68.88888888888889%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110211971" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="68.88888888888889" data-hotspot-y="91.38888888888889" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Optional: Bodenverankerung</div>
                            </div>
                            
                            <div class="hotspot sicherheit" style="top: 75.97222222222221%; left: 75.1111111111111%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110202239" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="75.1111111111111" data-hotspot-y="75.97222222222221" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Optional: Sicherungsseil</div>
                            </div>
                            
                            <div class="hotspot funktion" style="top: 64.86111111111111%; left: 68.88888888888889%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110398061" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="68.88888888888889" data-hotspot-y="64.86111111111111" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Fassungsvolumen: ca. 200 Flaschen</div>
                            </div>
                            
                            <div class="hotspot technik" style="top: 10.833333333333334%; left: 64.22222222222223%; width: 4.444444444444445%; height: 2.7777777777777777%; background: #cc0000; border: 1px solid #cc0000; border-radius: 20px; opacity: 0.8" id="hotspot_1617110357831" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="64.22222222222223" data-hotspot-y="10.833333333333334" data-hotspot-blink="false" data-hotspot-bgcolor="#cc0000" data-hotspot-bordercolor="#cc0000" data-hotspot-borderradius="20">
                            <div class="data-container">Optional: Kamera im Tonneninnneren (KEINE Außenaufnahmen!)</div>
                            </div>
                            
                            
                            
                            </div>
                            </div>
                       </div>
                       
                   </div>
               </div>
           </div>
       </div>
       
   </div>
</section>
<!-- ***** Work Area End ***** -->
<section class="section service-area bg-gray overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <!-- Service Text -->
                <div class="section-heading text-center">
                    <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Schon</span>
                        gewusst?
                    </span>
                    <h2 class="mb-3">Was darf in die Tonne?</h2>
                    <!-- Service List -->
                    <p class="mt-5">In die Pfandtonnen dürfen alle bepfandeten Behälter eingeworfen werden, egal ob aus Glas, Kunststoff oder Blech. <br>
                        Es gibt unterschiedliche Pfandsysteme in Deutschland. Durch die manuelle Entleerung und Sortierung der Pfandtonnen ist die Herkunft oder das konkrete Pfandsiegel nicht relevant. Die Pfandbeauftragten sind Profis auf ihrem Gebiet und ordnen die jeweiligen Produkte den korrekten Entsorgungswegen zu.</p><p>Die zwei bekanntesten Pfandsystemen sind:</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-5 bg-white rounded shadow mb-5 leiste-bg">
                            <!-- Rounded tabs -->
                            <ul id="whatTab" role="tablist" class="nav nav-tabs nav-pills flex-row d-flex justify-content-around text-center bg-light border-0 rounded-nav">
                              <li class="nav-item flex-lg-fill">
                                <a id="dpg-tab" data-toggle="tab" href="#dpg" role="tab" aria-controls="dpg" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active text-center"> <img src="/assets/img/icon/dpg.png" class="" width="120px" alt=""></a>
                              </li>
                              <li class="nav-item flex-lg-fill">
                                <a id="mehrweh-tab" data-toggle="tab" href="#mehrweg" role="tab" aria-controls="mehrweg" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold"><img src="/assets/img/icon/mehrweg.png" class="" width="120px" alt=""></a>
                              </li>
                            </ul>
                            <div id="whatTabContent" class="tab-content">
                              <div id="dpg" role="tabpanel" aria-labelledby="dpg-tab" class="tab-pane fade px-4 py-5 show active">
                                <p class="text-muted">Das DPG-Pfandsystem wird für Einwegflaschen oder -dosen verwendet. Ein mit diesem Logo gekennzeichnetes Produkt ist immer ein Einwegprodukt auf das es 0,25 € Pfand gibt. Häufig wird dieses Logo z.B. bei Kunststoffflaschen aus PET verwendet, die es u.a. im Discounter gibt.</p>
                                <p><a href="http://dpg-pfandsystem.de" target="_blank">www.dpg-pfandsystem.de</a></p>
                              </div>
                              <div id="mehrweg" role="tabpanel" aria-labelledby="mehrweg-tab" class="tab-pane fade px-4 py-5">
                                <p class="text-muted">Das Mehrwegzeichen ist auf zahlreichen Mehrwegflaschen angebracht - häufig bei PET oder Glasflaschen. Der Pfandbetrag beträgt dabei, in Abhängigkeit von Flaschenart, Flaschenmaterial und Füllvolumen, meist zwischen 0,08 € und 0,15 € je Produkt.</p>
                                <p><a href="http://mehrweg.org" target="_blank">www.mehrweg.org</a></p>
                              </div>
                            </div>
                            <!-- End rounded tabs -->
                          </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-md-4 order-1 order-lg-2 d-none d-lg-block">
                <!-- Service Thumb -->
                <div class="service-thumb mx-auto">
                    <img src="assets/img/features/thumb-1.png" alt="">
                </div>
            </div> --}}
        </div>
    </div>
</section>
<section id="screenshots" class="section screenshots-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Bisherige</span>
                        Aufstellorte
                    </span>
                    <h2 class="">Hier stehen die Pfandtonnen</h2>
                    <p class="mt-5">Die Aufstellorte sind sehr entscheidend für den Erfolg des Konzeptes. Vor jeder Platzierung einer neuen Pfandtonne wird der vorgeschlagene Aufstellort anhand vieler Faktoren geprüft. Hierbei werden das Flaschenaufkommen, die Passantenströme, die Sicherheit, die Situation der Pfandsammler, vorhandene Logistikwege und vieles Weitere geprüft.</p>
                    <p><strong>Wir sind immer auf der Suche nach interessanten Orten.<br>Vorschläge können gerne jederzeit <a href="#niroflow-pfandnetzwerk">HIER</a> gemeldet werden.</strong></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- App Screenshot Slider Area -->
                <div class="app-screenshots">
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot text-center">
                        <img src="assets/img/screenshots/1.jpg" alt="">
                    </div>
                    <!-- Single Screenshot Item -->
                    <div class="single-screenshot text-center">
                        <img src="assets/img/screenshots/2.jpg" alt="">
                    </div>
                    <div class="single-screenshot text-center">
                        <img src="assets/img/screenshots/4.jpg" alt="">
                    </div>
                    <div class="single-screenshot text-center">
                        <img src="assets/img/screenshots/6.jpg" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

 <section>
    <div id='map' style='width:100%; height: 500px;'></div>
    <div id="map-menu">
        <input id="ckmvnedjq0p3x17mk8k9hvfvo" type="radio" name="rtoggle" value="ckmvnedjq0p3x17mk8k9hvfvo" checked="checked">
        <label for="ckmvnedjq0p3x17mk8k9hvfvo">Karte</label>
        <input id="ckmx6nu6b0jeh17qei8oroxju" type="radio" name="rtoggle" value="ckmx6nu6b0jeh17qei8oroxju">
        <label for="ckmx6nu6b0jeh17qei8oroxju">Satellit</label>
        
        </div>
 </section>
 
<!-- ***** Review Area Start ***** -->
<section id="review" class="review-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <span class="d-inline-block rounded-pill shadow-sm fw-5 px-4 py-2 mb-3">
                        <i class="far fa-lightbulb text-primary mr-1"></i>
                        <span class="text-primary">Bisherige</span>
                        Partner
                    </span>
                    <h2 class="">Was unsere Partner meinen</h2>
                    <p class="d-none d-sm-block mt-4">Soziale Projekte leben und wachsen durch die wunderbaren Menschen, die sie unterstützen. Hier einige unserer Partner, die unser Pfandnetzwerk so erfolgreich machen.</p>
                </div>
            </div>
        </div>
       
        @include('partials.testimonials')
    </div>
</section>
<!-- ***** Review Area End ***** -->

<section class="section faq-area bg-gray ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Häufige Fragen</h2>
                    <p class="mt-5">Ein paar der häufigsten Fragen haben wir hier beantwortet. Falls deine Frage dadurch nicht beantwortet ist, kontaktiere uns gerne über das <a href="#niroflow-pfandnetzwerk">KONTAKTFORMULAR.</a></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
                    <div class="col-12">
                        <!-- FAQ Content -->
                        <div class="faq-content">
                            <!-- sApp Accordion -->
                            <div class="accordion" id="apolo-accordion">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-8">
                                    @foreach($faqs as $faq)
                                    <div class="card my-2">
                                        <!-- Card Header -->
                                        <div class="card-header bg-white">
                                            <h2 class="mb-0">
                                                <button class="btn p-2" type="button" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}">
                                                   {{$faq->question}}
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse{{$loop->iteration}}" class="collapse @if($loop->first) show @endif" data-parent="#apolo-accordion">
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                {{$faq->answer}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5 justify-content-center">
                    <div class="col-11 text-center bg-white" style="box-shadow: 1px 1px 11px 0px rgba(0,0,0,0.75);
                    -webkit-box-shadow: 1px 1px 11px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: 1px 1px 11px 0px rgba(0,0,0,0.75);">
                        <script src="https://storage.googleapis.com/niro-eu-static/widget/v1-2-3/index.min.js"></script><niroflow  niroflow-id="pfandnetzwerk" width="800px" pass-parameters="true" dynamic-height="true"></niroflow>
                    </div>
                </div>
            </div>
    </div>
</section>

@endsection

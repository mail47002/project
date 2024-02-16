<div class="row">
    <!-- Branding Slider -->
    <div class="testimonial-slider owl-carousel">
        <!-- Single Brand -->
        @foreach($testimonials as $testimonial)
         <div class=" p-3">
           
            <div class="res-margin mb-2">
                <!-- Single Review -->
                <div class="single-review card">
                    <!-- Card Top -->
                    <div class="card-top p-4">
                        <div class="review-icon">
                            <img src="{{$testimonial->logo}}" alt="" width="150" class="ref-logo">
                        </div>
                        <h4 class="text-primary mt-4 mb-3">{{$testimonial->headline}}</h4>
                        <!-- Review Text -->
                        <div class="review-text">
                            <p>{{$testimonial->text}}</p>
                        </div>
                        <!-- Quotation Icon -->
                        <div class="quot-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <!-- Reviewer -->
                    <div class="reviewer media bg-gray p-4">
                        <!-- Reviewer Thumb -->
                        <div class="reviewer-thumb">
                            <img class="avatar-lg radius-100 ref-image" src="{{$testimonial->image}}" alt="">
                        </div>
                        <!-- Reviewer Media -->
                        <div class="reviewer-meta media-body align-self-center ml-4">
                            <h5 class="reviewer-name color-primary mb-2">{{$testimonial->name}}</h5>
                            <h6 class="text-secondary fw-6">{{$testimonial->position}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
    </div>
</div>

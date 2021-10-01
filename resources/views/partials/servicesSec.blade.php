<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{ $titres->titre }}</h2>
        <p>{{ $titres->description }}</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="{{ $services->logo1 }}"></i></div>
            <h4 class="title"><a href="">{{ $services->titre1 }}</a></h4>
            <p class="description">{{ $services->description1 }}</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="{{ $services->logo2 }}"></i></div>
            <h4 class="title"><a href="">{{ $services->titre2 }}</a></h4>
            <p class="description">{{ $services->description2 }}</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="{{ $services->logo3 }}"></i></div>
            <h4 class="title"><a href="">{{ $services->titre3 }}</a></h4>
            <p class="description">{{ $services->description3 }}/p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="{{ $services->logo4 }}"></i></div>
            <h4 class="title"><a href="">{{ $services->titre4 }}</a></h4>
            <p class="description">{{ $services->description4 }}</p>
          </div>
        </div>

      </div>

    </div>
</section><!-- End Services Section -->
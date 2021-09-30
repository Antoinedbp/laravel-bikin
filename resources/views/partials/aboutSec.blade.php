<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
     
      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
          <div class="content">
            <h3>{{ $titres->titre2 }}</h3>
            <p>
              {{ $titres->description2 }}
            </p>
            <a href="#" class="about-btn">{{ $abouts[0]->chemin }}<i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              @foreach ($abouts as $item)
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class={{ $item->log }}></i>
                <h4>{{ $item->titre }}</h4>
                <p>{{ $item->description }}</p>
              </div>
              @endforeach
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
</section><!-- End About Section -->
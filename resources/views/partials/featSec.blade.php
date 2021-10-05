<!-- ======= Features Section ======= -->
<section id="features" class="features" data-aos="fade-up">
    <div class="container">

      <div class="section-title">
        <h2>{{ $titres[2]->titre }}</h2>
        <p>{{ $titres[2]->description }}</p>
      </div>

      
      <div class="row content">
        <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
          <img src="{{ asset('assets/img/'.$features[0]->image) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
          <h3>{{ $features[0]->titre }}</h3>
          <p class="fst-italic">
            {{ $features[0]->sous_titre }}
          </p>
          <ul>
            <li><i class="bi bi-check"></i> {{ $features[0]->description1 }}</li>
            <li><i class="bi bi-check"></i> {{ $features[0]->description2 }}</li>
            <li><i class="bi bi-check"></i> {{ $features[0]->description3 }}</li>
          </ul>
        </div>
      </div>
     
      

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="{{ asset('assets/img/'.$features[1]->image) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <h3>{{ $features[1]->titre }}</h3>
          <p class="fst-italic">
            {{ $features[1]->sous_titre }}
          </p>
          <ul>
            <li><i class="bi bi-check"></i> {{ $features[1]->description1 }}</li>
            <li><i class="bi bi-check"></i> {{ $features[1]->description2 }}</li>
            <li><i class="bi bi-check"></i> {{ $features[1]->description3 }}</li>
          </ul>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <img src="{{ asset('assets/img/'.$features[2]->image) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5" data-aos="fade-left">
          <h3>{{ $features[2]->titre }}</h3>
          <p> {{ $features[2]->sous_titre }}</p>
          <ul>
            <li><i class="bi bi-check"></i> {{ $features[2]->description1 }}</li>
            <li><i class="bi bi-check"></i> {{ $features[2]->description2 }}</li>
            <li><i class="bi bi-check"></i> {{ $features[2]->description3 }}</li>
          </ul>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <img src="{{ asset('assets/img/'.$features[3]->image) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <h3>{{ $features[3]->titre }}</h3>
          <p class="fst-italic">
            {{ $features[3]->sous_titre }}
          </p>
          <ul>
            <li><i class="bi bi-check"></i> {{ $features[3]->description1 }}</li>
            <li><i class="bi bi-check"></i> {{ $features[3]->description2 }}</li>
            <li><i class="bi bi-check"></i> {{ $features[3]->description3 }}</li>
          </ul>
        </div>
      </div>

    </div>
</section><!-- End Features Section -->

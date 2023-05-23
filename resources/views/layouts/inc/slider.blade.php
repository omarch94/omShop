<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner test4 ">
      <div class="carousel-item active test4">
        <img src="{{asset('assets/images/pexel1.jpg')}}" class=" " alt="...">
        <div class="carousel-caption">
          <h2>Get Ready for Summer</h2>
          <p>Explore our new summer arrivals.</p>
          <a href="{{ url('home') }}" class="btn btn-primary">Shop Now</a>
        </div>
      </div>
      <div class="carousel-item test4">
        <img src="{{asset('assets/images/pexel1.jpg')}}" class=" " alt="...">
        <div class="carousel-caption" style="margin: auto">
          <h2>Upgrade Your Style</h2>
          <p>Discover the latest fashion trends.</p>
          <a href="{{ url('category') }}" class="btn btn-primary">Shop Now</a>
        </div>
      </div>
      <div class="carousel-item test4">
        <img src="{{asset('assets/images/1671435678.jpg')}}" class=" " alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
<style>
.test4 {
width: 100%;
height: 50%;
text-align: center;
}
</style>
@extends('frontend.master')
@section('front_content')
<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Claims </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
<section class="section section-lg text-center bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner"><span class="icon-xl linearicons-phone-incoming icon-primary"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="tel:#">1-800-123-1234</a></h4>
                  <p>You can call us anytime</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner"><span class="icon-xl linearicons-map2 icon-primary"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">51 Francis Street, Darlinghurst NSW 2010, United States</a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner"><span class="icon-xl linearicons-paper-plane icon-primary"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="mailto:#">info@demolink.org</a></h4>
                  <p>Feel free to email us your questions</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
              <h3>Get in Touch</h3>
              @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
              <form class="" action="{{ route('reclamations.store') }}" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="form-wrap">
                  <input class="form-input" type="text" name="titrereclamation" required>
                  @error('titrereclamation')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  <label class="form-label" for="contact-name">Claim Object</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input"  type="text" name="nomevent" required>
                  @error('nomevent')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  <label class="form-label" for="contact-email">Event</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description</strong>
                       <textarea class="ckeditor form-control" name="description"
                                    rows="3"></textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-7 col-lg-5">
                    <button class="button button-block button-lg button-primary" type="submit">Send</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </section>
     
    
@endsection
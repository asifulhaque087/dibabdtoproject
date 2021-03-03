






<div class="col-xs-12 col-sm-12 col-md-3 sidebar">

  <!-- ================================== TOP NAVIGATION ================================== -->
  <div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal">
      <ul class="nav">
      @foreach (\App\Category::where('level', 0)->get()->take(11) as $key => $category)
        <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>{{ $category->getTranslation('name') }}</a>
          <ul class="dropdown-menu mega-menu">
            <li class="yamm-content">
              <div class="row">
                <div class="col-sm-12 col-md-3">
                  <ul class="links list-unstyled">
                   
                  </ul>
                </div>

        

              </div>

            </li>

          </ul>

        </li>
        <!-- /.menu-item -->
        @endforeach



      </ul>
      <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
  </div>


  <!-- ============================================== Testimonials: END ============================================== -->

  <div class="home-banner"> <img src="{{asset('assets/website/assets/')}}/images/banners/LHS-banner.jpg" alt="Image"> </div>
</div>
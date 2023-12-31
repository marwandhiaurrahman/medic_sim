@include('vendor.medic.partials.header')

@include('vendor.medic.partials.navigation', {"home": "active"})

@include('vendor.medic.partials.hero_slider')

@@include('blocks/call-to-action.htm')

@@include('blocks/about.htm')

@@include('blocks/about-tab.htm')

@@include('blocks/service-filterable.htm')

@@include('blocks/team.htm')

@@include('blocks/testimonial.htm')

<!-- Contact Section -->
<section class="appoinment-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        @@include('blocks/accordions.htm')
      </div>
      <div class="col-lg-6">
        @@include('blocks/contact-area.htm')
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

@include('vendor.medic.partials.footer_block')

@include('vendor.medic.partials.footer')


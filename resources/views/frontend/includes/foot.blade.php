  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  {{-- toastr js --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

  <script>
      $(document).ready(function() {
          toastr.options.timeOut = 10000;
          @if(Session::has('error'))
          toastr.error('{{ Session::get('error') }}');
          @elseif(Session::has('success'))
          toastr.success('{{ Session::get('success') }}');
          @endif
      });
  </script>


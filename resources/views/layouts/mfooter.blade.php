<!-- javascripts -->
<script src="{{ asset('theme/nice/js/jquery.js') }}"></script>
<script src="{{ asset('theme/nice/js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ asset('theme/nice/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/nice/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('theme/nice/js/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ asset('theme/nice/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('theme/nice/js/jquery.nicescroll.js') }}" type="text/javascript"></script>

<script src="{{ asset('theme/nice/js/fullcalendar.min.js') }}"></script>
<!-- Full Google Calendar - Calendar -->
<script src="{{ asset('theme/nice/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ asset('theme/nice/js/calendar-custom.js') }}"></script>
<script src="{{ asset('theme/nice/js/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ asset('theme/nice/js/jquery.customSelect.min.js') }}"></script>
<script src="{{ asset('theme/nice/assets/chart-master/Chart.js') }}"></script>

<script src="{{ asset('theme/nice/js/scripts.js') }}"></script>

<script src="{{ asset('theme/nice/js/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('theme/nice/js/jquery.placeholder.min.js') }}"></script>

<script src="{{ asset('theme/nice/js/morris.min.js') }}"></script>

<script src="{{ asset('theme/nice/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>

    @yield('after-scripts')
    <script>
      //knob
      var APP_URL = "{{ url('/') }}";
      $(function() {
        // $(".knob").knob({
        //   'draw': function() {
        //     $(this.i).val(this.cv + '%')
        //   }
        // })
      });

      //carousel
      $(document).ready(function() {
        // $("#owl-slider").owlCarousel({
        //   navigation: true,
        //   slideSpeed: 300,
        //   paginationSpeed: 400,
        //   singleItem: true

        // });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

  
      $("#alert").fadeTo(2000, 500).slideUp(500, function(){
          $("#alert").slideUp(500);
      });
 
      /* ---------- Map ---------- */
      // $(function() {
      //   $('#map').vectorMap({
      //     map: 'world_mill_en',
      //     series: {
      //       regions: [{
      //         values: gdpData,
      //         scale: ['#000', '#000'],
      //         normalizeFunction: 'polynomial'
      //       }]
      //     },
      //     backgroundColor: '#eef3f7',
      //     onLabelShow: function(e, el, code) {
      //       el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
      //     }
      //   });
      // });
    </script>

</body>

</html>
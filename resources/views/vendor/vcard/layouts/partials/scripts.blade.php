<!--
    - custom js link
  -->
<script src="{{asset('vcard/js/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!-- bootstrap5 -->
<script src="{{asset('vcard/bootstrap5/js/bootstrap.js')}}"></script>
<!-- bootstrap4 -->
<!-- <script src="{{asset('vcard/bootstrap4/js/bootstrap.js')}}"></script> -->

<!--
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript">
  var $div = $("#img");
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      cache: false
    });

    $(function() {
      $("#closeBtn").on('click', function() {
        $('#portfolio_modal').modal('hide');
      });
    });

    $('#portfolio_modal').on('hidden.bs.modal', function(e) {
      $div = $("#img").empty();
    });

    $('body').on('click', '#showPortfolio', function(event) {

      event.preventDefault();
      var id = $(this).data('id');
      $.get('{{url("get-portfolio")}}' + '/' + id, function(data) {
        $('#portfolio_modal').modal('show');
        $('#project_title').html(data.data.portfolio_title);
        $('#client').html(data.data.client);
        if (data.data.type === 1) {
          $('#category').html('web');
        } else if (data.data.type === 2) {
          $('#category').html('mobile');
        } else {
          $('#category').html('dekstop');
        }
        $('#project_date').html(data.data.project_date);
        $('#project_url').attr("href", data.data.project_url);
        $('#project_url').html(data.data.project_url);
        $('#portfolio_desc').html(data.data.portfolio_desc);
        $.each(data.data.tags, function(key, value) {
          $("#tags").append(value.tags_name + " ");
        });

        
        $.each(data.data.images, function(key, value) {
          $("<img />").attr('src', "{{asset('storage/portfolios/images/')}}" + '/' + value.filename).addClass('img-fluid').empty().appendTo($div);
        });
      })
    });
  });
</script>
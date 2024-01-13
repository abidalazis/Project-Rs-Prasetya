<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $tittle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

</head>
<body>
  @include('partial.navbar')
  <div class="container mt-4">
    
    @include('partial.pesan')
    @yield('container')
    
  </div>
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js" ></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
      
  <script>
        // Ambil dari atribut data
        $(document).ready(function() {
            $( '#id_ruangan' ).select2( {
            theme: "bootstrap-5",
            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ),
            });

            $('#id_ruangan').change(function() {
                var category_id = $(this).val();

                $.ajax({
                    url: '/merk/' + category_id,
                    type: 'GET',
                    success: function(data) {
                       $('#nama_merk').val(data[0].nama_merk);
                       $('#id_merk').val(data[0].id);
                      console.log(data[0])

                        // if (data.length > 0) {
                        //     var productsHtml = '<ul>';
                        //     $.each(data, function(index, product) {
                        //         productsHtml += '<li>' + product.name + '</li>';
                        //     });
                        //     productsHtml += '</ul>';
                        //     productsContainer.html(productsHtml);
                        // } else {
                        //     productsContainer.html('<p>No products found for this category.</p>');
                        // }
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            
        });
        
        // $(document).change(function() {
            // $('#id_merk').select2('change', function(){
            //   var ruangan = $(this).val();
            //   console.log(ruangan);
            // }):
        // });
            });
    </script>
</body>
</html>
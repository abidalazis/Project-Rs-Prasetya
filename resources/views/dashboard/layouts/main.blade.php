<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media Tani | Dashboard</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/sidebars.css" rel="stylesheet">
  </head>
  <body>
    
@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.navbar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @include('dashboard.layouts.pesan')
      @yield('container')
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" 
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" 
      crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
      
      <script src="/js/dashboard.js"></script>
      <script src="/js/sidebars.js"></script>
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

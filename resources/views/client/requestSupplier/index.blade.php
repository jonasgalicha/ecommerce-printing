@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
    <style>
        body {
            background-color: #F2F0EB; 
        }
    </style>
  </head>
  <body>

  
  <div class="container"> 
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 5000px;" src="https://scontent.fmnl30-3.fna.fbcdn.net/v/t39.30808-6/403901239_871008234728441_3770152048161635403_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGapa2n1pQ4GjOJStofx1Jfx2pUMSsAiy_HalQxKwCLL6JKrKq-FXw-vpvF3J_DOaBdm2nrZVSxAFV3kT0cDDmn&_nc_ohc=MN9T4C51i4EAX_OQzvQ&_nc_ht=scontent.fmnl30-3.fna&oh=00_AfBXr64_Ldbp_b_nBDzkM8Q7FWwcAKIp1eklMBtEPC6V1w&oe=6560F6E0"   alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://scontent.fmnl30-3.fna.fbcdn.net/v/t39.30808-6/400614211_867300335099231_2852572551703961453_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFusjeICa6-NA00zkLnfDF6fJDXD3cVzHx8kNcPdxXMfFeQCgGJFyup879zTpx-0U32BWk0qYywJezB_fUR3HHJ&_nc_ohc=ioZ6i9kjtd4AX-wYcMw&_nc_ht=scontent.fmnl30-3.fna&oh=00_AfAKIsO6pTJj3UqsNuYOoNpv399dtBX0zsdFqwkOO_asiw&oe=65609BD6" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://scontent.fmnl30-1.fna.fbcdn.net/v/t39.30808-6/398809817_862470825582182_5677030440919830749_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEfrsZYFULLXkc-nZFjwcaCozOj4Q5yOjSjM6PhDnI6NGveSv0DMsxyuUeAOTTw5gL-LuVEBXkrlVl0F8EHFEP8&_nc_ohc=tRAo4gFTQj8AX9xwf_8&_nc_ht=scontent.fmnl30-1.fna&oh=00_AfDo-UGIdsDW_bk1ABWk7zj6v-1h0C_TjEAzTcY5B1fIDA&oe=6560FF6D" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-4+0r1L3FJ25njq8q2u9LfT9G5Q5IYxuVo1q8Q8C5V6DSc8w+JzX4+6t6E4XskKp4" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    // Activate the carousel
    $('#carouselExampleCaptions').carousel({
      interval: 2000, // Set the interval for autoplay in milliseconds (e.g., 2000ms = 2 seconds)
      pause: 'hover' // Pause on mouse hover (optional)
    });
  });
</script>



<div class="container"> 
    <h1 class="display-6 text-center fw-bold"> SERVICES OFFER</h1>
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="card">
            <div class="card-body">  
            <img src="https://scontent.fmnl30-1.fna.fbcdn.net/v/t39.30808-6/362609706_808129997682932_5176945775267993145_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF42H_Ykzw2FTYAZvwe1qdOzCtlbE9b4L3MK2VsT1vgvSrb__TxiA6p7QhwcjUfCokqpucR1lLUYJfE8LlYJn5K&_nc_ohc=6oFbaYOsfNYAX8cSoH0&_nc_ht=scontent.fmnl30-1.fna&oh=00_AfATjYXSlmmxB4ckN3ljRaS2a1lGh8ljO0iOnV7ngYDC3g&oe=6560C3CE" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> LIGHTED PANAFLEX</h1>
            </div>
      </div>    
      <div class="card">
            <div class="card-body">  
            <img src="https://scontent.fmnl30-1.fna.fbcdn.net/v/t39.30808-6/363315804_809070957588836_1400153340437355186_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGcEhp1KhTYJGb81b27_FI8mdbez-2V4amZ1t7P7ZXhqfEOAhBx7SYlazoVEOEj48Cu0HG-TP3G7tw0F_IVL_Sc&_nc_ohc=ujfZ2EsiljEAX8KON3m&_nc_ht=scontent.fmnl30-1.fna&oh=00_AfAo07EbRxnG6OGNjPFt2PhrPFg58TGSENsPfwQVtJjS5Q&oe=655F5DF8" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> ROUND ACRYLIC SIGN</h1>
            </div>
      </div>    
      <div class="card">
            <div class="card-body">  
            <img src="https://scontent.fmnl30-3.fna.fbcdn.net/v/t39.30808-6/365747887_814462570383008_5494749635775008382_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGfKYa5siaE8GGLTlEUTE6gDb2b_BA0Ca0NvZv8EDQJrcZZ3R79VnAX_01iMYdu7BLTVnhGqXfCLgyUsHgflA4n&_nc_ohc=03wj41I4HDEAX8FK2Lh&_nc_ht=scontent.fmnl30-3.fna&oh=00_AfBtrVENkz6JgQku13eBKl0lLwZ8W7-1Xi_F9qbLbuUujQ&oe=65614360" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> BUILD UP ACRYLIC SIGN</h1>
            </div>
      </div>    
      <div class="card">
            <div class="card-body">  
            <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t39.30808-6/341628203_497699535781160_6614230142089568434_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHo1ZoA1logqQoUmVCompHnkSsskmeBPPuRKyySZ4E8-_MzumjbpqVL-BGK4MRiyQB72kIJM0tUYkTX130PEtg-&_nc_ohc=Qzdibu0AdacAX-43uzO&_nc_ht=scontent.fcrk1-4.fna&oh=00_AfA6ETiHQyiB0fnCbu83Y5xDvi21Dzrp3ol_-AUqCIa6BQ&oe=655FCA3E" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> Products</h1>
            </div>
      </div>    
      <div class="card">
            <div class="card-body">  
            <img src="https://static.thenounproject.com/png/396915-200.png" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> Test Project</h1>
            </div>
      </div>    
    </div> 
</div>  
<div class="container"> 
    <h1 class="display-6 text-center fw-bold"> PRODUCTS</h1>
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="card">
            <div class="card-body">  
            <img src="https://static.thenounproject.com/png/396915-200.png" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> TEST PROJECT</h1>
            </div>
      </div>    
      <div class="card">
            <div class="card-body">  
            <img src="https://static.thenounproject.com/png/396915-200.png" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> TEST PROJECT</h1>
            </div>
      </div>    
      <div class="card">
            <div class="card-body">  
            <img src="https://static.thenounproject.com/png/396915-200.png" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> TEST PROJECT</h1>
            </div>
      </div>    
      <div class="card">
            <div class="card-body">  
            <img src="https://static.thenounproject.com/png/396915-200.png" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> Products</h1>
            </div>
      </div>    
      <div class="card">
            <div class="card-body">  
            <img src="https://static.thenounproject.com/png/396915-200.png" 
                alt="Products" class="card-img-top" height="300px" >
                <hr/>   
                <h1 class="text-center"> Products</h1>
            </div>
      </div>    
    </div> 
</div>  
<div class="main py-4">
        
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" 
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
   </script>
</body>
</html>
@endsection
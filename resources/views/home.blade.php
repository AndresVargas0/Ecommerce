@extends('Layouts.nav')
@section('title')
Comercio Nacional e Internacional
@endsection
@vite('resources/css/home.css')
@section('home')
<body>
    <div class="box-cards">
        <div class="card">
            <img src="{{asset('imgs/img1.jpg')}}" alt="">
            <div class="content">
                <h2 class="title">Dizfraz de Cerveza Corona</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit!</p>
                </h3>
                <span>
                    <h4 id="discount">S/.250.00</h4>
                    <h4 id="price">S/.300.00</h4>
                </span>
                <button id="alert">Añadir al Carrito</button>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </div>
        </div>
    </div>
</body>
<script>
    document.getElementById('alert').addEventListener('click', function() {
    Swal.fire({
    title: 'Producto',
    imageUrl: "{{asset('imgs/img1.jpg')}}",
    imageWidth: 200,
    imageHeight: 200,
    html:'<button>comprar</button>',
    position: 'center',
    showCloseButton: true
        });
    });
</script>
<script src="https://kit.fontawesome.com/880d240d27.js" crossorigin="anonymous"></script>
@endsection
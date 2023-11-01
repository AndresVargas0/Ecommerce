@extends('Layouts.navCount')
@section('title')
Comercio Nacional e Internacional
@endsection
@vite('resources/css/home.css')
@section('homeCount')
<body>
    <div class="box-cards">
        <div class="card">
            @foreach($productos as $datos)
            <img src="{{asset('imgs/agua.jpg')}}" alt="">
            <div class="content">
                <h2 class="title">{{$datos->producto}}</h1>
                <p class="description">{{$datos->description}}</p>
                </h3>
                <span>
                    <h4 id="discount">S/.{{$datos->price - $datos->discount}}</h4>
                    <h4 id="price">S/.{{$datos->price}}</h4>
                </span>
                <p class="description">{{$datos->categoria}}</p>
                <button id="alert">Añadir al Carrito</button>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </div>
            @endforeach
        </div>
    </div>
</body>
<script>
    document.getElementById('alert').addEventListener('click', function() {
    Swal.fire({
    title: 'Producto',
    imageUrl: "{{asset('imgs/agua.jpg')}}",
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
@extends('Layouts.navCount')
@section('title')
Comercio Nacional e Internacional
@endsection
@section('perfil')
@vite('resources/css/perfilCount.css')
<body>
    @auth
    <div class="user">
        <h2>Bienvenido {{auth()->user()->user}}!</h1>
        <h5>{{auth()->user()->email}}</h3>
    </div>
    @endauth
    <button class="btn_editperfil" id="edit_perfil">Editar Perfil</button>
    <div id="edit_form" class="edit_form" >
        <span id="close_edit">X</span>
        <form action="" method="POST">
            @csrf
            <label for="">Cambiar Nombre de Usuario</label>
            <input type="text" placeholder="Ingrese Nuevo Nombre">
        </form>
    </div>
    <button class="btn_vender" id="open-popup-button">Vender</button>
    <div id="popup-container" class="popup-container">
        <span id="close">X</span>
        <form class="form_venta" action="{{ route('agregarproductos.post') }}" method="POST">
            @csrf
            <h1 class="title_form">¿Que Producto <br> Desea Vender?</h1>
            <div class="img-destino mt-10 flex flex-col">
                <div class="form-group">
                    <label for="image">Imagen:<br></label>
                    <input class="text-transparent" type="file" name="image" id="image" accept="image/*">
                </div>
                <img id="preview-image" src="#" alt="Imagen de Destino" class="mr-5 my-5" style="display: none; width: 320px; height: 320px;">
            </div>
            <label for="">Nombre del Producto</label>
            <input type="text" id="producto" name="producto" placeholder="PRODUCTO">
            <label for="">Stock</label>
            <input type="text" id="cantidad" name="cantidad" placeholder="CANTIDAD">
            <label for="">DESCRIPCION</label>
            <input type="text" id="description" name="description" placeholder="DESCRIPCION">
            <label for="">Precio</label>
            <input type="text" id="price" name="price" placeholder="PRECIO">
            <label for="">Descuento</label>
            <input type="text" id="discount" name="discount" placeholder="DESCUENTO">
            <label for="">Categoria</label>
            <select type="text" id="categoria" name="categoria">
                <option value="Juegos">Juegos</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Prendas de Vestir">Prendas de Vestir</option>
                <option value="Electronica">Electronica</option>
                <option value="Hogar">Hogar</option>
            </select>
            <button class="btn_publicar" type="submit">Publicar</button>
        </form>
    </div>
</body>
<script>
    document.getElementById('open-popup-button').addEventListener('click', function () {
        document.getElementById('popup-container').style.display = 'flex';
    });
    document.getElementById('close').addEventListener('click', function () {
        document.getElementById('popup-container').style.display = 'none';
    });
</script>
<script>
    document.getElementById('edit_perfil').addEventListener('click', function () {
        document.getElementById('edit_form').style.display = 'flex';
    });
    document.getElementById('close_edit').addEventListener('click', function () {
        document.getElementById('edit_form').style.display = 'none';
    });
</script>
@endsection
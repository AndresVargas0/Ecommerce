@extends('Layouts.navCount')
@section('title')
Comercio Nacional e Internacional
@endsection
@section('perfil')
@vite('resources/css/perfilCount.css')
<body>
    <form action="">
        <div class="img-destino mt-10 flex flex-col">
            <div class="form-group">
                <label for="image">Imagen:<br></label>
                <input class="text-transparent" type="file" name="image" id="image" accept="image/*">
            </div>
            <img id="preview-image" src="#" alt="Imagen de Destino" class="mr-10 my-5" style="display: none; width: 320px; height: 320px;">
        </div>
        <label for="">Nombre del Producto</label>
        <input type="text" id="producto" name="producto" placeholder="PRODUCTO">
        <label for="">Stock</label>
        <input type="text" id="cantidad" name="cantidad" placeholder="CANTIDAD">
        <label for="">Precio</label>
        <input type="text" id="price" name="price" placeholder="PRECIO">
        <label for="">Descuento</label>
        <input type="text" id="discount" name="discount" placeholder="DESCUENTO">
        <label for="">Categoria</label>
        <select type="text" id="producto" name="Categoria">
            <option value="Juegos">Juegos</option>
            <option value="Accesorios">Accesorios</option>
            <option value="Prendas de Vestir">Prendas de Vestir</option>
            <option value="Electronica">Electronica</option>
            <option value="Hpgar">Hogar</option>
        </select>
    </form>
</body>
@endsection


<h1><label for="">Bienvenido Formulario de Creacion</label></h1>

<input type="number" name="id" placeholder="Serial" class="form-control" value="{{isset($libro->id) ? $libro->id : ''}}">

<label for="foto">Foto Libro</label>
<input type="file" name="foto" id="foto" class="form-control" >

<br>
<input type="text" name="Nombre_libro" placeholder="Nombre del libro" class="form-control" value ="{{isset($libro->Nombre_libro) ? $libro->Nombre_libro : ''}}">
<br>
<input type="number" name="stock" placeholder="Cantidades" class="form-control" value="{{isset($libro->stock) ? $libro->stock : ''}}">
<br>
<input type="number" name="copias_prestadas" placeholder="Copias_prestadas" class="form-control" value="{{isset($libro->copias_prestadas) ? $libro->copias_prestadas : ''}}">
<br>
<input type="submit" value="enviar" class="btn btn-primary">

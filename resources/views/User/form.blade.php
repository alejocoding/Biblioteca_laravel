<h1><label for="">Bienvenido Formulario de Creacion</label></h1>

<input type="number" name="id" placeholder="DNI" class="form-control" value="{{isset($User->id) ? $User->id : ''}}">

<br>
<input type="text" name="name" placeholder="Nombre del Usuario" class="form-control" value ="{{isset($User->name) ? $User->name : ''}}">
<br>
<input type="tel" name="Telefono" placeholder="Telefono" class="form-control" value="{{isset($User->Telefono) ? $User->Telefono : ''}}">
<br>
<input type="email" name="email" placeholder="Correo electronico" class="form-control" value="{{isset($User->email) ? $User->email : ''}}">
<br>

<select name="id_estado" id="id_estado">
    <option value="" selected disabled>Escoge tu estado</option>
    @foreach ($estados as $estado)
        <option value="{{$estado->id}}">{{$estado->estado}}</option>
    @endforeach

</select>

<br>
<input type="submit" value="enviar" class="btn btn-primary">

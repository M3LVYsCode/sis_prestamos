

Formulario de creacion de usuarios

<form action="{{url('/usuario')}}" method="post" enctype="multipart/form-data">
  @csrf
  <label>Nombres:</label><br/>
  <input type="text" name="NOMBRES" class="" ><br/>
  <label>Apellido Paterno:</label><br/>
  <input type="text" name="AP_PATERNO" class="" ><br/>
  <label>Apellido Materno:</label><br/>
  <input type="text" name="AP_MATERNO" class="" ><br/>
  <label>Correo:</label><br/>
  <input type="email" name="CORREO" class="" ><br/>
  <label>CI:</label><br/>
  <input type="text" name="CI" class=""><br/>
  <label>CONTRASEÑA:</label><br/>
  <input type="text" name="CLAVE"><br/>
  <label>ROL:</label><br/>
    <select >
      @foreach ($roles as $rol )
      <option name="ID_ROL">{{$rol->NOMBRE}}
      @endforeach
</select><br/>
  
  <label>USUARIO:</label><br/>
  <input type="text" name="USUARIO"><br/>
  <input type="file" name="FOTO"><br/> 
  <input type="submit" value="GUARDAR DATOS"><br/>
</form>
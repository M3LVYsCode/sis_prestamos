Formulario de creacion de categorias

<form action="{{url('/categoria')}}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="text" name="Nombre" class="" >
  <input type="text" name="Descripcion" class="">
  <input type="submit" value="Guardar datos">
</form>
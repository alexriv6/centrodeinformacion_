<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

<body>
  <div class="container">
    <div class="col-md-8 offset-md-3">
      <div class="col-md-4">
        <div class="alert alert-light">
          <h4>Comentarios</h4>
        </div>
      </div>
      <div id="result">
      </div>
      <div class="col-md-8">
        <form action="app/com.php" method="POST">
          <div class="form-group">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre">
          </div>
          <div class="form-group">
            <label>Correo Electrónico</label>
            <input class="form-control" type="text" name="correo" id="correo">
          </div>
          <div class="form-group">
            <label>Teléfono</label>
            <input class="form-control" type="text" name="num_tel" id="num_tel">
          </div>
          <div class="form-group">
            <label>Comentario</label>
            <textarea id="comment" class="form-control" id="comentario" name="comentario"></textarea></label>
          </div>
          <div class="col-md-8 offset-md-4">
            <button type="submit" id="aceptar" name="aceptar" class="btn btn-primary">Enviar</button>
          </div>
          <br>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
          <script src="assets/js/script.js"></script>
        </form>
        <script>
        </script>
</body>

</html>
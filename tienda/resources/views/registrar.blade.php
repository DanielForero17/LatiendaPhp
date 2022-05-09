<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    background-color: whitesmoke; 
}
.form-register {
    width: 400px;
    background: #24303c;
    padding: 30px;
    margin-left: 50px;
    margin-top: 50px;
    margin-bottom: 30px;
    border-radius: 4px;
    font-family: 'calibri';
    color: white;
    box-shadow: 7px 13px 37px #000;
}
.form-register h4 {
    font-size: 22px;
    margin-bottom: 20px;
}
.controls {
    width: 100%;
    background: #24303c;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 1px solid #1f53c5;
    font-family: 'calibri';
    font-size: 18px;
    color: white;
}
  .form-register p {
    height: 40px;
    text-align: center;
    font-size: 18px;
    line-height: 40px;
  }
  .form-register a {
    color: white;
    text-decoration: none;
  }
  .form-register a:hover {
    color: white;
    text-decoration: underline;
  }
  .form-register .botons {
    width: 100%;
    background: #1f53c5;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
  }
.controls {
  width: 100%;
  background: #24303c;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 16px;
  border: 1px solid #1f53c5;
  font-family: 'calibri';
  font-size: 18px;
  color: white;
}
</style>
</head>
<body>
@if(session('exito'))
    <p> {{ (session('exito')) }}</p>
    @endif
<form method="post" action="{{ url('/tiendas/mostrarexito') }}">
@csrf
  <section class="form-register">
    <h4>Nueva Tienda</h4>
    <input class="controls" type="text" name="nombre"  placeholder="Nombre">
    <input class="controls" type="text" name="direccion"  placeholder="Direccion">
    <input class="botons"  type="submit" value="Calcular">
  </section>
</script>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/6eb2dceae6.js" crossorigin="anonymous"></script>
    <title>Ficha Consulta Viaje Humanitario</title>  
  </head>
  <body>
     <header style="height: 70px">
     </header> 
    <div style="height: 30px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-md-2">
          <div class="card shadow-lg p-3 mb-5 bg-white ">
          	<div class="card-header">
          		<h3>CONSULTE SOLICITUD</h3>
          	</div>
            <div class="card-body">
            	<div class="card-header">Ingrese Dni para Consulta</div>
            	<div class="espacio form-row">
                <form action="fichaConsulta.php" method="POST" class="text-center col-md-12">
                	<div class="form-group">
                    <label for="exampleInputEmail1">Dni del solicitante</label>
                    <input name="dniConsulta" type="text" class="form-control" id="exampleInputEmail1" maxlength="9" required>
                    <small class="form-text text-muted">Numero de dni con el siguiente formato 0-9.</small>
                  </div>
                  <button class="btn btn-success" type="submit">Realizar Consulta</button>
                </form>
              </div>
            </div> 
          </div>
        </div>       
      </div>                  
    </div> 
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="codigo.js"></script>
    <script src="ajax/addcom.js"></script>
  </body>
</html>
	
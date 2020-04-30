<!doctype html>
<html lang="en">
<?php
  require_once "controladores/generacodigoControlador.php";
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/6eb2dceae6.js" crossorigin="anonymous"></script>
    <title>Inscripcion Viaje Humanitario</title>  
  </head>
  <body>
     <header style="height: 70px">
     </header> 
    <div style="height: 30px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow-lg p-3 mb-5 bg-white ">
          <div class="card-header"><h3>Registro de Viajes Humanitarios</h3></div>
            <div class="card-body">
              <form id="form1" class="needs-validation formulario" action="controladores/agregarsolicitudControlador.php" method="POST" novalidate autocomplete="off">
                <div class="card-header">1. DATOS PERSONALES</div>
                <div class="espacio form-row">
                  <div class="col-md-5">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">DNI</span>
                      </div>
                      <input name="dnis" type="text" class="form-control" id="dnis" placeholder="" aria-describedby="inputGroupPrepend" maxlength="8" required>
                      <div id="buscarDni" class="buscar input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-search"></i></span>
                      </div>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                   <div class="col-md-7">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Nombres y Apellidos</span>
                      </div>
                      <input name="apenomS" type="text" class="form-control" id="apenomS" placeholder="" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>

                <div class="espacio form-row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Fecha de Nacimiento</span>
                      </div>
                      <input name="fecha_nacimientoS" type="date" class="form-control" id="fecha_nacimientoS" placeholder="" aria-describedby="inputGroupPrepend" required>
                      <input type="text" id="edad" hidden name="edad">
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                   <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Sexo</span>
                      </div>
                      <select name="sexo" class="custom-select" id="inputGroupSelect01">
                        <option selected>Seleccione...</option>
                        <option value="MASCULINO">Masculino</option>
                        <option value="FEMENINO">Femenino</option>
                      </select>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>
                
                <div class="espacio form-row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Celular</span>
                      </div>
                      <input name="celular" type="text" class="form-control" id="celular" placeholder="" aria-describedby="inputGroupPrepend" maxlength="9">
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                   <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Correo</span>
                      </div>
                      <input name="correo" type="email" class="form-control" id="correo" placeholder="" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">el correo debe tener este formato <b>ejemplo@correo.com</b></div>   
                    </div>    
                  </div>
                </div>
                
                <div class="espacio form-row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Direccion actual</span>
                      </div>
                      <input name="direccion_origen" type="text" class="form-control" id="direccion_origen" placeholder="" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                   <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Departamento</span>
                      </div>
                      <input name="departamento_origen" type="text" class="form-control" id="departamento_origen" placeholder="" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>

                <div class="espacio form-row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Provincia</span>
                      </div>
                      <input name="provincia_origen" type="text" class="form-control" id="provincia_origen" placeholder="" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                   <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Distrito</span>
                      </div>
                      <input name="distrito_origen" type="text" class="form-control" id="distrito_origen" placeholder="" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>
                
                <div class="card-header">2. ANTECEDENTE DE VIAJE Y ESTADO ACTUAL DE SALUD</div>
                <div class="espacio form-row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="form-group row cuestion">
                        <label for="inputPassword" class="col-sm-9 col-form-label">¿ha tenido contacto cercano con una persona diagnosticado de COVID-19 o con infeccion respiratoria aguda?</label>
                        <div class="col-sm-3">
                          <select name="contacto_covid" class="custom-select" id="inputGroupSelect01">
                            <option value="1">Si</option>
                            <option selected value="0">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>

                <div class="espacio form-row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="form-group row cuestion">
                        <label for="inputPassword" class="col-sm-9 col-form-label">¿tiene los siguientes sintomas(fiebre,tos,dolor de garganta y dificultad respiratoria)?</label>
                        <div class="col-sm-3">
                          <select class="custom-select" name="sintomas">
                            <option onclick="dias_sintomas(1)" value="1">Si</option>
                            <option selected onclick="dias_sintomas(0)" value="0">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>
                <div class="espacio form-row" id="dias_sintomas" style="display:none">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Cuantos dias presenta los sintomas</span>
                      </div>
                      <input name="dias_sintomas" type="text" class="form-control" id="dias_sintomas" placeholder="" aria-describedby="inputGroupPrepend">
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div> 
                  </div>
                </div>

                <div class="espacio form-row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="form-group row cuestion">
                        <label for="inputPassword" class="col-sm-8 col-form-label">¿tiene alguna enfermedad cronica?</label>
                        <div class="col-sm-4">
                          <select class="custom-select" name="enfermedad_cronica">
                            <option onclick="enfermedad(1)" value="1">Si</option>
                            <option selected onclick="enfermedad(0)" value="0">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>
                <div class="espacio form-row" id="enfermedad" style="display:none">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">indique que tipo de enfermedad tiene</span>
                      </div>
                      <input name="nombre_enfermedad" type="text" class="form-control" id="nombre_enfermedad" placeholder="" aria-describedby="inputGroupPrepend">
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div> 
                  </div>
                </div>

                <div class="espacio form-row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="form-group row cuestion">
                        <label for="inputPassword" class="col-sm-8 col-form-label">¿puede financiar su viaje?</label>
                        <div class="col-sm-4">
                          <select class="custom-select" name="financia_viaje">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>

                <div class="espacio form-row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="form-group row">
                        <div class="col-lg-4 col-md-10">Persona vulnerable</div>
                        <div class="col-lg-2 col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="no_vulnerable" value="1">
                            <label class="form-check-label" for="gridCheck1">
                              No vulnerable
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="gestante" value="1">
                            <label class="form-check-label" for="gridCheck1">
                              Gestante
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="padre_hijos" value="1">
                            <label class="form-check-label" for="gridCheck1">
                              Padre/Madre con niños
                            </label>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="menor_edad" value="1">
                            <label class="form-check-label" for="gridCheck1">
                              Menor de edad con permiso notarial
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>

                
                

                <div class="card-header">3. REGISTRE A SU ACOMPAÑANTE</div>
                <div class="espacio" id="tabla_acompañante">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">DNI</th>
                        <th scope="col">Nombre y Apellidos</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Parentesco</th>
                        <th scope="col"><div class="add input-group-prepend" data-toggle="modal" data-target="#exampleModalScrollable">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-plus"></i></span>
                      </div></th>
                      </tr>
                    </thead>
                    <tbody id=listcom>
                      
                    </tbody>
                  </table>
                </div>

                <div class="card-header">4. ORIGEN DESTINO</div>
                <div class="espacio form-row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Origen</span>
                      </div>
                      <input name="usuario" type="text" class="form-control" id="origen" placeholder="" aria-describedby="inputGroupPrepend" value="" readonly>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                   <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Destino</span>
                      </div>
                      <select name="distrito_destino" class="custom-select" id="inputGroupSelect01" required>
                        <option selected>Seleccione Distrito</option>
                        <option value="aucara">aucara</option>
                        <option value="cabana">cabana</option>
                        <option value="andamarca">carmen salcedo</option>
                        <option value="chaviña">chaviña</option>
                        <option value="chipao">chipao</option>
                        <option value="huac-huas">huac-huas</option>
                        <option value="laramate">laramate</option>
                        <option value="lprado">leoncio prado</option>
                        <option value="llauta">llauta</option>
                        <option value="lucanas">lucanas</option>
                        <option value="ocaña">ocaña</option>
                        <option value="otoca">otoca</option>
                        <option value="puquio">puquio</option>
                        <option value="saisa">saisa</option>
                        <option value="scristobal">san cristobal</option>
                        <option value="sjuan">san juan</option>
                        <option value="spadro">san pedro</option>
                        <option value="palco">san pedro de palco</option>
                        <option value="sancos">sancos</option>
                        <option value="huaycahuacho">huaycahuacho</option>
                        <option value="slucia">santa lucia</option>
                      </select>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>
                <div class="espacio form-row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Direccion de LLegada</span>
                      </div>
                      <input name="direccion_destino" type="text" class="form-control" id="usuario" placeholder="" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>    
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="invalidCheck" name="acepta_dj" required>
                    <label class="form-check-label" for="invalidCheck">declaro bajo juramento que la informacion proporcionada es verdadera</label>
                    <div class="valid-feedback">¡Aceptado!</div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="invalidCheck" name="acepta_tdatos" required>
                    <input type="text" name="codigo_solicitud" value="<?php echo $mostrar;?>" hidden>
                    <label class="form-check-label" for="invalidCheck">autorizo de manera expresa e inequivoca el tratamiento de los datos para los fines de la emergencia COVID-19</label>
                    <div class="valid-feedback">¡Aceptado!</div>
                  </div>
                </div>
                  <button class="btn btn-danger" type="reset">Cancelar Solicitud</button>
                  <button class="btn btn-primary" type="submit">Registrar Solicitud</button>
              </form>
            </div> 
          </div>
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Agregar Acompañante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="addcom">
                      <div class="form-group">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">DNI</label>
                        <input name="dni" type="text" class="form-control" id="dni" placeholder="" maxlength="8">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Apellidos y Nombres</label>
                        <input name="apenom" type="text" class="form-control" id="apenom" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
                        <input name="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Sexo</label>
                        <select name="sexo" class="custom-select" id="sexo">
                          <option selected>Seleccione...</option>
                          <option value="masculino">Masculino</option>
                          <option value="femenino">Femenino</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Parentesco</label>
                        <input name="parentesco" type="text" class="form-control" id="parentesco" placeholder="">
                        <input name="codigo_solicitud" type="text" class="form-control" id="codigo_solicitud" value="<?php echo $mostrar;?>" hidden>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Agregar Acompañante</button>
                      </div>
                    </form>
                  </div>
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



 
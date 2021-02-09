<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">#regiration_form fieldset:not(:first-of-type) {display: none;} </style>
    <title>Formulario</title>
</head>

<body>
    <div class="container">
         <h1>Registro de usuarios paso a paso</h1>
         <div class="progress">
         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <form id="regiration_form" novalidate action="action.php"  method="post">
    <fieldset>
    <h2>Paso 1: Datos indispensables </h2>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="nombre" class="form-control" id="nombre" name="data[nombre]" placeholder="Nombre">
    </div>
    <div class="form-group">
         <label for="apellido">Apellido</label>
         <input type="apellido" class="form-control" id="apellido" name="data[apellido]" placeholder="Apellido">
    </div>
    <div class="form-group">
         <label for="cedula">Cédula</label>
         <input type="cedula" class="form-control" id="cedula" name="data[cedula]" placeholder="Cédula" maxlength="8">
    </div>
        <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
    </fieldset>
    <fieldset>
    <h2> Paso 2: Agregar detalles personales en la empresa</h2>
    <div class="form-group">
        <label for="sueldo">Sueldo</label>
        <select class="form-control" name="data[sueldo]"id="sueldo">
            <option id="sueldo" value="" placeholder="sueldo"></option>
            <option id="sueldo" value="200$">200$</option>
            <option id="sueldo" value="500$">500$</option>
            <option id="sueldo" value="700$">700$</option>
            <option id="sueldo" value="1050$">1050$</option>
        </select>
    </div>
    <div class="form-group">
        <label for="departamento">Departamento</label>
        <select class="form-control" name="data[departamento]"id="departamento">
            <option id="departamento" value="" placeholder="Departamento"></option>
            <option id="departamento" value="Administración">Administración</option>
            <option id="departamento" value="Logística">Logística</option>
            <option id="departamento" value="Producción">Producción</option>
            <option id="departamento" value="Control de Gestión">Control de Gestión</option>
        </select>
    </div>
    <div class="form-group">
        <label for="lugar">Lugar de trabajo</label>
        <select class="form-control" name="data[lugar]"id="lugar" >
            <option id="lugar" value="" placeholder="Lugar de Trabajo"></option>
            <option id="lugar" value="Oficinas">Oficinas</option>
            <option id="lugar" value="Campo">Campo</option>
            <option id="lugar" value="Data-Center">Data-Center</option>
            <option id="lugar" value="Área de Ventas">Área de Ventas</option>
        </select>
    </div>
        <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
        <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
    </fieldset>
    <fieldset>
    <h2>Paso 3: Información adicional</h2>
    <div class="form-group">
        <label for="mob">Número Celular</label>
        <input type="mob" class="form-control" id="mob" name="data[numero]" placeholder="Numero Celular" maxlength="11">
    </div>
    <div class="form-group">
        <label for="address">Dirección</label>
        <textarea  class="form-control" name="data[address]" placeholder="Dirección"></textarea>
    </div>
        <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
        <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
    </fieldset>
    </form>
    </div>
</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>
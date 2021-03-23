<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <title>S-Health - Nuevo Paciente</title> 
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
  <script src="js/prefixfree.min.js"></script>

  <script>
   function validar(){

      var empresa = document.f1.cod_emp.value;
      var tipo_doc = document.f1.cod_tipo_doc.value;
      var sexo = document.f1.sexo.value;

      if(tipo_doc == '0'){
        alert('Por favor, seleccione el tipo de documento del paciente.');
        return false;
      }

      if(sexo == '0'){
        alert('Por favor, seleccione el sexo del paciente.');
        return false;
      }
      
      if(empresa == '0'){
        alert('Por favor, seleccione la empresa del paciente.');
        return false;
      }

      return true;
   }
  </script>

  <style> 
      /* #### bootstrap Form #### */
      .bootstrap-frm {
          margin-left:auto;
          margin-right:auto;

          max-width: 700px;
          background: #bdcedb;
          padding: 20px 30px 20px 30px;
          font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
          color: #888;
          text-shadow: 1px 1px 1px #FFF;
          border:1px solid #DDD;
          border-radius: 5px;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
      }
      .bootstrap-frm h1 {
          font: 25px "Helvetica Neue", Helvetica, Arial, sans-serif;
          padding: 0px 0px 10px 40px;
          display: block;
          border-bottom: 1px solid #DADADA;
          margin: -10px -30px 30px -30px;
          color: #888;
          text-align: center;
      }
      .bootstrap-frm h1>span {
          display: block;
          font-size: 11px;
      }
      .bootstrap-frm label {
          display: block;
          margin: 0px 0px 5px;
      }
      .bootstrap-frm label>span {
          float: left;
          width: 20%;
          text-align: right;
          padding-right: 10px;
          margin-top: 10px;
          color: #333;
          font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
          font-weight: bold;
      }
      .bootstrap-frm input[type="text"], .bootstrap-frm input[type="email"], input[type="date"], .bootstrap-frm input[type="password"], .bootstrap-frm textarea, .bootstrap-frm select{
          border: 1px solid #CCC;
          color: #888;
          height: 35px;
          line-height:15px;
          margin-bottom: 16px;
          margin-right: 6px;
          margin-top: 2px;
          outline: 0 none;
          padding: 5px 0px 5px 5px;
          width: 100%;
          border-radius: 4px;
          -webkit-border-radius: 4px;
          -moz-border-radius: 4px;    
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      }
      .bootstrap-frm select {
          background: #FFF url('down-arrow.png') no-repeat right;
          background: #FFF url('down-arrow.png') no-repeat right;
          appearance:none;
          /*-webkit-appearance:none;*/ 
          -moz-appearance: none;
          text-indent: 0.01px;
          text-overflow: '';
          width: 103%;
          height: 35px;
          line-height:15px;
      }
      .bootstrap-frm textarea{
          height:100px;
          padding: 5px 0px 0px 5px;
          width: 70%;
      }
      .bootstrap-frm .submit {
          background: #FFF;
          border: 1px solid #CCC;
          padding: 10px 25px 10px 25px;
          color: #333;
          border-radius: 4px;
      }
      .bootstrap-frm .submit:hover {
          color: #333;
          background-color: #EBEBEB;
          border-color: #ADADAD;
      }
      body{
        /*background: url(images/fondo1.png) no-repeat fixed center;*/
        /*background: url(background.jpg) no-repeat fixed center;*/
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
      }
  </style>

  <script type="text/javascript">
    function llenarTipoDoc() { //Llenar dropdown de tipo de documento
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_tipo_doc.innerHTML = ajax_email.responseText;            
          }
        }

        ajax_email.open("GET","llenarTipoDoc.php",false);
        ajax_email.send();        
      }

    function llenarDiv() { //Llenar dropdown de municipios
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_div_mun.innerHTML = ajax_email.responseText;
            document.f1.cod_div_mun_res.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarDiv.php",false);
        ajax_email.send();        
      }

      function llenarEmp() {//Llenar dropdown de empresa
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_emp.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarEmp.php",false);
        ajax_email.send();        
      }

      function llenarEst() {//Llenar dropdown de estrato
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_estra.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarEst.php",false);
        ajax_email.send();        
      }

      function llenarEtn() {//Llenar dropdown de etnia
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_etn.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarEtn.php",false);
        ajax_email.send();        
      }

      function llenarCiuo() {//Llenar dropdown de ocupacion
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_ciuo.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarCiuo.php",false);
        ajax_email.send();        
      }

      function llenarEsc() {//Llenar dropdown de escolaridad
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_esc.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarEsc.php",false);
        ajax_email.send();        
      }

      function llenarInsEdu() {//Llenar dropdown de institucion educativa
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_ins_edu.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarInsEdu.php",false);
        ajax_email.send();        
      }

      function llenarEstCiv() {//Llenar dropdown de estado civil
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_est_civ.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarEstCiv.php",false);
        ajax_email.send();        
      }

      function llenarDis() {//Llenar dropdown de discapacidad
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_disc.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarDis.php",false);
        ajax_email.send();        
      }

      function llenarPar() {//Llenar dropdown de parentezco
        
        if (window.XMLHttpRequest) {
          ajax_email=new XMLHttpRequest();
        } 
        else {
          ajax_email=new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax_email.onreadystatechange=function() {

          if (ajax_email.readyState==4) {            
            document.f1.cod_par.innerHTML = ajax_email.responseText;
          }
        }

        ajax_email.open("GET","llenarPar.php",false);
        ajax_email.send();        
      }
  </script>

  <script type="text/javascript">
    function cerrar(){
      window.close();
    }    
  </script>

  <script type="text/javascript">
    function popularForm(){
      llenarTipoDoc();
      llenarDiv();
      llenarEmp();
      llenarEst();
      llenarEtn();
      llenarCiuo();
      llenarEsc();
      llenarInsEdu();
      llenarEstCiv();
      llenarDis();
      llenarPar();
    }    
  </script>

</head>
<body onload="popularForm()">
  <div align="center">
    <div align="center">
      <!--<img align="center" style="width:20%; display:block; border:0; margin-left:-8px; margin-top:-8px; margin-right:-8px;" src="http://i943.photobucket.com/albums/ad274/Carlos_Jaramillo_Corrales/logo%202_zpsl3rsvbfk.png"/>-->
    </div>
    <div>
      <form class="bootstrap-frm" name="f1" action="nuevo_usuario_save.php" style="width:80%" onsubmit="return validar(this)" method="POST" enctype="multipart/form-data">
        <div>
          <h2>Registro de Nuevo Paciente</h2>
        </div>
        <div> <!--Número de cédula-->
          <label align="left">Número de Documento</label>   <input align="right" style="height: 35px;" required  type="text" name="no_historia">
        </div>
        <div> <!--Tipo de documento-->
          <label>Tipo de Documento</label>
          <select name="cod_tipo_doc">
            <option value="0">Seleccione</option>            
          </select>
        </div>
        <div> <!--Apellido 1-->
          <label>Primer Apellido</label>   <input required  type="text" name="apel_1">
        </div>
        <div> <!--Apellido 2-->
          <label>Segundo Apellido</label>   <input type="text" name="apel_2">
        </div>
        <div> <!--Nombre 1-->
          <label>Primer Nombre</label>   <input required  type="text" name="nom_1">
        </div>
        <div> <!--Nombre 1-->
          <label>Segundo Nombre</label>   <input  type="text" name="nom_2">
        </div>
        <div><!--Sexo-->
          <label>Sexo</label>  
          <select name="sexo"><option value="0">Seleccione</option><option value="F">Femenino</option><option value="M">Masculino</option></select>
        </div>
        <div> <!--Fecha de Nacimiento-->
          <label>Fecha de Nacimiento</label>   <input required  type="date" name="fec_nac">
        </div>
        <div><!--Municipio de Nacimiento-->
          <label>Municipio de Nacimiento</label>
          <select name="cod_div_mun">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>        
        <div><!--Municipio de Residencia-->
          <label>Municipio de Residencia</label>  
          <select name="cod_div_mun_res">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Dirección de Residencia-->
          <label>Dirección de Residencia</label>   <input value="No Disponible"  type="text" name="direccion">
        </div>
        <div> <!--Barrio-->
          <label>Barrio</label>   <input value="No Disponible" type="text" name="barrio">
        </div>
        <div> <!--Teléfono-->
          <label>Teléfono</label>   <input value="0" type="text" name="telefono">
        </div>
        <div> <!--Celular-->
          <label>Celular</label>   <input value="0"  type="text" name="celular">
        </div>
        <div> <!--Correo Electrónico-->
          <label>Correo Electrónico</label>   <input value="no_dispone@gmail.com"  type="email" name="email">
        </div>
        <div> <!--Empresa-->
          <label>Empresa</label>
          <select name="cod_emp">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Estrato-->
          <label>Estrato</label>
          <select name="cod_estra">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Etnia-->
          <label>Etnia</label>
          <select name="cod_etn">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Ocupación-->
          <label>Ocupación</label>
          <select name="cod_ciuo">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Escolaridad-->
          <label>Escolaridad</label>
          <select name="cod_esc">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Institución Educativa-->
          <label>Institución Educativa</label>
          <select name="cod_ins_edu">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Estado Civil-->
          <label>Estado Civil</label>
          <select name="cod_est_civ">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Discapacidad-->
          <label>Discapacidad</label>
          <select name="cod_disc">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Contacto-->
          <label>Contacto</label>   <input value="No Disponible" type="text" name="contac">
        </div>
        <div> <!--Teléfono de Contacto-->
          <label>Teléfono de Contacto</label>   <input value="0" type="text" name="tel_cont">
        </div>
        <div> <!--Dirección de Contacto-->
          <label>Dirección de Contacto</label>   <input value="No Disponible" type="text" name="dir_cont">
        </div>
        <div> <!--Parentezco-->
          <label>Parentezco</label>
          <select name="cod_par">
            <option value="0">Seleccione un Tipo</option>            
          </select>
        </div>
        <div> <!--Dirección de Contacto-->
          <input required class="submit" type="submit" name="btn_enviar" value="Crear Usuario">
          <input required class="submit" type="button" name="btn_cancelar" value="Cancelar" onclick="cerrar()">
        </div>
      </form>
    </div>
  </div>
  
  
</body>
</html>
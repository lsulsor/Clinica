$(document).ready(function () {
  //Gestión de Profesional
  formEsp();
  $("#contraFormProf").hide();
  $("#insertFormProf").hide();
  $("#tablaProf").hide();
  $("#contraIguaC").hide();
  $("#contraDifC").hide();
  $("#contraIgua").hide();
  $("#contraDif").hide();
  $("#resultBusqueda").hide();
  $("#asignarSerivicio").hide();
  $("#tablaTipoEspecialidad").hide();
  $("#formAnadirEsp").hide();
  $("#verProfO").hide();
  $("#insertFProfO").hide();

  //Gestión de Usuarios
  formProfesionalAP();
  formHtipoAP();
  $("#titInserRegUsu").hide();
  $("#titActRegUsu").hide();
  $("#titBorRegUsu").hide();
  $("#anadirRegUsu").hide();
  $("#actRegUsu").hide();
  $("#borrRegUsu").hide();
  $("#insertFormUsu").hide();
  $("#contraDifUsu").hide();
  $("#contraIguaUsu").hide();
  $("#tablaUsu").hide();
  $("#contraFormUsu").hide();
  $("#asigProfesional").hide();
  $("#mostrarUsuO").hide();
  $("#insertFUsuO").hide();

  //Gestión de horarios
  $("#insertHorario").hide();
  $("#tablaHorario").hide();
  $("#verHorarioO").hide();
  $("#insertFHorarioO").hide();
  $("#hora").clockpicker();

  formHorariosProfesional();
  formHorariosUsuarios();
  formHorariotipo();

  //Gestión de Materiales

  $("#insertMaterial").hide();
  $("#tablaMaterial").hide();
  $("#verMaterialO").hide();
  $("#bInsertarMaterialO").hide();

  //Gestión de Pagos
  formPagoUsuarios();
  formPagotipo();
  $("#tablaPagos").hide();
  $("#insertFormPag").hide();
  $("#verPagosO").hide();
  $("#insertPagosO").hide();

  //Gestión de Sesiones
  $("#resultBusquedaSesiones").hide();

  // Gestión Area Profesional
  $("#tHorProf").hide();
  $("#tablaProfHorario").hide();
  $("#bverHorProfO").hide();

  //Gestión de sesiones

  formSesionesUsuariosGestion();
  $("#horaSesiones").clockpicker();
  $("#insertUSesiones").hide();
  $("#tablaSesionesU").hide();
  $("#insertarUSesionesO").hide();
  $("#mostrarUSesionesO").hide();

  //Gestión de Observaciones
  formSesionesUsuarios();
  $("#insertObservaciones").hide();
  $("#tablaObservaciones").hide();
  $("#insertarObservacionesO").hide();
  $("#mostrarObservacionesO").hide();

  //Gestion de familia
  $("#tablaHorarioUsuario").hide();
  $("#tablaObservacionesUsuario").hide();
  $("#modUsuarioUsu").hide();
  $("#ocultarO").hide();
  $("#btnCrearPdf").hide();

  //Gestión de la empresa
  $("#formEmpresa").hide();
  $("#aceptarE").hide();
  $("#modifE").hide();
  $("#verDatosEO").hide();

  //Gestión Dirección
  $("#formEmpresaD").hide();
  $("#aceptarD").hide();
  $("#modifD").hide();
  $("#mContraD").hide();
  $("#contraFormD").hide();
  $("#contraDifD").hide();
  $("#contraIguaD").hide();
  $("#verMisDatosO").hide();

  //Gestión de Gastos
  $("#insertFormGast").hide();
  $("#tablaGastos").hide();
  $("#verGastosO").hide();
  $("#insertGastosO").hide();
  /**
   * Validamos el formulario de contacto
   *
   */
  $("#formContacto").submit(function (e) {
    e.preventDefault();
    if ($("#name").val().length < 1) {
      alert("El nombre es obligatorio");
      return false;
    }
    return false;
  });

  /**
   *
   *  Validación de los datos Profesionales en el formulario insertar
   */
  $("#task-form").validate({
    rules: {
      dniProf: {
        required: true,
        minlength: 9,
      },
      nombreProf: {
        required: true,
        minlength: 3,
      },
      apellidoProf: {
        required: true,
        minlength: 3,
      },
      telefonoProf: {
        required: true,
        number: true,
        rangelength: [9, 11],
      },
      calleProf: {
        required: true,
        minlength: 3,
      },
      numeroProf: {
        required: true,
        number: true,
        rangelength: [1, 3],
      },
      pisoProf: {
        required: false,
        number: true,
      },
      letraProf: {
        required: false,
      },
      cpProf: {
        required: true,
        number: true,
        rangelength: [5, 5],
      },
      provinciaProf: {
        required: true,
        minlength: 3,
      },
      usuarioProf: {
        required: true,
        minlength: 5,
      },
      contraProf: {
        required: true,
        minlength: 6,
      },
      contraProfR: {
        required: true,
      },

      fechaAltaProf: {
        required: true,
      },
    },
    messages: {
      dniProf: {
        required: "Debe escrbirir el DNI del profesional",
        minlength: "Escrbia un DNI correcto",
      },
      nombreProf: {
        required: "Debe escribir el nombre del profesional",
        minlength: "El nombre debe de tener 3 letras cómo mínimo",
      },
      apellidoProf: {
        required: "Debe escribir el apellidos completo del Profesional",
        minlength: "El apellido debe de tener 3 letras cómo mínimo",
      },
      telefonoProf: {
        required: "Escriba el número de teléfono del Profesional",
        number: "Sólo se admiten números",
        rangelength: "Mínimo 9 y máximo 11",
      },
      calleProf: {
        required: "Debe escribir la calle del profesional",
        minlength: "La calle debe de tener 3 letras cómo mínimo",
      },
      numeroProf: {
        required: "Escriba el número de la calle del Profesional",
        number: "Sólo se admiten números",
        rangelength: "Mínimo 1 y máximo 3",
      },
      pisoProf: {
        number: "Sólo se admiten números",
      },
      cpProf: {
        required: "Escriba el código postal del Profesional",
        number: "Sólo se admiten números",
        rangelength: "Sólo 5 dígitos",
      },
      provinciaProf: {
        required: "Debe escribir la provincia del profesional",
        minlength: "La provincia debe de tener 3 letras cómo mínimo",
      },
      usuarioProf: {
        required: "Debe escribir el usuario del profesional",
        minlength: "El usuario debe de tener 5 letras cómo mínimo",
      },
      contraProf: {
        required: "Debe escribir una contraseña",
        minlength: "Debe tener 6 carácteres como mínimo",
      },
      contraProfR: {
        required: "Vuelva a escribir la contraseña",
      },
      fechaAltaProf: {
        required: "Escriba la fecha de alta del profesional",
      },
    },
  });
  /**
   *  Comprueba que las dos contraseñas son iguales en formulario insertar Profesional
   */
  $("#contraProfR").keyup(function () {
    var pass1 = $("#contraProf").val();
    var pass2 = $("#contraProfR").val();
    if (pass1 == pass2) {
      $("#contraDif").hide();
      $("#contraIgua").show();
    }
    if (pass1 !== pass2) {
      $("#contraDif").show();
      $("#contraIgua").hide();
    }
  });

  /**
   *  Muestra los profesionales
   */

  $(document).on("click", "#verProf", function mostrarProfesional(e) {
    e.preventDefault();
    $("#insertFormProf").hide();
    $("#contraFormProf").hide();
    $("#asignarSerivicio").hide();
    $("#tablaTipoEspecialidad").hide();
    $("#insertFProfO").hide();
    $("#insertFProf").show();
    $("#verProf").hide();
    $("#verProfO").show();
    $("#tablaProf").fadeIn(1000);

    //Enviamos la petición por ajax
    $.ajax({
      url: "mostrarProfesional.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasks = JSON.parse(response);

        //Mostramos los datos
        var template = "";
        tasks.forEach((task) => {
          if (task.fecha_baja == "0000-00-00") {
            task.fecha_baja = "-";
          }
          if (task.estado == "alta") {
            template += `
            <tr taskDni="${task.dni}" class="table-success">
                <td>${task.dni}</td>
                <td>${task.nombre}</td>
                <td>${task.apellido}</td>
                <td>${task.num_colegiado}</td>
                <td>${task.telefono}</td>
                <td>${task.calle}</td>
                <td>${task.numero}</td>
                <td>${task.piso}</td>
                <td>${task.letra}</td>
                <td>${task.cp}</td>
                <td>${task.provincia}</td>
                <td>${task.usuario}</td>
                <td>${task.fecha_alta}</td>
                <td>${task.fecha_baja}</td>
                <td>${task.estado}</td>
                <td>
                <button class= "task-delete btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                </svg>
                Eliminar
                </button>
                </td>
                 <td>
                <button class= "task-item btn btn-warning"><svg class="bi bi-arrow-counterclockwise" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z" clip-rule="evenodd"/>
                </svg>
                  Actualizar
                </button>
               
                </td>
                <td>
                <button class= "task-cambiarContra btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
<path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 0 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
<path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
</svg>
                  Contraseña
                </button>
               
                </td>
                <td>
                <button class= "task-asignarServicios btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
                  Asignar Especilidad
                </button>
               
                </td>
                
            </tr>
          
        `;
          } else {
            template += `
            <tr taskDni="${task.dni}" class="table-danger">
                <td>${task.dni}</td>
                <td>${task.nombre}</td>
                <td>${task.apellido}</td>
                <td>${task.num_colegiado}</td>
                <td>${task.telefono}</td>
                <td>${task.calle}</td>
                <td>${task.numero}</td>
                <td>${task.piso}</td>
                <td>${task.letra}</td>
                <td>${task.cp}</td>
                <td>${task.provincia}</td>
                <td>${task.usuario}</td>
                <td>${task.fecha_alta}</td>
                <td>${task.fecha_baja}</td>
                <td>${task.estado}</td>
                <td>
                <button class= "task-delete btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                </svg>
                Eliminar
                </button>
                </td>
                 <td>
                <button class= "task-item btn btn-warning"><svg class="bi bi-arrow-counterclockwise" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z" clip-rule="evenodd"/>
                </svg>
                  Actualizar
                </button>
               
                </td>
                <td>
                <button class= "task-cambiarContra btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
<path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 0 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
<path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
</svg>
                  Contraseña
                </button>
               
                </td>
                <td>
                <button class= "task-asignarServicios btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
                  Asignar Especilidad
                </button>
               
                </td>
                
            </tr>
          
        `;
          }
        });
        //Indicamos en index donde se muestran
        $("#tabla").html(template);
      },
    });
  });
  /**
   * Ocultar la tabla de ver profesionales
   */
  $(document).on("click", "#verProfO", function mostrarProfesional(e) {
    e.preventDefault();

    $("#insertFormProf").hide();
    $("#contraFormProf").hide();
    $("#asignarSerivicio").hide();
    $("#tablaTipoEspecialidad").hide();
    $("#formAnadirEsp").hide();
    $("#verProf").show();
    $("#verProfO").hide();
    $("#tablaProf").fadeOut(1000);
  });

  //Insertar Profesional
  $(document).on("click", "#insertFProf", function (e) {
    e.preventDefault();

    $("#contraFormProf").hide();
    $("#tablaProf").hide();
    $("#titInserReg").show();
    $("#titActReg").hide();
    $("#titBorReg").hide();
    $("#task-form").trigger("reset");
    $("#dniProf").removeAttr("disabled");
    $("#nombreProf").removeAttr("disabled");
    $("#apellidoProf").removeAttr("disabled");
    $("#numColegiadoProf").removeAttr("disabled");
    $("#telefonoProf").removeAttr("disabled");
    $("#calleProf").removeAttr("disabled");
    $("#numeroProf").removeAttr("disabled");
    $("#pisoProf").removeAttr("disabled");
    $("#letraProf").removeAttr("disabled");
    $("#cpProf").removeAttr("disabled");
    $("#provinciaProf").removeAttr("disabled");
    $("#usuarioProf").removeAttr("disabled");
    $("#contraProf").removeAttr("disabled");
    $("#contraProfR").removeAttr("disabled");
    $("#fechaAltaProf").removeAttr("disabled");
    $("#fechaBajaProf").removeAttr("disabled");
    $("input[type='radio']").removeAttr("disabled");
    $("#anadirReg").show();
    $("#actReg").hide();
    $("#borrReg").hide();
    $("#asignarSerivicio").hide();
    $("#tablaTipoEspecialidad").hide();
    $("#verProfO").hide();
    $("#verProf").show();
    $("#insertFormProf").slideDown(1000);
    $("#insertFProf").hide();
    $("#insertFProfO").show();
  });

  //Añadir el registro del profesional
  $(document).on("click", "#anadirReg", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      dniProf: $("#dniProf").val(),
      nombreProf: $("#nombreProf").val(),
      apellidoProf: $("#apellidoProf").val(),
      numColegiadoProf: $("#numColegiadoProf").val(),
      telefonoProf: $("#telefonoProf").val(),
      calleProf: $("#calleProf").val(),
      numeroProf: $("#numeroProf").val(),
      pisoProf: $("#pisoProf").val(),
      letraProf: $("#letraProf").val(),
      cpProf: $("#cpProf").val(),
      provinciaProf: $("#provinciaProf").val(),
      usuarioProf: $("#usuarioProf").val(),
      contraProf: $("#contraProf").val(),
      contraProfR: $("#contraProfR").val(),
      fechaAltaProf: $("#fechaAltaProf").val(),
      fechaBajaProf: $("#fechaBajaProf").val(),
      estadoProf: $("input[type='radio']:checked").val(),
    };

    //Enviamos los datos
    $.post("anadirProfesional.php", postData, function (response) {
      //console.log(response);

      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha añadido el regsitro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha añadido los datos correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);

        $("#verProfO").hide();
        $("#verProf").show();
        $("#task-form").trigger("reset");
        $("#insertFormProf").hide();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Ocultar el formulario de Nuevo Profesional
   */
  $(document).on("click", "#insertFProfO", function (e) {
    e.preventDefault();
    $("#contraFormProf").hide();
    $("#asignarSerivicio").hide();
    $("#tablaTipoEspecialidad").hide();
    $("#verProfO").hide();
    $("#tablaProf").hide();
    $("#insertFormProf").slideUp(2000);
    $("#insertFProfO").hide();
    $("#insertFProf").show();
  });

  /**
   * Captura el stock y el código de un producto
   */
  $(document).on("click", ".task-item", function () {
    //Capturamos el codigo
    var element = $(this)[0].parentElement.parentElement;

    var dniP = $(element).attr("taskDni");

    //Enviamos el dato

    $.post(
      "mostrarActualizarP.php",
      {
        dniP,
      },
      function (response) {
        //Mostramos el formulario
        $("#contraFormProf").hide();
        $("#insertFormProf").show();
        $("#titInserReg").hide();
        $("#titBorReg").hide();
        $("#titActReg").show();
        $("#actReg").show();
        $("#anadirReg").hide();
        $("#asignarSerivicio").hide();
        $("#borrReg").hide();

        $("#tablaProf").hide();

        const task = JSON.parse(response);

        //Mostramos los valores en el formulario
        $("#dniProf").val(task.dni).prop("disabled", true);
        $("#nombreProf").val(task.nombre).prop("disabled", false);
        $("#apellidoProf").val(task.apellido).prop("disabled", false);
        $("#numColegiadoProf").val(task.num_colegiado).prop("disabled", false);
        $("#telefonoProf").val(task.telefono).prop("disabled", false);
        $("#calleProf").val(task.calle).prop("disabled", false);
        $("#numeroProf").val(task.numero).prop("disabled", false);
        $("#pisoProf").val(task.piso).prop("disabled", false);
        $("#letraProf").val(task.letra).prop("disabled", false);
        $("#cpProf").val(task.cp).prop("disabled", false);
        $("#provinciaProf").val(task.provincia).prop("disabled", false);
        $("#usuarioProf").val(task.usuario).prop("disabled", false);
        $("#contraProf").hide().prop("disabled", false);
        $("#contraProfR").hide().prop("disabled", false);
        $("#fechaAltaProf").val(task.fecha_alta).prop("disabled", false);
        $("#fechaBajaProf").val(task.fecha_baja).prop("disabled", false);
        if (task.estado == "baja") {
          $("#estadoProfBaja").prop("checked", true);
        }
        if (task.estado == "alta") {
          $("estadoProfAlta").prop("checked", true);
        }
      }
    );
  });

  /*
   * Actualiza el registro de un profesional
   */
  $(document).on("click", "#actReg", function (e) {
    //Evitamos que envie los datos de forma predeterminada
    e.preventDefault();

    //Almacenamos los datos
    const postData = {
      dniProf: $("#dniProf").val(),
      nombreProf: $("#nombreProf").val(),
      apellidoProf: $("#apellidoProf").val(),
      numColegiadoProf: $("#numColegiadoProf").val(),
      telefonoProf: $("#telefonoProf").val(),
      calleProf: $("#calleProf").val(),
      numeroProf: $("#numeroProf").val(),
      pisoProf: $("#pisoProf").val(),
      letraProf: $("#letraProf").val(),
      cpProf: $("#cpProf").val(),
      provinciaProf: $("#provinciaProf").val(),
      usuarioProf: $("#usuarioProf").val(),
      fechaAltaProf: $("#fechaAltaProf").val(),
      fechaBajaProf: $("#fechaBajaProf").val(),
      estadoProf: $("input[type='radio']:checked").val(),
    };
    //Se envia los datos
    $.post("actualizarProfesional.php", postData, function (response) {
      //console.log(response);
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>No se ha modificado los datos</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se han actualizado los datos correctamente</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> `;
        $("#errores").html(template);

        $("#verProfO").hide();
        $("#verProf").show();
        $("#task-form").trigger("reset");
        $("#insertFormProf").hide();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Mostrar el formulario para borrar registros del profesional
   */
  $(document).on("click", ".task-delete", function () {
    //Capturamos el codigo
    var element = $(this)[0].parentElement.parentElement;

    var dniP = $(element).attr("taskDni");

    //Enviamos el dato

    $.post(
      "mostrarBorrarP.php",
      {
        dniP,
      },
      function (response) {
        //Mostramos el formulario
        $("#contraFormProf").hide();
        $("#insertFormProf").show();
        $("#titInserReg").hide();
        $("#titActReg").hide();
        $("#actReg").hide();
        $("#anadirReg").hide();
        $("#tablaProf").hide();
        $("#asignarSerivicio").hide();
        $("#titBorReg").show();
        $("#borrReg").show();

        const task = JSON.parse(response);

        //Mostramos los valores en el formulario
        $("#dniProf").val(task.dni).prop("disabled", true);
        $("#nombreProf").val(task.nombre).prop("disabled", true);
        $("#apellidoProf").val(task.apellido).prop("disabled", true);
        $("#numColegiadoProf").val(task.num_colegiado).prop("disabled", true);
        $("#telefonoProf").val(task.telefono).prop("disabled", true);
        $("#calleProf").val(task.calle).prop("disabled", true);
        $("#numeroProf").val(task.numero).prop("disabled", true);
        $("#pisoProf").val(task.piso).prop("disabled", true);
        $("#letraProf").val(task.letra).prop("disabled", true);
        $("#cpProf").val(task.cp).prop("disabled", true);
        $("#provinciaProf").val(task.provincia).prop("disabled", true);
        $("#usuarioProf").val(task.usuario).prop("disabled", true);
        $("#contraProf").show().prop("disabled", true);
        $("#contraProfR").show().prop("disabled", true);
        $("#fechaAltaProf").val(task.fecha_alta).prop("disabled", true);
        $("#fechaBajaProf").val(task.fecha_baja).prop("disabled", true);
        $("input[type='radio']").prop("disabled", true);
      }
    );
  });

  /**
   *
   *  Borrar el registro de un profesional
   */
  $(document).on("click", "#borrReg", function (e) {
    //Evitamos que envie los datos de forma predeterminada
    e.preventDefault();
    //console.log('Boton');
    //Almacenamos los datos
    if (confirm("¿Quiere eliminar este registro?")) {
      //Guardamos los datos
      const postData = {
        dniP: $("#dniProf").val(),
      };

      $.post("borrarProfesional.php", postData, function (response) {
        let template = "";
        if (response == 0) {
          template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido eliminar ningún registro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
          $("#errores").html(template);
        } else if (response > 0) {
          template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado el regsitro correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
          $("#errores").html(template);

          $("#verProfO").hide();
          $("#verProf").show();
          $("#task-form").trigger("reset");
          $("#insertFormProf").hide();
        } else {
          $("#errores").html(response);
        }
      });
    }
  });

  /**
   * Muestra la contraseña de un profesional en el formulario
   */
  $(document).on("click", ".task-cambiarContra", function () {
    //Capturamos el codigo
    var element = $(this)[0].parentElement.parentElement;

    var dniP = $(element).attr("taskDni");
    console.log(dniP);
    //Enviamos el dato

    $.post(
      "mostrarActualizarP.php",
      {
        dniP,
      },
      function (response) {
        //Mostramos el formulario
        $("#insertFormProf").hide();
        $("#titInserReg").hide();
        $("#titBorReg").hide();
        $("#titActReg").hide();
        $("#actReg").hide();
        $("#anadirReg").hide();
        $("#borrReg").hide();
        $("#tablaProf").hide();
        $("#asignarSerivicio").hide();
        $("#contraFormProf").show();

        //console.log(response);
        const task = JSON.parse(response);
        //console.log(task);

        //Mostramos los valores en el formulario
        $("#dniProfC").val(task.dni).prop("disabled", true);
      }
    );
  });

  /**
   * Combrueba que las contraseñas son iguales antes de enviar los datos
   */
  $("#contraProfCR").keyup(function () {
    var pass1C = $("#contraProfC").val();
    var pass2C = $("#contraProfCR").val();
    if (pass1C == pass2C) {
      $("#contraDifC").hide();
      $("#contraIguaC").show();
    }

    if (pass1C !== pass2C) {
      $("#contraDifC").show();
      $("#contraIguaC").hide();
    }
  });

  /**
   * Cambiar contraseña del profesional
   */
  $(document).on("click", "#cambiarContra", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      dniProfC: $("#dniProfC").val(),
      contraProfC: $("#contraProfC").val(),
      contraProfCR: $("#contraProfCR").val(),
    };

    //Enviamos los datos
    $.post("cambiarContraProf.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido cambiar la contraseña</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Contraseña cambiada</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);

        $("#verProfO").hide();
        $("#verProf").show();
        $("#task-formContra").trigger("reset");
        $("#contraFormProf").hide();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Búsqueda de usuario en la base de datos
   */
  $("#search").keyup(function () {
    let template = "";

    //Si existe un valor
    if ($("#search").val()) {
      //Lo almacenamos
      var search = $("#search").val();

      //Realizamos la petición por ajax
      $.ajax({
        url: "buscarUsuario.php",
        data: { search },
        type: "POST",
        success: function (response) {
          if (response.length == 2) {
            $("#resultadoV").show();

            template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>No se ha encontrado ningún usuario. </strong> Pruebe con otro nombre. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> `;
            $("#resultadoV").html(template);
            window.setTimeout(function () {
              $("#resultadoV")
                .fadeTo(500, 0)
                .slideUp(500, function () {
                  $(this).remove();
                });
            }, 2000);
          } else {
            if (!response.error) {
              $("#resultBusqueda").show();
              let tasks = JSON.parse(response);

              tasks.forEach((task) => {
                template += `
                            <tr taskDni="${task.dni}">
                            <td>${task.dni}</td>
                            <td>${task.nombre}</td>
                            <td>${task.apellidos}</td>
                            <td>${task.fecha_nacimiento}</td>
                            <td>${task.responsable}</td>
                            <td>${task.calle}</td>
                            <td>${task.numero}</td>
                            <td>${task.piso}</td>
                            <td>${task.letra}</td>
                            <td>${task.cp}</td>
                            <td>${task.provincia}</td>
                            <td>${task.telefono}</td>
                            <td>${task.correo}</td>
                            <td>${task.usuario}</td>
                            <td>${task.fecha_alta}</td>
                            <td>${task.fecha_baja}</td>
                            <td>${task.estado}</td>
                    
                            
                        </tr>
                      
                    `;
              });
              $("#resultBusqueda").show();
              $("#tablaBuscar").html(template);
            }
          }
        },
      });
    } else {
      template += ` `;
      $("#resultBusqueda").hide();
      $("#tablaBuscar").html(template);
    }
  });

  /**
   * Eliminar los resultados de la búsqueda
   */
  $(document).on("click", "#borrar_search", function () {
    $("#task-result").hide();
  });

  /**
   * Rellena el formulario con las especialidades
   */
  function formEsp() {
    //console.log("profesional");
    $.ajax({
      url: "mostrarServicio.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksS = JSON.parse(response);
        //console.log(tasksP);
        tasksS.forEach((taskS) => {
          $("#esp").append(
            $("<option>", {
              value: taskS.especialidad,
              text: taskS.especialidad,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  /**
   * Muestra el formulario para asignar Servicios
   */
  $(document).on("click", ".task-asignarServicios", function () {
    //Capturamos el codigo
    var element = $(this)[0].parentElement.parentElement;
    //console.log(element);
    var dniP = $(element).attr("taskDni");
    console.log(dniP);
    //Enviamos el dato

    $.post(
      "mostrarActualizarP.php",
      {
        dniP,
      },
      function (response) {
        //Mostramos el formulario
        $("#insertFormProf").hide();
        $("#titInserReg").hide();
        $("#titBorReg").hide();
        $("#titActReg").hide();
        $("#actReg").hide();
        $("#anadirReg").hide();
        $("#borrReg").hide();
        $("#tablaProf").hide();
        $("#contraFormProf").hide();
        $("#asignarSerivicio").show();

        const task = JSON.parse(response);

        //Mostramos los valores en el formulario
        $("#dniProfEsp").val(task.dni).prop("disabled", true);
      }
    );
  });

  /**
   * Añadir resgistro de Especialidad
   */
  $(document).on("click", "#anadirEsp", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      dniProfEsp: $("#dniProfEsp").val(),
      esp: $("#esp").val(),
      sHab: $("#sHab").val(),
    };
    console.log(postData);
    //Enviamos los datos
    $.post("anadirEspecialidad.php", postData, function (response) {
      console.log(response);

      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>La especialidad ya esta asginada al profesional</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>La especialdad se ha asignado al profesional correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);

        $("#verProfO").hide();
        $("#verProf").show();
        $("#task-formAsigSer").trigger("reset");
        $("#asignarSerivicio").hide();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Mostrar las especialidades
   */
  $(document).on("click", "#modTipoEsp", function (e) {
    e.preventDefault();
    $("#insertFormProf").hide();
    $("#contraFormProf").hide();
    $("#asignarSerivicio").hide();
    $("#tablaProf").hide();
    $("#tablaTipoEspecialidad").show();

    //Enviamos la petición por ajax
    $.ajax({
      url: "mostrarEspecialidad.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        console.log(response);
        var tasks = JSON.parse(response);

        //Mostramos los productos
        var template = "";
        tasks.forEach((task) => {
          template += `
                <tr taskEsp="${task.especialidad}">
                    <td>${task.especialidad}</td>
                    <td>
                    <button class= "task-deleteTipoEsp btn btn-danger btn-block"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                    </svg>
                    Eliminar
                    </button>
                    </td>
                     <td>

                    </td>
                   
                </tr>
              
            `;
        });

        $("#tablaTipoEsp").html(template);
      },
    });
  });

  /**
   * Muestra el formulario para añadir una especilidad
   *
   */

  $(document).on("click", "#formAnadirTipoEsp", function (e) {
    e.preventDefault();
    $("#tablaTipoEspecialidad").hide();
    $("#formAnadirEsp").show();
  });

  /**
   * Añadir tipo de Especialidad
   */
  $(document).on("click", "#insertTipoEsp", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      tipoEsp: $("#tipoEsp").val(),
    };
    console.log(postData);
    //Enviamos los datos
    $.post("anadirTipoEspecialidad.php", postData, function (response) {
      console.log(response);

      if (response == true) {
        $("#task-formTipoEsp").trigger("reset");
        //Ocultamos el formulario
        $("#formAnadirEsp").hide();

        location.reload();
      }
    });
  });

  /**
   * Añadir tipo de Especialidad
   */
  $(document).on("click", ".task-volver", function (e) {
    console.log("volver");
    //Evitamos que envie los datos de forma predeterminada
    e.preventDefault();
    $("#tablaTipoEspecialidad").hide();

    $(".task-asignarServicios").click();
  });

  /**
   * Eliminar un tipo de especialidad
   *
   */
  $(document).on("click", ".task-deleteTipoEsp", function (e) {
    e.preventDefault();
    var element = $(this)[0].parentElement.parentElement;

    if (confirm("¿Quiere eliminar esta especialidad?")) {
      //Guardamos los datos
      const postData = {
        id: $(element).attr("taskEsp"),
      };
      console.log(postData);

      $.post("borrarEspecialidad.php", postData, function (response) {
        //Ocultamos el formulario
        $("#tablaTipoEspecialidad").hide();
        //Mostramos la tabla especialidad
        $("#modTipoEsp").click();
      });
    }
  });

  //Se recarga la página
  $(document).on("click", "#cancelarT", function (e) {
    e.preventDefault();
    location.reload();
  });

  /**
   *Mostramos el formulario para insertar un usuario nuevo
   */

  $(document).on("click", "#insertFUsu", function insertUsuario(e) {
    e.preventDefault();

    $("#task-formUsu").trigger("reset");
    $("#dniUsu").removeAttr("disabled");
    $("#nombreUsu").removeAttr("disabled");
    $("#apellidoUsu").removeAttr("disabled");
    $("#fechaNacUsu").removeAttr("disabled");
    $("#responsableUsu").removeAttr("disabled");
    $("#calleUsu").removeAttr("disabled");
    $("#numeroUsu").removeAttr("disabled");
    $("#pisoUsu").removeAttr("disabled");
    $("#letraUsu").removeAttr("disabled");
    $("#cpUsu").removeAttr("disabled");
    $("#provinciaUsu").removeAttr("disabled");
    $("#telefonoUsu").removeAttr("disabled");
    $("#correoUsu").removeAttr("disabled");
    $("#usuarioUsu").removeAttr("disabled");
    $("#contraUsu").removeAttr("disabled");
    $("#contraUsuR").removeAttr("disabled");
    $("#fechaAltaUsu").removeAttr("disabled");
    $("#fechaBajaUsu").removeAttr("disabled");
    $("#buscadorUsuario").hide();
    $("#resultBusqueda").hide();
    $("#resultadoV").hide();
    $("#titInserRegUsu").show();
    $("#titActRegUsu").hide();
    $("#titBorRegUsu").hide();
    $("#anadirRegUsu").show();
    $("#actRegUsu").hide();
    $("#borrRegUsu").hide();
    $("#tablaUsu").hide();
    $("#asigProfesional").hide();
    $("#contraFormUsu").hide();
    $("#mostrarUsu").show();
    $("#mostrarUsuO").hide();
    $("#insertFUsu").hide();
    $("#insertFUsuO").show();
    $("#insertFormUsu").slideDown(1000);
  });

  /**
   * Olculta el formmulario de insertar usuario
   *
   */

  $(document).on("click", "#insertFUsuO", function (e) {
    e.preventDefault();
    $("#buscadorUsuario").show();
    $("#titInserRegUsu").show();
    $("#titActRegUsu").hide();
    $("#titBorRegUsu").hide();
    $("#anadirRegUsu").show();
    $("#actRegUsu").hide();
    $("#borrRegUsu").hide();
    $("#tablaUsu").hide();
    $("#asigProfesional").hide();
    $("#insertFormUsu").slideUp(2000);
    $("#insertFUsu").show();
    $("#insertFUsuO").hide();
  });

  /**
   *
   *  Validación de los datos Usuarios en el formulario insertar
   */
  $("#task-formUsu").validate({
    rules: {
      dniUsu: {
        required: true,
        minlength: 9,
      },
      nombreUsu: {
        required: true,
        minlength: 3,
      },
      apellidoUsu: {
        required: true,
        minlength: 3,
      },
      fechaNacUsu: {
        required: true,
      },

      calleUsu: {
        required: true,
      },
      numeroUsu: {
        required: true,
        number: true,
        rangelength: [1, 3],
      },
      pisoUsu: {
        required: false,
        number: true,
      },
      letraUsu: {
        required: false,
      },
      cpUsu: {
        required: true,
        number: true,
        rangelength: [5, 5],
      },
      provinciaUsu: {
        required: true,
        minlength: 3,
      },
      telefonoUsu: {
        required: true,
        number: true,
        rangelength: [9, 11],
      },
      correoUsu: {
        required: true,
        email: true,
      },

      usuarioUsu: {
        required: true,
        minlength: 5,
      },
      contraUsu: {
        required: true,
        minlength: 6,
      },
      contraUsuR: {
        required: true,
      },

      fechaAltaUsu: {
        required: true,
      },
    },
    messages: {
      dniUsu: {
        required: "Debe escrbirir el DNI del usuario",
        minlength: "Escrbia un DNI correcto",
      },
      nombreUsu: {
        required: "Debe escribir el nombre del usuario",
        minlength: "El nombre debe de tener 3 letras cómo mínimo",
      },
      apellidoUsu: {
        required: "Debe escribir el apellidos completo del usuario",
        minlength: "El apellido debe de tener 3 letras cómo mínimo",
      },
      fechaNacUsu: {
        required: "Escriba la fecha del nacimiento del usuario",
      },
      calleUsu: {
        required: "Debe escribir la calle del usuario",
      },
      numeroUsu: {
        required: "Escriba el número de la calle del usuario",
        number: "Sólo se admiten números",
        rangelength: "Mínimo 1 y máximo 3",
      },
      pisoUsu: {
        number: "Sólo se admiten números",
      },
      cpUsu: {
        required: "Escriba el código postal del usuario",
        number: "Sólo se admiten números",
        rangelength: "Sólo 5 dígitos",
      },
      provinciaUsu: {
        required: "Debe escribir la provincia del Usuario",
        minlength: "La provincia debe de tener 3 letras cómo mínimo",
      },
      telefonoUsu: {
        required: "Escriba el número de teléfono del Usario",
        number: "Sólo se admiten números",
        rangelength: "Mínimo 9 y máximo 11",
      },
      correoUsu: {
        required: "Escriba el correo electrónico del usuario",
        email: "Debe ser un correo electrónico válido",
      },
      usuarioUsu: {
        required: "Debe escribir el usuario",
        minlength: "El usuario debe de tener 5 letras cómo mínimo",
      },
      contraUsu: {
        required: "Debe escribir una contraseña",
        minlength: "Debe tener 6 carácteres como mínimo",
      },
      contraUsuR: {
        required: "Vuelva a escribir la contraseña",
      },
      fechaAltaUsu: {
        required: "Escriba la fecha de alta del Usuesional",
      },
    },
  });
  /**
   *  Comprueba que las dos contrasñas son iguales en formulario insertar Usuario
   */
  $("#contraUsuR").keyup(function () {
    var pass1 = $("#contraUsu").val();
    var pass2 = $("#contraUsuR").val();
    if (pass1 == pass2) {
      $("#contraDifUsu").hide();
      $("#contraIguaUsu").show();
    }
    if (pass1 !== pass2) {
      $("#contraDifUsu").show();
      $("#contraIguaUsu").hide();
    }
  });
  /**
   * Añadimos el registro del ususario
   *
   */
  $(document).on("click", "#anadirRegUsu", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      dniUsu: $("#dniUsu").val(),
      nombreUsu: $("#nombreUsu").val(),
      apellidoUsu: $("#apellidoUsu").val(),
      fechaNacUsu: $("#fechaNacUsu").val(),
      responsableUsu: $("#responsableUsu").val(),
      calleUsu: $("#calleUsu").val(),
      numeroUsu: $("#numeroUsu").val(),
      pisoUsu: $("#pisoUsu").val(),
      letraUsu: $("#letraUsu").val(),
      cpUsu: $("#cpUsu").val(),
      provinciaUsu: $("#provinciaUsu").val(),
      telefonoUsu: $("#telefonoUsu").val(),
      correoUsu: $("#correoUsu").val(),
      usuarioUsu: $("#usuarioUsu").val(),
      contraUsu: $("#contraUsu").val(),
      contraUsuR: $("#contraUsuR").val(),
      fechaAltaUsu: $("#fechaAltaUsu").val(),
      fechaBajaUsu: $("#fechaBajaUsu").val(),
      estadoUsu: $("input[type='radio']:checked").val(),
    };

    $.post("anadirUsuario.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha añadido el regsitro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha añadido los datos correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);

        $("#mostrarUsuO").hide();
        $("#mostrarUsu").show();
        $("#insertFUsuO").hide();
        $("#insertFUsu").show();
        $("#task-formUsu").trigger("reset");
        $("#insertFormUsu").hide();
        $("#contraDifUsu").hide();
        $("#contraIguaUsu").hide();
        $("#buscadorUsuario").show();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   *  Muestra a los usuarios
   */
  $(document).on("click", "#mostrarUsu", function mostrarUsuario(e) {
    e.preventDefault();
    $("#buscadorUsuario").hide();
    $("#resultBusqueda").hide();
    $("#resultadoV").hide();
    $("#asigProfesional").hide();
    $("#insertFormUsu").hide();
    $("#contraFormUsu").hide();
    $("#insertFUsuO").hide();
    $("#insertFUsu").show();
    $("#mostrarUsuO").show();
    $("#mostrarUsu").hide();
    $("#tablaUsu").fadeIn(1000);

    //Enviamos la petición por ajax
    $.ajax({
      url: "mostrarUsuario.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        //console.log(response);
        var tasks = JSON.parse(response);

        //Mostramos los datos
        var template = "";
        tasks.forEach((task) => {
          if (task.fecha_baja == "0000-00-00") {
            task.fecha_baja = "-";
          }
          if (task.estado == "alta") {
            template += `

         
            <tr taskDniUsu="${task.dni}" class= "table-success">
                <td>${task.dni}</td>
                <td>${task.nombre}</td>
                <td>${task.apellidos}</td>
                <td>${task.fecha_nacimiento}</td>
                <td>${task.responsable}</td>
                <td>${task.calle}</td>
                <td>${task.numero}</td>
                <td>${task.piso}</td>
                <td>${task.letra}</td>
                <td>${task.cp}</td>
                <td>${task.provincia}</td>
                <td>${task.telefono}</td>
                <td>${task.correo}</td>
                <td>${task.usuario}</td>
                <td>${task.fecha_alta}</td>
                <td>${task.fecha_baja}</td>
                <td>${task.estado}</td>
                <td>
                <button class= "task-deleteUsu btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                </svg>
                Eliminar
                </button>
                </td>
                 <td>
                <button class= "task-itemUsu btn btn-warning"><svg class="bi bi-arrow-counterclockwise" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z" clip-rule="evenodd"/>
                </svg>
                  Actualizar
                </button>
               
                </td>
                <td>
                <button class= "task-cambiarContraUsu btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
<path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 0 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
<path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
</svg>
                  Contraseña
                </button>
               
                </td>
                <td>
                <button class= "task-asignarProfesional btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
              </svg>
                  Asignar Profesional
                </button>
               
                </td>
                
            </tr>
          
        `;
          } else {
            template += `

         
            <tr taskDniUsu="${task.dni}" class="table-danger">
                <td>${task.dni}</td>
                <td>${task.nombre}</td>
                <td>${task.apellidos}</td>
                <td>${task.fecha_nacimiento}</td>
                <td>${task.responsable}</td>
                <td>${task.calle}</td>
                <td>${task.numero}</td>
                <td>${task.piso}</td>
                <td>${task.letra}</td>
                <td>${task.cp}</td>
                <td>${task.provincia}</td>
                <td>${task.telefono}</td>
                <td>${task.correo}</td>
                <td>${task.usuario}</td>
                <td>${task.fecha_alta}</td>
                <td>${task.fecha_baja}</td>
                <td>${task.estado}</td>
                <td>
                <button class= "task-deleteUsu btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                </svg>
                Eliminar
                </button>
                </td>
                 <td>
                <button class= "task-itemUsu btn btn-warning"><svg class="bi bi-arrow-counterclockwise" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z" clip-rule="evenodd"/>
                </svg>
                  Actualizar
                </button>
               
                </td>
                <td>
                <button class= "task-cambiarContraUsu btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
<path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 0 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
<path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
</svg>
                  Contraseña
                </button>
               
                </td>
                <td>
                <button class= "task-asignarProfesional btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
              </svg>
                  Asignar Profesional
                </button>
               
                </td>
                
            </tr>
          
        `;
          }
        });

        $("#tablaRegUsu").html(template);
      },
    });
  });
  /**
   * Ocultamos los datos del usuario
   *
   */
  $(document).on("click", "#mostrarUsuO", function (e) {
    e.preventDefault();
    $("#buscadorUsuario").show();

    $("#titInserRegUsu").hide();
    $("#titActRegUsu").hide();
    $("#titBorRegUsu").hide();
    $("#anadirRegUsu").hide();
    $("#actRegUsu").hide();
    $("#borrRegUsu").hide();
    $("#asigProfesional").hide();
    $("#contraFormUsu").hide();
    $("#insertFormUsu").hide();
    $("#insertFUsu").show();
    $("#insertFUsuO").hide();
    $("#mostrarUsuO").hide();
    $("#mostrarUsu").show();
    $("#tablaUsu").fadeOut(1000);
  });

  /**
   *  Captura el dni del usuario
   */

  $(document).on("click", ".task-itemUsu ", function () {
    //Capturamos el codigo
    var element = $(this)[0].parentElement.parentElement;

    var dniU = $(element).attr("taskDniUsu");

    $.post(
      "mostrarActualizarU.php",
      {
        dniU,
      },
      function (response) {
        $("#insertFormUsu").show();
        $("#titInserRegUsu").hide();
        $("#titBorRegUsu").hide();
        $("#titActRegUsu").show();
        $("#actRegUsu").show();
        $("#anadirRegUsu").hide();
        $("#borrRegUsu").hide();
        $("#asigProfesional").hide();
        $("#tablaUsu").hide();

        const task = JSON.parse(response);

        //Mostramos los valores en el formulario
        $("#dniUsu").val(task.dni).prop("disabled", true);
        $("#nombreUsu").val(task.nombre).prop("disabled", false);
        $("#apellidoUsu").val(task.apellidos).prop("disabled", false);
        $("#fechaNacUsu").val(task.fecha_nacimiento).prop("disabled", false);
        $("#responsableUsu").val(task.responsable).prop("disabled", false);
        $("#calleUsu").val(task.calle).prop("disabled", false);
        $("#numeroUsu").val(task.numero).prop("disabled", false);
        $("#pisoUsu").val(task.piso).prop("disabled", false);
        $("#letraUsu").val(task.letra).prop("disabled", false);
        $("#cpUsu").val(task.cp).prop("disabled", false);
        $("#provinciaUsu").val(task.provincia).prop("disabled", false);
        $("#telefonoUsu").val(task.telefono).prop("disabled", false);
        $("#correoUsu").val(task.correo).prop("disabled", false);
        $("#usuarioUsu").val(task.usuario).prop("disabled", false);
        $("#contraUsu").hide().prop("disabled", false);
        $("#contraUsuR").hide().prop("disabled", false);
        $("#fechaAltaUsu").val(task.fecha_alta).prop("disabled", false);
        $("#fechaBajaUsu").val(task.fecha_baja).prop("disabled", false);
        if (task.estado == "baja") {
          $("#estadoUsuBaja").prop("checked", true);
        }
        if (task.estado == "alta") {
          $("estadoUsuAlta").prop("checked", true);
        }
      }
    );
  });

  /*
   * Actualiza el registro de un usuario
   */
  $(document).on("click", "#actRegUsu", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos
    const postData = {
      dniUsu: $("#dniUsu").val(),
      nombreUsu: $("#nombreUsu").val(),
      apellidoUsu: $("#apellidoUsu").val(),
      fechaNacUsu: $("#fechaNacUsu").val(),
      responsableUsu: $("#responsableUsu").val(),
      calleUsu: $("#calleUsu").val(),
      numeroUsu: $("#numeroUsu").val(),
      pisoUsu: $("#pisoUsu").val(),
      letraUsu: $("#letraUsu").val(),
      cpUsu: $("#cpUsu").val(),
      provinciaUsu: $("#provinciaUsu").val(),
      telefonoUsu: $("#telefonoUsu").val(),
      correoUsu: $("#correoUsu").val(),
      usuarioUsu: $("#usuarioUsu").val(),
      fechaAltaUsu: $("#fechaAltaUsu").val(),
      fechaBajaUsu: $("#fechaBajaUsu").val(),
      estadoUsu: $("input[type='radio']:checked").val(),
    };

    //Se envia los datos
    $.post("actualizarUsuario.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>No se ha modificado los datos</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se han actualizado los datos correctamente</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> `;
        $("#errores").html(template);

        $("#task-formUsu").trigger("reset");

        $("#insertFormUsu").hide();
        $("#contraDifUsu").hide();
        $("#contraIguaUsu").hide();
        $("#mostrarUsu").show();
        $("#mostrarUsuO").hide();
        $("#buscadorUsuario").show();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Mostrar el formulario para borrar registros del usuario
   */
  $(document).on("click", ".task-deleteUsu", function () {
    //Capturamos el codigo
    var element = $(this)[0].parentElement.parentElement;
    //console.log(element);
    var dniU = $(element).attr("taskDniUsu");
    console.log(dniU);
    //Enviamos el dato

    $.post(
      "mostrarBorrarU.php",
      {
        dniU,
      },
      function (response) {
        //Mostramos el formulario
        $("#insertFormUsu").show();
        $("#titInserRegUsu").hide();
        $("#titBorRegUsu").show();
        $("#titActRegUsu").hide();
        $("#actRegUsu").hide();
        $("#anadirRegUsu").hide();
        $("#asigProfesional").hide();
        $("#borrRegUsu").show();

        $("#tablaUsu").hide();

        const task = JSON.parse(response);

        //Mostramos los valores en el formulario
        $("#dniUsu").val(task.dni).prop("disabled", true);
        $("#nombreUsu").val(task.nombre).prop("disabled", true);
        $("#apellidoUsu").val(task.apellidos).prop("disabled", true);
        $("#fechaNacUsu").val(task.fecha_nacimiento).prop("disabled", true);
        $("#responsableUsu").val(task.responsable).prop("disabled", true);
        $("#calleUsu").val(task.calle).prop("disabled", true);
        $("#numeroUsu").val(task.numero).prop("disabled", true);
        $("#pisoUsu").val(task.piso).prop("disabled", true);
        $("#letraUsu").val(task.letra).prop("disabled", true);
        $("#cpUsu").val(task.cp).prop("disabled", true);
        $("#provinciaUsu").val(task.provincia).prop("disabled", true);
        $("#telefonoUsu").val(task.telefono).prop("disabled", true);
        $("#correoUsu").val(task.correo).prop("disabled", true);
        $("#usuarioUsu").val(task.usuario).prop("disabled", true);
        $("#contraUsu").hide().prop("disabled", true);
        $("#contraUsuR").hide().prop("disabled", true);
        $("#fechaAltaUsu").val(task.fecha_alta).prop("disabled", true);
        $("#fechaBajaUsu").val(task.fecha_baja).prop("disabled", true);
        if (task.estado == "baja") {
          $("#estadoUsuBaja").prop("checked", true);
        }
        if (task.estado == "alta") {
          $("estadoUsuAlta").prop("checked", true);
        }
      }
    );
  });

  /**
   *
   *  Borrar el registro de un usuario
   */
  $(document).on("click", "#borrRegUsu", function (e) {
    //Evitamos que envie los datos de forma predeterminada
    e.preventDefault();

    const postData = {
      dniU: $("#dniUsu").val(),
    };

    $.post("borrarUsuario.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido eliminar ningún registro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado el regsitro correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#insertFormUsu").hide();
        $("#task-formUsu").trigger("reset");
        $("#mostrarUsu").show();
        $("#mostrarUsuO").hide();
        $("#buscadorUsuario").show();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   *Muestra la contraseña de un usuario en el formulario
   */
  $(document).on("click", ".task-cambiarContraUsu", function () {
    //Capturamos el codigo
    var element = $(this)[0].parentElement.parentElement;

    var dniU = $(element).attr("taskDniUsu");

    $.post(
      "mostrarActualizarU.php",
      {
        dniU,
      },
      function (response) {
        //Mostramos el formulario
        $("#insertFormUsu").hide();
        $("#titInserRegUsu").hide();
        $("#titBorRegUsu").hide();
        $("#titActRegUsu").hide();
        $("#actRegUsu").hide();
        $("#anadirRegUsu").hide();
        $("#borrRegUsu").hide();
        $("#tablaUsu").hide();
        $("#asigProfesional").hide();
        $("#contraFormUsu").show();

        const task = JSON.parse(response);

        //Mostramos los valores en el formulario
        $("#dniUsuC").val(task.dni).prop("disabled", true);
      }
    );
  });

  /**
   * Comprueba que las contraseña son iguales antes de enviar los datos
   */
  $("#contraUsuCR").keyup(function () {
    var pass1C = $("#contraUsuC").val();
    var pass2C = $("#contraUsuCR").val();
    if (pass1C == pass2C) {
      $("#contraDifC").hide();
      $("#contraIguaC").show();
    }

    if (pass1C !== pass2C) {
      $("#contraDifC").show();
      $("#contraIguaC").hide();
    }
  });

  /**
   * Cambiar contraseña del usuario
   */
  $(document).on("click", "#cambiarContraUsu", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      dniUsuC: $("#dniUsuC").val(),
      contraUsuC: $("#contraUsuC").val(),
      contraUsuCR: $("#contraUsuCR").val(),
    };

    //Enviamos los datos
    $.post("cambiarContraUsu.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>No se ha podido cambiar la contraseña</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Contraseña cambiada correctamente</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> `;
        $("#errores").html(template);
        $("#task-formContraUsu").trigger("reset");
        $("#contraFormUsu").hide();
        $("#mostrarUsu").show();
        $("#mostrarUsuO").hide();
        $("#buscadorUsuario").show();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   *  Rellena los datos de los profesionales en el formulario
   */
  function formProfesionalAP() {
    $.ajax({
      url: "mostrarProfesional.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksP = JSON.parse(response);

        tasksP.forEach((taskP) => {
          $("#sDniProfesionalAP").append(
            $("<option>", {
              value: taskP.dni,
              text: taskP.nombre + " " + taskP.apellido,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  /**
   * Rellena el formulario con las especialidades
   */
  function formHtipoAP() {
    $.ajax({
      url: "mostrarServicio.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksS = JSON.parse(response);
        //console.log(tasksP);
        tasksS.forEach((taskS) => {
          $("#sTipoAP").append(
            $("<option>", {
              value: taskS.especialidad,
              text: taskS.especialidad,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  /**
   * Formulario para asignar familia con profesional
   */
  $(document).on("click", ".task-asignarProfesional", function () {
    //Capturamos el codigo
    var element = $(this)[0].parentElement.parentElement;

    var dniU = $(element).attr("taskDniUsu");
    console.log(dniU);
    //Enviamos el dato

    $.post(
      "mostrarActualizarU.php",
      {
        dniU,
      },
      function (response) {
        //Mostramos el formulario
        $("#insertFormUsu").hide();
        $("#titInserRegUsu").hide();
        $("#titBorRegUsu").hide();
        $("#titActRegUsu").hide();
        $("#actRegUsu").hide();
        $("#anadirRegUsu").hide();
        $("#borrRegUsu").hide();
        $("#tablaUsu").hide();
        $("#contraFormUsu").hide();
        $("#asigProfesional").show();

        const task = JSON.parse(response);

        //Mostramos los valores en el formulario
        $("#dniUsuAP").val(task.dni).prop("disabled", true);
      }
    );
  });

  /**
   * Añade los datos de profesional y usuario
   */
  $(document).on("click", "#asigProf", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      dniUsuAP: $("#dniUsuAP").val(),
      sDniProfesionalAP: $("#sDniProfesionalAP").val(),
      sTipoAP: $("#sTipoAP").val(),
    };

    //Enviamos los datos
    $.post("asignarProfesional.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>No se ha podido asignar el profesional</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Se ha asignado el profesional correctamente</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> `;
        $("#errores").html(template);

        $("#task-asigProf").trigger("reset");
        //Ocultamos el formulario
        $("#asigProfesional").hide();

        $("#mostrarUsu").show();
        $("#mostrarUsuO").hide();
        $("#buscadorUsuario").show();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Rellena los datos de los profesionales en el formulario
   */
  function formHorariosProfesional() {
    $.ajax({
      url: "mostrarProfesional.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksP = JSON.parse(response);

        tasksP.forEach((taskP) => {
          $("#sDniProfesional").append(
            $("<option>", {
              value: taskP.dni,
              text: taskP.nombre + " " + taskP.apellido,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  /**
   *  Rellena los datos de los usuarios en el formulario
   */
  function formHorariosUsuarios() {
    $.ajax({
      url: "mostrarUsuario.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksU = JSON.parse(response);

        tasksU.forEach((taskU) => {
          $("#sDniFamilia").append(
            $("<option>", {
              value: taskU.dni,
              text: taskU.nombre + " " + taskU.apellidos,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  function formHorariotipo() {
    $.ajax({
      url: "mostrarServicio.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksS = JSON.parse(response);
        //console.log(tasksP);
        tasksS.forEach((taskS) => {
          $("#sTipo").append(
            $("<option>", {
              value: taskS.especialidad,
              text: taskS.especialidad,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  /**
   * Mostrar formulario para agregar un nuevo horario
   */
  $(document).on("click", "#insertFHorario", function (e) {
    $("#insertFHorario").hide();
    $("#insertFHorarioO").show();
    $("#verHorario").show();
    $("#verHorarioO").hide();
    $("#tablaHorario").hide();
    $("#insertHorario").slideDown(1000);
  });

  /**
   * Ocultar el formulario de agregar nuevo horario
   */
  $(document).on("click", "#insertFHorarioO", function (e) {
    $("#insertFHorario").show();
    $("#insertFHorarioO").hide();
    $("#verHorario").show();
    $("#verHorarioO").hide();
    $("#tablaHorario").hide();
    $("#insertHorario").slideUp(2000);
  });

  /**
   * Agregar nuevo horario
   *
   */
  $(document).on("click", "#bInsertHorario", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      horaProf: $("#sDniProfesional").val(),
      horaFam: $("#sDniFamilia").val(),
      horaDia: $("#sDia").val(),
      horaH: $("#hora").clockpicker().val(),
      horaTipo: $("#sTipo").val(),
    };

    console.log(postData);
    //Enviamos los datos
    $.post("anadirHorario.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha añadido el regsitro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha añadido los datos correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);

        $("#insertFHorario").show();
        $("#insertFHorarioO").hide();
        $("#task-formHor").trigger("reset");
        $("#insertHorario").hide();
        $("#verHorario").click();
      } else {
        $("#errores").html(response);
      }
    });
  });
  /**
   * Muestra el horario
   */
  $(document).on("click", "#verHorario", function mostrarHorario(e) {
    e.preventDefault();

    $("#verHorario").hide();
    $("#verHorarioO").show();
    $("#insertFHorario").show();
    $("#insertFHorarioO").hide();
    $("#insertHorario").hide();
    $("#tablaHorario").fadeIn(1000);

    //Enviamos la petición por ajax
    $.ajax({
      url: "mostrarHorario.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        //console.log(response);
        var tasks = JSON.parse(response);

        //Mostramos los productos
        var template = "";
        tasks.forEach((task) => {
          task.hora = task.hora.substring(0, task.hora.length - 3);

          template += `
              <tr taskId="${task.idH}">
                  <td>${task.idH}</td>
                  <td>${task.nombreF}</td>
                  <td>${task.apellidosF}</td>
                  <td>${task.nombreP}</td>
                  <td>${task.apellidoP}</td>
                  <td>${task.dia}</td>
                  <td>${task.hora}</td>
                  <td>${task.tipo}</td>

                  <td>
                  <button class= "task-deleteHor btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                  </svg>
                  Eliminar
                  </button>
                  </td>
                   
                  <td>

                 
                  </td>
                  
              </tr>
            
          `;
        });

        //Indicamos en index donde se muestran
        $("#tablaHor").html(template);
      },
    });
  });

  /**
   * Ocultar tabla que muestra los horarios
   */
  $(document).on("click", "#verHorarioO", function (e) {
    e.preventDefault();

    $("#insertFHorario").show();
    $("#insertFHorarioO").hide();
    $("#verHorario").show();
    $("#verHorarioO").hide();
    $("#tablaHorario").fadeOut(1000);
  });

  /**
   * Eliminar un registro del horario
   *
   */
  $(document).on("click", ".task-deleteHor", function (e) {
    e.preventDefault();
    var element = $(this)[0].parentElement.parentElement;

    const postData = {
      id: $(element).attr("taskId"),
    };

    $.post("borrarHorario.php", postData, function (response) {
      $("#tablaHorario").hide();

      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido eliminar ningún registro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado el regsitro correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#tablaHorario").hide();
        $("#verHorario").click();
        $("#insertFHorario").show();
        $("#insertFHorarioO").hide();
        $("#verHorario").show();
        $("#verHorarioO").hide();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Mostrar formulario para insertar un material
   *
   */
  $(document).on("click", "#bInsertarMaterial", function () {
    $("#bInsertarMaterial").hide();
    $("#bInsertarMaterialO").show();
    $("#verMaterial").show();
    $("#verMaterialO").hide();
    $("#insertMaterial").slideDown(1000);
    $("#tablaMaterial").hide();
  });

  /**
   * Ocultar formulario para insertar un material
   *
   */
  $(document).on("click", "#bInsertarMaterialO", function (e) {
    e.preventDefault();
    $("#bInsertarMaterial").show();
    $("#bInsertarMaterialO").hide();
    $("#verMaterial").show();
    $("#verMaterialO").hide();
    $("#insertMaterial").slideUp(2000);
    $("#tablaMaterial").hide();
  });
  /**
   * Valida la entrada de datos en el formulario
   *
   */
  $("#task-formMaterial").validate({
    rules: {
      nombreMat: {
        required: true,
        minlength: 3,
      },
      descripcionMat: {
        required: true,
        minlength: 3,
      },

      fechaMat: {
        required: true,
      },
    },
    messages: {
      nombreMat: {
        required: "Debe escribir el nombre del material",
        minlength: "Mínimo tres carácteres",
      },
      descripcionMat: {
        required: "Debe escribir una descripción del material",
        minlength: "Mínimo tres carácteres",
      },

      fechaMat: {
        required: "Debe escribir la fecha de compra",
      },
    },
  });

  /**
   * Insertar una material
   *
   */

  $(document).on("click", "#anadirRegMat", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      nombreMat: $("#nombreMat").val(),
      descripcionMat: $("#descripcionMat").val(),
      fechaMat: $("#fechaMat").val(),
    };

    console.log(postData);
    //Enviamos los datos
    $.post("anadirMaterial.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha añadido el regsitro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha añadido los datos correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#task-formMaterial").trigger("reset");
        $("#insertMaterial").hide();

        $("#bInsertarMaterialO").hide();
        $("#bInsertarMaterial").show();
        $("#verMaterial").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Mostrar los materiales
   *
   */
  $(document).on("click", "#verMaterial", function (e) {
    e.preventDefault();
    $("#verMaterialO").show();
    $("#verMaterial").hide();
    $("#bInsertarMaterialO").hide();
    $("#bInsertarMaterial").show();
    $("#insertMaterial").hide();
    $("#tablaMaterial").fadeIn(1000);
    $.ajax({
      url: "mostrarMaterial.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        //console.log(response);
        var tasks = JSON.parse(response);

        //Mostramos los datos
        var template = "";
        tasks.forEach((task) => {
          template += `
            <tr taskIdMat="${task.id_material}">
                <td>${task.id_material}</td>
                <td>${task.nombre}</td>
                <td>${task.descripcion}</td>
                <td>${task.fecha}</td>
                <td>
                <button class= "task-deleteMat btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                </svg>
                Eliminar
                </button>
                </td>


                
            </tr>
          
        `;
        });
        //Indicamos en index donde se muestran
        $("#tablaMat").html(template);
      },
    });
  });

  /**
   * Ocultar formulario para insertar un material
   *
   */
  $(document).on("click", "#verMaterialO", function (e) {
    e.preventDefault();
    $("#verMaterialO").hide();
    $("#verMaterial").show();
    $("#bInsertarMaterialO").hide();
    $("#bInsertarMaterial").show();
    $("#insertMaterial").hide();
    $("#tablaMaterial").fadeOut(1000);
  });

  /**
   * Borrar un registro de materiales
   */

  $(document).on("click", ".task-deleteMat", function (e) {
    e.preventDefault();
    var element = $(this)[0].parentElement.parentElement;
    var idM = $(element).attr("taskIdMat");

    //Guardamos los datos
    const postData = {
      idMat: $(element).attr("taskIdMat"),
    };
    //console.log(postData);

    $.post("borrarMaterial.php", postData, function (response) {
      //Informamos

      $("#tablaMaterial").hide();

      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido eliminar ningún registro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado el regsitro correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#tablaMaterial").hide();

        $("#bInsertarMaterial").show();
        $("#bInsertarMaterialO").hide();

        $("#verMaterial").click();
        $("#verMaterialO").show();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Insertar formulario de pagos
   */

  $(document).on("click", "#insertPagos", function (e) {
    e.preventDefault();

    $("#tablaPagos").hide();
    $("#insertPagos").hide();
    $("#insertPagosO").show();
    $("#verPagosO").hide();
    $("#verPagos").show();
    $("#insertFormPag").slideDown(1000);
  });

  /**
   * Ocultar formulario de pagos
   */

  $(document).on("click", "#insertPagosO", function (e) {
    e.preventDefault();

    $("#tablaPagos").hide();
    $("#insertPagos").show();
    $("#insertPagosO").hide();
    $("#verPagosO").hide();
    $("#verPagos").show();
    $("#insertFormPag").slideUp(2000);
  });

  /**
   *  Rellena los datos de los usuarios en el formulario select option
   */
  function formPagoUsuarios() {
    $.ajax({
      url: "mostrarUsuario.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksU = JSON.parse(response);

        tasksU.forEach((taskU) => {
          $("#sDniFamiliaPag").append(
            $("<option>", {
              value: taskU.dni,
              text: taskU.nombre + " " + taskU.apellidos,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  /**
   * Rellena los opciones de concepto de pago en select option
   */

  function formPagotipo() {
    //console.log("profesional");
    $.ajax({
      url: "mostrarServicio.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksS = JSON.parse(response);
        //console.log(tasksP);
        tasksS.forEach((taskS) => {
          $("#sTipoPag").append(
            $("<option>", {
              value: taskS.especialidad,
              text: taskS.especialidad,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  /**
   * Validamos la entrada de datos
   */
  $("#task-formPag").validate({
    rules: {
      cantidadPag: {
        required: true,
        number: true,
      },
      numeroPago: {
        required: true,
        number: true,
      },

      fechaPag: {
        required: true,
      },
    },
    messages: {
      cantidadPag: {
        required: "Escriba una cantidad",
        number: "Debe ser un número",
      },
      numeroPago: {
        required: "Escriba en número de sesiones",
        number: "Debe ser un número",
      },

      fechaPag: {
        required: "Escrba la fecha del pago",
      },
    },
  });

  /**
   * Agregar un nuevo Pago
   */
  $(document).on("click", "#anadirRegPag", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      pagoFamilia: $("#sDniFamiliaPag").val(),
      pagoTipo: $("#sTipoPag").val(),
      pagoCantidad: $("#cantidadPag").val(),
      pagoNum: $("#numeroPag").val(),
      pagoMet: $("#sMetPag").val(),
      pagoFecha: $("#fechaPag").val(),
    };

    console.log(postData);
    //Enviamos los datos
    $.post("anadirPago.php", postData, function (response) {
      console.log(response);

      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha añadido el regsitro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha añadido los datos correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;

        $("#errores").html(template);
        $("#task-formPag").trigger("reset");
        $("#insertFormPag").hide();
        $("#insertPagos").show();
        $("#insertPagosO").hide();
        $("#verPagosO").hide();
        $("#verPagos").show();
        $("#verPagos").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Muestra los pagos
   */
  $(document).on("click", "#verPagos", function mostrarPagos(e) {
    e.preventDefault();
    $("#insertFormPag").hide();
    $("#insertPagos").show();
    $("#insertPagosO").hide();
    $("#verPagosO").show();
    $("#verPagos").hide();
    $("#tablaPagos").fadeIn(1000);

    //Enviamos la petición por ajax
    $.ajax({
      url: "mostrarPagos.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        console.log(response);
        var tasks = JSON.parse(response);

        //Mostramos los productos
        var template = "";
        tasks.forEach((task) => {
          template += `
              <tr taskIdP="${task.idP}">
                  <td>${task.idP}</td>
                  <td>${task.nombreF}</td>
                  <td>${task.apellidosF}</td>
                  <td>${task.concepto}</td>
                  <td>${task.cantidad}</td>
                  <td>${task.numero}</td>
                  <td>${task.metodo}</td>
                  <td>${task.fecha}</td>

                  <td>
                  <button class= "task-deletePag btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                  </svg>
                  Eliminar
                  </button>
                  </td>
                   
                  <td>

                 
                  </td>
                  
              </tr>
            
          `;
        });

        $("#tablaPag").html(template);
      },
    });
  });

  /**
   * Ocultar tabla de pagos
   *
   */

  $(document).on("click", "#verPagosO", function (e) {
    e.preventDefault();

    $("#insertPagos").show();
    $("#insertPagosO").hide();
    $("#verPagosO").hide();
    $("#verPagos").show();
    $("#insertFormPag").hide();
    $("#tablaPagos").fadeOut(1000);
  });

  /**
   * Eliminar un registro de Pago
   */
  $(document).on("click", ".task-deletePag", function (e) {
    e.preventDefault();
    var element = $(this)[0].parentElement.parentElement;
    var idPag = $(element).attr("taskIdP");

    //Guardamos los datos
    const postData = {
      id: $(element).attr("taskIdP"),
    };

    $.post("borrarPago.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido eliminar ningún registro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado el regsitro correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#tablaPagos").hide();
        $("#insertPagos").show();
        $("#insertPagosO").hide();
        $("#verPagos").click();
        $("#verPagosO").show();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Búsqueda de sesiones en la base de datos
   */
  $("#searchSesiones").keyup(function () {
    let template = "";

    //Si existe un valor
    if ($("#searchSesiones").val()) {
      //Lo almacenamos
      var searchS = $("#searchSesiones").val();
      console.log(searchS);
      //Realizamos la petición por ajax
      $.ajax({
        url: "buscarSesiones.php",
        data: { searchS },
        type: "POST",
        success: function (response) {
          if (response.length == 2) {
            $("#resultadoS").show();

            template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>No se ha encontrado ningún resultado. </strong> Pruebe con otro nombre. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> `;
            $("#resultadoS").html(template);
            window.setTimeout(function () {
              $("#resultadoS")
                .fadeTo(500, 0)
                .slideUp(500, function () {
                  $(this).remove();
                });
            }, 2000);
          } else {
            if (!response.error) {
              console.log("resultado");
              let tasks = JSON.parse(response);
              //Mostramos el resultado
              $("#resultBusquedaSesiones").show();
              tasks.forEach((task) => {
                task.hora = task.hora.substring(0, task.hora.length - 3);

                template += `
                            <tr taskDni="${task.idS}">
                            <td>${task.idS}</td>
                            <td>${task.nombreP}</td>
                            <td>${task.apellidoP}</td>
                            <td>${task.nombreF}</td>
                            <td>${task.apellidosF}</td>
                            <td>${task.fecha}</td>
                            <td>${task.hora}</td>
  
                    
                            
                        </tr>
                      
                    `;
              });
              $("#resultBusquedaSesiones").show();
              $("#tablaBuscarSesiones").html(template);
            }
          }
        },
      });
    } else {
      template += ` `;
      $("#resultBusquedaSesiones").hide();
      $("#tablaBuscarSesiones").html(template);
    }
  });

  $(document).on(
    "click",
    "#bverHorProf",
    function mostrarHorarioProfesional(e) {
      e.preventDefault();

      const postData = {
        usuarioP: $("#sesionUsuP").val(),
      };
      console.log(postData);

      $.post("mostrarHorarioProfesional.php", postData, function (response) {
        $("#bverHorProf").hide();
        $("#bverHorProfO").show();
        $("#tHorProf").slideDown(1000);
        $("#tablaProfHorario").slideDown(1000);
        var tasks = JSON.parse(response);
        console.log(tasks);
        //Mostramos los datos
        var template = "";
        tasks.forEach((task) => {
          task.hora = task.hora.substring(0, task.hora.length - 3);
          template += `
        <tr>
            
            <td>${task.famN}</td>
            <td>${task.famA}</td>
            <td>${task.dia}</td>
            <td>${task.hora}</td>
            <td>${task.tipo}</td>
            
        </tr>
      
    `;
        });
        $("#tablaPH").html(template);
      });
    }
  );
  /**
   * Ocultar formulario
   */
  $(document).on("click", "#bverHorProfO", function (e) {
    e.preventDefault();
    $("#bverHorProfO").hide();
    $("#bverHorProf").show();
    $("#tHorProf").hide();
    $("#tablaProfHorario").fadeOut(1000);
  });

  /**
   * Muestra el fomulario para añadir sesiones
   */

  $(document).on("click", "#insertarUSesiones", function (e) {
    e.preventDefault();

    $("#buscadorSesiones").hide();
    $("#tablaSesionesU").hide();
    $("#insertarUSesiones").hide();
    $("#insertarUSesionesO").show();
    $("#mostrarUSesionesO").hide();
    $("#mostrarUSesiones").show();
    $("#insertUSesiones").slideDown(1000);

    const postData = {
      sesionUsuPD: $("#sesionUsuPD").val(),
    };

    $.post("mostrarDniProfesional.php", postData, function (response) {
      var tasksP = JSON.parse(response);

      tasksP.forEach((taskP) => {
        $("#sdniProfSUs").val(taskP.dniP).prop("disabled", true);
        $("#sNomApeProfSUs")
          .val(taskP.nombreP + " " + taskP.apellidoP)
          .prop("disabled", true);
      });
    });
  });

  /**
   * Ocultar registro de sesión
   */

  $(document).on("click", "#insertarUSesionesO", function (e) {
    e.preventDefault();

    $("#buscadorSesiones").show();
    $("#tablaSesionesU").hide();
    $("#insertarUSesionesO").hide();
    $("#insertarUSesiones").show();
    $("#mostrarUSesionesO").hide();
    $("#mostrarUSesiones").show();
    $("#insertUSesiones").slideUp(2000);
  });

  /**
   *  Rellena los datos de los usuarios en el formulario de sesiones
   */
  function formSesionesUsuariosGestion() {
    $.ajax({
      url: "mostrarUsuario.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksU = JSON.parse(response);
        tasksU.forEach((taskU) => {
          $("#sdniFamSUs").append(
            $("<option>", {
              value: taskU.dni,
              text: taskU.nombre + " " + taskU.apellidos,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }

  $(document).on("click", "#bInsertUSesiones", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      sesionUsuProf: $("#sdniProfSUs").val(),
      sesionDniFam: $("#sdniFamSUs").val(),
      sesionFec: $("#fechaUSesiones").val(),
      sesionHora: $("#horaSesiones").clockpicker().val(),
    };
    //Enviamos los datos
    $.post("anadirSesion.php", postData, function (response) {
      console.log(response);
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha añadido el regsitro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha añadido los datos correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;

        $("#errores").html(template);
        $("#task-formUSesiones").trigger("reset");
        $("#insertUSesiones").hide();
        $("#mostrarUSesiones").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Mostrar las sesiones de un ususario
   *
   */
  $(document).on("click", "#mostrarUSesiones", function (e) {
    e.preventDefault();

    $("#buscadorSesiones").hide();
    $("#insertarUSesiones").show();
    $("#insertarUSesionesO").hide();
    $("#mostrarUSesionesO").show();
    $("#mostrarUSesiones").hide();
    $("#insertUSesiones").hide();
    $("#tablaSesionesU").fadeIn(1000);

    const postData = {
      sesionUsuPD: $("#sesionUsuPD").val(),
    };

    $.post("mostrarSesiones.php", postData, function (response) {
      var tasks = JSON.parse(response);

      //Mostramos los productos
      var template = "";
      tasks.forEach((task) => {
        task.hora = task.hora.substring(0, task.hora.length - 3);
        template += `
                  <tr taskIdSes="${task.idR}">
                      <td>${task.idR}</td>
                      <td>${task.nombreF}</td>
                      <td>${task.apellidosF}</td>
                      <td>${task.fecha}</td>
                      <td>${task.hora}</td>
                      <td>
                      <button class= "task-deleteSes btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                      </svg>
                      Eliminar
                      </button>
                      </td>
      
      
                      
                  </tr>
                
              `;
      });

      $("#tablaSU").html(template);
    });
  });

  /**
   * Ocultar tabla de sesiones registradas
   */
  $(document).on("click", "#mostrarUSesionesO", function (e) {
    e.preventDefault();

    $("#buscadorSesiones").show();
    $("#insertarUSesionesO").hide();
    $("#insertarUSesiones").show();
    $("#mostrarUSesionesO").hide();
    $("#mostrarUSesiones").show();
    $("#insertUSesiones").hide();
    $("#tablaSesionesU").fadeOut(1000);
  });

  /**
   * Eliminar un registro de una sesión
   */
  $(document).on("click", ".task-deleteSes", function (e) {
    e.preventDefault();
    var element = $(this)[0].parentElement.parentElement;
    var idSes = $(element).attr("taskIdSes");

    //Guardamos los datos
    const postData = {
      id: $(element).attr("taskIdSes"),
    };
    //console.log(postData);

    $.post("borrarSesion.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido eliminar ningún registro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado el regsitro correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;

        $("#errores").html(template);
        $("#tablaSesionesU").hide();
        $("#mostrarUSesiones").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   *
   * Muestra el formulario para insertar observaciones
   */

  $(document).on("click", "#insertarObservaciones", function () {
    $("#insertarObservaciones").hide();
    $("#insertarObservacionesO").show();
    $("#mostrarObservacionesO").hide();
    $("#mostrarObservaciones").show();
    $("#tablaObservaciones").hide();
    $("#insertObservaciones").slideDown(1000);
    const postData = {
      sesionUsuPD: $("#observacionUsuPD").val(),
    };

    $.post("mostrarDniProfesional.php", postData, function (response) {
      var tasksP = JSON.parse(response);

      tasksP.forEach((taskP) => {
        $("#sdniProfObs").val(taskP.dniP).prop("disabled", true);
        $("#sNomApeProfObs")
          .val(taskP.nombreP + " " + taskP.apellidoP)
          .prop("disabled", true);
      });
    });
  });

  /*
   ** Ocultar el formulario de registro de obsevaciones
   */
  $(document).on("click", "#insertarObservacionesO", function (e) {
    e.preventDefault();
    $("#insertarObservacionesO").hide();
    $("#insertarObservaciones").show();
    $("#mostrarObservacionesO").hide();
    $("#mostrarObservaciones").show();
    $("#tablaObservaciones").hide();
    $("#insertObservaciones").slideUp(2000);
  });

  /**
   *  Rellena los datos de los usuarios en el formulario de sesiones en Observaciones
   */
  function formSesionesUsuarios() {
    //console.log("sesiones");
    $.ajax({
      url: "mostrarUsuario.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasksU = JSON.parse(response);

        tasksU.forEach((taskU) => {
          $("#sdniFamObs").append(
            $("<option>", {
              value: taskU.dni,
              text: taskU.nombre + " " + taskU.apellidos,
            })
          );
        });
      },
      error: function (data) {
        alert("error");
      },
    });
  }
  /**
   * Validamos la entrada de datos
   */
  $("#task-formObservaciones").validate({
    rules: {
      comentarioObs: {
        required: true,
        minlength: 3,
      },
    },
    messages: {
      comentarioObs: {
        required: "Debe Escribir una observación",
        minlength: "El comentario debe de tener más de tres carácteres",
      },
    },
  });
  /**
   * Insertamos los datos
   */
  $(document).on("click", "#bInsertObservacion", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      ObservacionUsuProf: $("#sdniProfObs").val(),
      ObservacionDniFam: $("#sdniFamObs").val(),
      ObservacionFec: $("#fechaObs").val(),
      ObservacionCom: $("#comentarioObs").val(),
    };

    //Enviamos los datos
    $.post("anadirObservacion.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha añadido el regsitro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha añadido los datos correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#task-formObservaciones").trigger("reset");
        $("#insertObservaciones").hide();
        $("#mostrarObservaciones").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Mostrar las observaciones del profesional
   *
   */
  $(document).on("click", "#mostrarObservaciones", function () {
    $("#insertarObservacionesO").hide();
    $("#insertarObservaciones").show();
    $("#mostrarObservaciones").hide();
    $("#mostrarObservacionesO").show();
    $("#insertObservaciones").hide();
    $("#tablaObservaciones").fadeIn(1000);
    const postData = {
      observacionUsuPD: $("#observacionUsuPD").val(),
    };

    $.post("mostrarObservaciones.php", postData, function (response) {
      var tasks = JSON.parse(response);

      var template = "";
      tasks.forEach((task) => {
        template += `
                  <tr taskIdObs="${task.idO}">
                      <td>${task.idO}</td>
                      <td>${task.nombreF}</td>
                      <td>${task.apellidosF}</td>
                      <td>${task.fecha}</td>
                      <td>${task.comentario}</td>
                      <td>
                      <button class= "task-deleteObs btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                      </svg>
                      Eliminar
                      </button>
                      </td>
      
      
                      
                  </tr>
                
              `;
      });

      $("#tablaObs").html(template);
    });
  });
  /**
   * Ocultamos las observaciones
   */
  $(document).on("click", "#mostrarObservacionesO", function (e) {
    e.preventDefault();
    $("#insertarObservacionesO").hide();
    $("#insertarObservaciones").show();
    $("#mostrarObservacionesO").hide();
    $("#mostrarObservaciones").show();
    $("#tablaObservaciones").hide();
    $("#insertObservaciones").slideUp(2000);
  });

  /**
   * Eliminar una observación
   */
  $(document).on("click", ".task-deleteObs", function (e) {
    e.preventDefault();
    var element = $(this)[0].parentElement.parentElement;
    var idObs = $(element).attr("taskIdObs");

    //Guardamos los datos
    const postData = {
      id: $(element).attr("taskIdObs"),
    };

    $.post("borrarObservacion.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido eliminar ningún registro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado el regsitro correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#mostrarObservaciones").click();
      } else {
        $("#errores").html(response);
      }
    });
  });
  /**
   * Muestra el horario del usuario
   */

  $(document).on("click", "#verHorarioUsu", function () {
    $("#modificarMiUsu").hide();
    $("#verObsUsu").hide();
    $("#verHorarioUsu").hide();
    $("#ocultarO").show();
    $("#btnCrearPdf").show();
    $("#tablaObservacionesUsuario").hide();
    $("#modUsuarioUsu").hide();
    $("#tablaHorarioUsuario").fadeIn(1000);
    const postData = {
      usuarioUsu: $("#UsuarioUsu").val(),
    };

    $.post("mostrarHorarioUsu.php", postData, function (response) {
      var tasks = JSON.parse(response);

      var template = "";
      tasks.forEach((task) => {
        task.hora = task.hora.substring(0, task.hora.length - 3);
        template += `
                <tr taskIdHorarioUsu="${task.idH}">
                    <td>${task.idH}</td>
                    <td>${task.nombreP}</td>
                    <td>${task.apellidoP}</td>
                    <td>${task.dia}</td>
                    <td>${task.hora}</td>
                    <td>${task.tipo}</td>
                   
                </tr>
              
            `;
      });

      $("#tablaHUsu").html(template);
    });
  });

  /**
   * Ocultar los elementos
   */

  $(document).on("click", "#ocultarO", function (e) {
    e.preventDefault();
    $("#ocultarO").hide();
    $("#modificarMiUsu").show();
    $("#verObsUsu").show();
    $("#verHorarioUsu").show();
    $("#tablaObservacionesUsuario").hide();
    $("#modUsuarioUsu").hide();
    $("#tablaHorarioUsuario").hide();
    $("#btnCrearPdf").hide();
  });
  /**
   * Muestra las observaciones del usuario
   */
  $(document).on("click", "#verObsUsu", function () {
    $("#modificarMiUsu").hide();
    $("#verObsUsu").hide();
    $("#verHorarioUsu").hide();
    $("#ocultarO").show();
    $("#tablaHorarioUsuario").hide();
    $("#modUsuarioUsu").hide();
    $("#tablaObservacionesUsuario").fadeIn(1000);
    const postData = {
      usuarioUsu: $("#UsuarioUsu").val(),
    };

    $.post("mostrarObservacionesUsu.php", postData, function (response) {
      var tasks = JSON.parse(response);

      var template = "";
      tasks.forEach((task) => {
        template += `
                <tr taskIdObsUsu="${task.idO}">
                    <td>${task.idO}</td>
                    <td>${task.nombreP}</td>
                    <td>${task.apellidoP}</td>
                    <td>${task.fecha}</td>
                    <td>${task.comentario}</td>
                  
                   
                </tr>
              
            `;
      });

      $("#tablaObsUsu").html(template);
    });
  });

  $(document).on("click", "#modificarMiUsu", function () {
    $("#modificarMiUsu").hide();
    $("#verObsUsu").hide();
    $("#verHorarioUsu").hide();
    $("#ocultarO").show();
    $("#tablaHorarioUsuario").hide();
    $("#tablaObservacionesUsuario").hide();
    $("#titActRegUsu").show();
    $("#modUsuarioUsu").slideDown(1000);

    const postData = {
      usuarioUsu: $("#UsuarioUsu").val(),
    };

    $.post("mostrarMiUsuario.php", postData, function (response) {
      const tasks = JSON.parse(response);

      tasks.forEach((task) => {
        $("#dniUsuU").val(task.dni).prop("disabled", true);
        $("#nombreUsuU").val(task.nombre);
        $("#apellidoUsuU").val(task.apellidos);
        $("#fechaNacUsuU").val(task.fecha_nacimiento);
        $("#responsableUsuU").val(task.responsable);
        $("#calleUsuU").val(task.calle);
        $("#numeroUsuU").val(task.numero);
        $("#pisoUsuU").val(task.piso);
        $("#letraUsuU").val(task.letra);
        $("#cpUsuU").val(task.cp);
        $("#provinciaUsuU").val(task.provincia);
        $("#telefonoUsuU").val(task.telefono);
        $("#correoUsuU").val(task.correo);
      });
    });
  });

  $(document).on("click", "#actRegUsuU", function (e) {
    e.preventDefault();

    const postData = {
      dniUsuU: $("#dniUsuU").val(),
      nombreUsuU: $("#nombreUsuU").val(),
      apellidoUsuU: $("#apellidoUsuU").val(),
      fechaNacUsuU: $("#fechaNacUsuU").val(),
      responsableUsuU: $("#responsableUsuU").val(),
      calleUsuU: $("#calleUsuU").val(),
      numeroUsuU: $("#numeroUsuU").val(),
      pisoUsuU: $("#pisoUsuU").val(),
      letraUsuU: $("#letraUsuU").val(),
      cpUsuU: $("#cpUsuU").val(),
      provinciaUsuU: $("#provinciaUsuU").val(),
      telefonoUsuU: $("#telefonoUsuU").val(),
      correoUsuU: $("#correoUsuU").val(),
    };
    console.log(postData);
    //Se envia los datos
    $.post("actualizarUsuarioU.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>No se ha modificado los datos</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se han actualizado los datos correctamente</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> `;
        $("#errores").html(template);
        $("#task-formUsuUsu").trigger("reset");
        $("#ocultarO").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Ver los datos de la emrpesa
   */
  $(document).on("click", "#verDatosE", function mostrarProfesional(e) {
    e.preventDefault();

    $("#verDatosEO").show();
    $("#verDatosE").hide();
    $("#formEmpresa").slideDown(1000);
    $("#aceptarE").show();
    $("#modifE").show();

    //Enviamos la petición por ajax
    $.ajax({
      url: "mostrarDatosEmpresa.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        const task = JSON.parse(response);

        $("#cifE").val(task[0].CIF);
        $("#nombreE").val(task[0].nombre);
        $("#directorE").val(task[0].director).prop("disabled", true);
      },
    });
  });

  /**
   * Ocultar formulario de Datos de la empresa
   */

  $(document).on("click", "#verDatosEO", function (e) {
    e.preventDefault();
    $("#verDatosEO").hide();
    $("#verDatosE").show();
    $("#formEmpresa").slideUp(2000);
    $("#aceptarE").hide();
    $("#modifE").hide();
  });
  /**
   * Ocultamos los datos de la empresa
   */
  $(document).on("click", "#aceptarE", function (e) {
    e.preventDefault();
    $("#verDatosEO").hide();
    $("#verDatosE").show();
    $("#formEmpresa").slideUp(2000);
    $("#aceptarE").hide();
    $("#modifE").hide();
  });

  /**
   * Modificar lso datos de la empresa
   */

  $(document).on("click", "#modifE", function (e) {
    e.preventDefault();

    const postData = {
      cifE: $("#cifE").val(),
      nombreE: $("#nombreE").val(),
      directorE: $("#directorE").val(),
    };
    console.log(postData);
    //Se envia los datos
    $.post("actualizardatosE.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>No se ha modificado los datos</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se han actualizado los datos correctamente</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> `;
        $("#errores").html(template);
        $("#task-formEmpresa").trigger("reset");
        $("#verDatosE").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Muestras los datos de dirección
   */

  $(document).on("click", "#verMisDatos", function (e) {
    e.preventDefault();

    $("#verMisDatos").hide();
    $("#verMisDatosO").show();
    $("#formEmpresaD").slideDown(1000);
    $("#aceptarD").show();
    $("#modifD").show();
    $("#mContraD").show();
    $("#contraFormD").hide();
    $.ajax({
      url: "mostrarDatosDirector.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        const task = JSON.parse(response);

        console.log(task);
        $("#nombreD").val(task[0].nombre).prop("disabled", true);
        $("#apellidoD").val(task[0].apellidos);
        $("#calleD").val(task[0].calle);
        $("#numeroD").val(task[0].numero);
        $("#pisoD").val(task[0].piso);
        $("#letraD").val(task[0].letra);
        $("#cpD").val(task[0].cp);
        $("#provinciaD").val(task[0].Provincia);
        $("#telefonoD").val(task[0].telefono);
        $("#usuarioD").val(task[0].usuario);
      },
    });
  });

  /**
   * Ocultar formulario datos de dirección
   *
   */

  $(document).on("click", "#verMisDatosO", function (e) {
    e.preventDefault();
    $("#verMisDatosO").hide();
    $("#verMisDatos").show();
    $("#formEmpresaD").slideUp(2000);
    $("#aceptarD").hide();
    $("#modifD").hide();
    $("#mContraD").hide();
  });

  /**
   * Oculta los datos de la emmpresa
   */

  $(document).on("click", "#aceptarD", function (e) {
    e.preventDefault();
    $("#verMisDatosO").hide();
    $("#verMisDatos").show();
    $("#formEmpresaD").slideUp(2000);
    $("#aceptarD").hide();
    $("#modifD").hide();
    $("#mContraD").hide();
  });
  /**
   * Modifica los datos de la empresa
   *
   */
  $(document).on("click", "#modifD", function (e) {
    e.preventDefault();

    //Almacenamos los datos
    const postData = {
      nombreD: $("#nombreD").val(),
      apellidoD: $("#apellidoD").val(),
      calleD: $("#calleD").val(),
      numeroD: $("#numeroD").val(),
      pisoD: $("#pisoD").val(),
      letraD: $("#letraD").val(),
      cpD: $("#cpD").val(),
      provinciaD: $("#provinciaD").val(),
      telefonoD: $("#telefonoD").val(),
      usuarioD: $("#usuarioD").val(),
    };

    //Se envia los datos
    $.post("actualizardatosD.php", postData, function (response) {
      //console.log(response);
      $("#errores").html(response);

      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha modificado los datos</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se han actualizado los datos correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#task-formEmpresaD").trigger("reset");
        $("#verMisDatos").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Muestra el formulario para el cambio de la contraseña
   */

  $(document).on("click", "#mContraD", function (e) {
    //Evitamos que envie los datos de forma predeterminada
    //console.log("actualizar");
    $("#formEmpresaD").hide();
    $("#contraFormD").show();
    e.preventDefault();
  });

  /**
   *  Comprueba que las dos contraseñas son iguales en formulario de dirección
   */
  $("#contraDR").keyup(function () {
    var pass1 = $("#contraD").val();
    var pass2 = $("#contraDR").val();
    if (pass1 == pass2) {
      $("#contraDifD").hide();
      $("#contraIguaD").show();
    }
    if (pass1 !== pass2) {
      $("#contraDifD").show();
      $("#contraIguaD").hide();
    }
  });

  /**
   * Cambiar contraseña
   */
  $(document).on("click", "#cambiarContraD", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos en una constante
    const postData = {
      contraD: $("#contraD").val(),
      contraDR: $("#contraD").val(),
    };

    //Enviamos los datos
    $.post("cambiarContraDirector.php", postData, function (response) {
      $("#errores").html(response);

      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha modificado la contraseña</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha actualizado la contraseña correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#task-formContraD").trigger("reset");
        $("#contraFormD").hide();
        $("#verMisDatosO").hide();
        $("#verMisDatos").show();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Muestra el formulario de insertar gastos
   */

  $(document).on("click", "#insertGastos", function (e) {
    $("#insertGastos").hide();
    $("#insertGastosO").show();
    $("#verGastos").show();
    $("#verGastosO").hide();
    $("#tablaGastos").hide();
    $("#insertFormGast").slideDown(1000);

    e.preventDefault();
    $.ajax({
      url: "mostrarDatosEmpresa.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        console.log(response);
        const task = JSON.parse(response);

        console.log(task);
        $("#cifGast").val(task[0].CIF).prop("disabled", true);
      },
    });
  });

  /**
   * Ocultar formulario para insertar gastos
   */

  $(document).on("click", "#insertGastosO", function (e) {
    e.preventDefault();
    $("#insertGastos").show();
    $("#insertGastosO").hide();
    $("#verGastos").show();
    $("#verGastosO").hide();
    $("#tablaGastos").hide();
    $("#insertFormGast").slideUp(1000);
  });
  /**
   * Insertar los gastos
   */
  $(document).on("click", "#anadirRegGast", function (e) {
    //Evitamos que envie los datos de forma predeterminada

    e.preventDefault();

    //Almacenamos los datos
    const postData = {
      conceptoGast: $("#conceptoGast").val(),
      cantidadGast: $("#cantidadGast").val(),
      fechaGast: $("#fechaGast").val(),
      cifGast: $("#cifGast").val(),
    };

    //Se envia los datos
    $.post("anadirGastos.php", postData, function (response) {
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>No se ha añadido el regsitro</strong> 
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Se ha añadido los datos correctamente</strong> 
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div> `;
        $("#errores").html(template);
        $("#task-formGast").trigger("reset");
        $("#insertFormGast").hide();
        $("#insertGastosO").hide();
        $("#insertGastos").show();
        $("#verGastos").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Muestra los pagos
   */
  $(document).on("click", "#verGastos", function mostrarPagos(e) {
    e.preventDefault();
    $("#insertGastos").show();
    $("#insertGastosO").hide();
    $("#verGastos").hide();
    $("#verGastosO").show();
    $("#insertFormGast").hide();
    $("#tablaGastos").fadeIn(1000);

    //Enviamos la petición por ajax
    $.ajax({
      url: "mostrarGastos.php",
      type: "GET",
      //Si es correcto
      success: function (response) {
        var tasks = JSON.parse(response);

        //Mostramos los datos
        var template = "";
        tasks.forEach((task) => {
          template += `
            <tr taskIdG="${task.id_gasto}">
                <td>${task.id_gasto}</td>
                <td>${task.concepto}</td>
                <td>${task.cantidad}</td>
                <td>${task.fecha}</td>


                <td>
                <button class= "task-deleteGast btn btn-danger"><svg class="bi bi-archive-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z" clip-rule="evenodd"/>
                </svg>
                Eliminar
                </button>
                </td>
                 
                <td>

               
                </td>
                
            </tr>
          
        `;
        });

        $("#tablaGast").html(template);
      },
    });
  });

  /**
   * Ocultar tabla de gastos
   */
  $(document).on("click", "#verGastosO", function (e) {
    e.preventDefault();
    $("#insertGastos").show();
    $("#insertGastosO").hide();
    $("#verGastos").show();
    $("#verGastosO").hide();
    $("#insertFormGast").hide();
    $("#tablaGastos").fadeOut(1000);
  });

  /**
   * Eliminar un registro de Gasto
   *
   */
  $(document).on("click", ".task-deleteGast", function (e) {
    e.preventDefault();
    var element = $(this)[0].parentElement.parentElement;
    var idGast = $(element).attr("taskIdG");

    //Guardamos los datos
    const postData = {
      id: $(element).attr("taskIdG"),
    };

    $.post("borrarGasto.php", postData, function (response) {
      $("#tablaGastos").hide();
      let template = "";
      if (response == 0) {
        template += `   <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No se ha podido eliminar ningún registro</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
      } else if (response > 0) {
        template += ` <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Se ha eliminado el regsitro correctamente</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> `;
        $("#errores").html(template);
        $("#tablaGastos").hide();
        $("#insertGastos").show();
        $("#insertGastosO").hide();
        $("#verGastos").click();
      } else {
        $("#errores").html(response);
      }
    });
  });

  /**
   * Posicionamiento del footer
   */

  var contentHeight = jQuery(window).height();
  var footerHeight = jQuery(".footer").height();
  //position().top
  var footerTop = jQuery(".footer").position().top + footerHeight;
  if (footerTop < contentHeight) {
    jQuery(".footer").css(
      "margin-top",
      10 + (contentHeight - footerTop) + "px"
    );
  }

  /**
   * Generar pdf del horario del usuario
   */
  $(document).on("click", "#btnCrearPdf", function (e) {
    const $convertir = document.getElementById("tablaHorarioUsuario");
    html2pdf()
      .set({
        margin: 1,
        filename: "horario.pdf",
        jsPDF: {
          unit: "in",
          format: "a4",
          orientation: "portrait",
        },
      })
      .from($convertir)
      .save()
      .catch((err) => console.log(err))
      .finally()
      .then(() => {
        let template = "";
        template += `   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Horario descargado correctamente</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> `;
        $("#errores").html(template);
      });
  });
});

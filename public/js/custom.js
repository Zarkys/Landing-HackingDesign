//=======INICIO DE DOCUMENT READY==============
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function SaveParticipant() {  
 
    var names = $("#names").val();
    var email = $("#email").val();
    var city = $("#city").val();
    var ocupation = $("#ocupation").val();
    var howknow = $("#howknow").val();
    var overnight = $("#overnight").val();
    var havepc = $("#havepc").val();
    var levelstudies = $("#levelstudies").val();
    var technologies = $("#technologies").val();
    var projectinmind = $("#projectinmind").val();
    var questions = $("#questions").val();

   //Agregamos los datos capturados a un arreglo => arr
    if (names === '') { $.alert({
        title: 'Por favor indica tu nombre',
        boxWidth: '25%',
        useBootstrap:false,   
        type: 'red',
        content:''    
    }); }

    else if (email === '') { $.alert({
        title: 'Por favor indica tu email',
        boxWidth: '25%',
        useBootstrap:false,  
        type: 'red', 
        content:''    
    }); }

    else if (city === '') { $.alert({
        title: 'Por favor indica en que ciudad te encuentras',
        boxWidth: '25%',
        useBootstrap:false,  
        type: 'red', 
        content:''    
    }); }

    else if (ocupation === '') { $.alert({
        title: 'Por favor indica a que te dedicas, (Ocupación o Especialidad)',
        boxWidth: '25%',
        useBootstrap:false,  
        type: 'red', 
        content:''    
    }); }

    else if (howknow === '') { $.alert({
        title: 'Por favor indica indicanos como supiste de este evento',
        boxWidth: '25%',
        useBootstrap:false,  
        type: 'red', 
        content:''    
    }); }

    else if (overnight === '') { $.alert({
        title: 'Indica si piensas quedarte',
        boxWidth: '25%',
        useBootstrap:false,  
        type: 'red', 
        content:'Esta información nos ayudará con la logística del evento'    
    }); }

    else if (havepc === '') { $.alert({
        title: 'Indicanos si tienes PC/Laptop y puedes llevarla',
        boxWidth: '25%',
        useBootstrap:false,  
        type: 'red', 
        content:'Esta información nos ayudará con la logística del evento'    
    }); }

    else if (levelstudies === '') { $.alert({
        title: 'Indica tu nivel de estudios',
        boxWidth: '25%',
        useBootstrap:false,   
        type: 'red',
        content:'No importa si aún eres estudiante'    
    }); }

    else if (technologies === '') { $.alert({
        title: 'Por favor indica que herramientas o tecnologías sabes manejar',
        boxWidth: '25%',
        type: 'red',
        useBootstrap:false,   
        content:''    
    }); }

    else if (projectinmind === '') { $.alert({
        title: 'Tienes algo en mente, indícalo.',
        boxWidth: '25%',
        type: 'red',
        useBootstrap:false,   
        content:'Puedes responder de forma afirmativa o negativa'    
    }); }

   
   var arr= {names:names,email:email,city:city,
    ocupation:ocupation,howknow:howknow,overnight:overnight,
    havepc:havepc,levelstudies:levelstudies,technologies:technologies,
    projectinmind:projectinmind,questions:questions}
    //Evento ajax apara enviar los datos
    $.ajax({
      //Ruta para enviar el servicio
      url: '/saveparticipants',
      type: 'POST',
      //Enviamos el arreglo ar
      data: JSON.stringify(arr),
      contentType: 'application/json; charset=utf-8',
       async: false,
        //Si todo funciona bien entra al sucess
        statusCode: {
         409: function (msg) {
         alert('Ya existe una solicitud con estos datos');
        },
        400: function (response) {
         alert('error');

       } 
     },
     success: function(msg) {
        $.alert({
            title: 'Registrado correctamente',
            boxWidth: '30%',
            icon:'fa fa-check',
            type: 'green',
            useBootstrap:false,
            content: 'Esperamos verte en el evento',
        });
        cleanfields();
                    }


                  });
  }

  function cleanfields()
  {
    $("#names").val('');
    $("#email").val('');
    $("#city").val('');
    $("#ocupation").val('');
    $("#howknow").val('');
    $("#overnight").val('');
    $("#havepc").val('');
    $("#levelstudies").val('');
    $("#technologies").val('');
    $("#projectinmind").val('');
    $("#questions").val('');
  }
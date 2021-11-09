$(function() {
    $('#fechaNac').daterangepicker({
    locale:{
        // format:"YYYY-MM-DD hh:mm:ss"  // * Formato de fechas y horas como queremos
        format:"DD-MM-YYYY"
    },
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1920,
      maxYear: 2021,
    });
  });



// $(document).ready(function () {
//     $('#fechaNac').daterangepicker({
//         locale:{
//             format:"YYYY-MM-DD hh:mm:ss"  // * Formato de fechas y horas como queremos
//         },
//         // * Solo se le aplica la propiedad single
//         singleDatePicker: true,
//         showDropdowns: true,  //todo Facilidad para escoger la fecha
//         timePicker:true, // * Sirve para poder seleccionar la hora
//         // * Fijar rango de años
//         minYear: 2000,
//         maxYear: 2021,
//         startDate: moment().startOf('hour'),  // ? Fijar una hora de inicio
//         endDate: moment().startOf('hour').add(48, 'hour')  // ? Fijar en la segunda fecha la hora
//     }
//     ,function(inicio,fin){
//         console.log(inicio.format('YYYY-MM-DD hh:mm:ss')+" - "+fin.format('YYYY-MM-DD hh:mm:ss'));
//     });
// }
// );
/*
 * Form Elemets - Form
 */

$(function() {
  $('.timepicker').pickatime({
    default: 'now', // Set default time
    fromnow: 0, // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'Salir', // text for done-button
    cleartext: 'Borrar', // text for clear-button
    canceltext: 'Cancelar', // Text for cancel-button
    autoclose: true, // automatic close timepicker
    ampmclickable: false, // make AM PM clickable
    aftershow: function() {} //Function for after opening timepicker
  });

});
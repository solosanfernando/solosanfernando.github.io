
function borrar() {

};








function mostrarboton() {
  let acepto = document.getElementById('acepto');
  let botonterminar = document.getElementById('botonterminar');


  if (acepto.checked) {
    botonterminar.className = botonterminar.className.replace(/(?:^|\s)disabled(?!\S)/g, '');
    return

  } else {
    botonterminar.className +="disabled";
  }


}

/* function crearDivAPdf() {
  var pdf = new jsPDF('p', 'pt', 'letter');
  source = $('#imprimir')[0];

  specialElementHandlers = {
      '#bypassme': function (element, renderer) {
          return true
      }
  };
  margins = {
      top: 80,
      bottom: 60,
      left: 40,
      width: 522
  };

  pdf.fromHTML(
      source, 
      margins.left, // x coord
      margins.top, { // y coord
          'width': margins.width, 
          'elementHandlers': specialElementHandlers
      },

      function (dispose) {
          pdf.save('Prueba.pdf');
      }, margins
  );
} */
//iniciadores metalizer

document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.chips');
  
 
  var instances = M.Chips.init(elems);
});


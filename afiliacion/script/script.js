
function borrar() {
  var output = document.getElementById("imgfirma");
  output.src=" ";
  var output2 = document.getElementById("imgfrontal");
  output2.src=" ";
  var output3 = document.getElementById("imgtrasera");
  output3.src=" ";


};




function mostrar(documento) {


  var reader = new FileReader();
  reader.onload = function () {
    var dataURL = reader.result;
    var output = document.getElementById("img" + documento.id);
    var outputpdf=document.getElementById("img2"+documento.id);
    
    output.src = dataURL;
    outputpdf.src = dataURL;

  };
  reader.readAsDataURL(documento.files[0]);

}

function generar() {}

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

function crearDivAPdf() {
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
}
//iniciadores metalizer

document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});

function redireccionar(){
  window.locationf="http://www.solosanfernando.es";
  
} 

<!doctype html>
<html lang="en">

<head>
  <title>Multiplicaciones</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <h1 class="display-1">Multiplicaciones</h1>

      <div class="container">
        <div class="row">

          <div class="column">
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
              <input type="checkbox" class="btn-check form-check-input" id="tabla1" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla1">1</label>

              <input type="checkbox" class="btn-check form-check-input" id="tabla2" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla2">2</label>

              <input type="checkbox" class="btn-check form-check-input" id="tabla3" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla3">3</label>

              <input type="checkbox" class="btn-check form-check-input" id="tabla4" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla4">4</label>

              <input type="checkbox" class="btn-check form-check-input" id="tabla5" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla5">5</label>

              <input type="checkbox" class="btn-check form-check-input" id="tabla6" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla6">6</label>
              
              <input type="checkbox" class="btn-check form-check-input" id="tabla7" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla7">7</label>

              <input type="checkbox" class="btn-check form-check-input" id="tabla8" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla8">8</label>

              <input type="checkbox" class="btn-check form-check-input" id="tabla9" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla9">9</label>

              <input type="checkbox" class="btn-check form-check-input" id="tabla10" autocomplete="off">
              <label class="btn btn-outline-primary form-check-label" for="tabla10">10</label>
            </div>
          </div>

          <div class="column d-flex">
              <select class="form-select" id="dificultad">
                <option value="facil">Fácil (60 segundos)</option>
                <option value="intermedio">Intermedio (30 segundos)</option>
                <option value="dificil">Difícil (10 segundos)</option>
                <option value="extremo">Extremo (5 segundos)</option>
              </select>

              <button class="btn btn-primary" onclick="empezarJuego()">Empezar Juego</button>

              <div class="col-md-6">
                <div id="multiplicacion" class="display-4"></div>
              </div>
          </div>

        </div>
      </div>
        
      <script>
        let tablasSeleccionadas = [];
        let tiempoPorPregunta = 0;
        let interval;

        function empezarJuego() {
          tablasSeleccionadas = [];
          tiempoPorPregunta = obtenerTiempo();
          clearInterval(interval);

          const checkboxes = document.querySelectorAll('.form-check-input');
          checkboxes.forEach((checkbox, index) => {
            if (checkbox.checked) {
              tablasSeleccionadas.push(index + 1);
            }
          });

          if (tablasSeleccionadas.length === 0) {
            alert('Selecciona al menos una tabla antes de comenzar el juego.');
            return;
          }

          mostrarPregunta();
        }

        function mostrarPregunta() {
          const tabla = tablasSeleccionadas[Math.floor(Math.random() * tablasSeleccionadas.length)];
          const multiplicador = Math.floor(Math.random() * 10) + 1;
          const resultado = tabla * multiplicador;
          document.getElementById('multiplicacion').textContent = `${tabla} x ${multiplicador}`;

          setTimeout(() => {
            document.getElementById('multiplicacion').textContent = `${tabla} x ${multiplicador} = ${resultado}`;
            setTimeout(() => {
              mostrarPregunta();
            }, 1000);
          }, tiempoPorPregunta * 1000); 
        }

        function obtenerTiempo() {
          const dificultad = document.getElementById('dificultad').value;
          switch (dificultad) {
            case 'facil':
              return 60;
            case 'intermedio':
              return 30;
            case 'dificil':
              return 10;
            case 'extremo':
              return 5;
            default:
              return 0;
          }
        }
      </script>
  </main>
  <footer>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
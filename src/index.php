<!doctype html>
<html lang="en">

<head>
    <title>Scap2024</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Bootstrap JavaScript Libraries -->
    <link rel="stylesheet" href='css/styles.css'>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script defer src="index.js"></script>
</head>

<body>
    <header>
    </header>
    <main>
        <div class="container mt-5 text text-goblin">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-12 col-md-4">
                    <h4 class="fw-light text-center">Nombre del host</h4>
                    <p class="text-center" id="hostName"></p>

                </div>
                <div class="col-12 col-md-4">
                    <h4 class="fw-light text-center">Nombre de la cuenta FTP</h4>
                    <p class="text-center" id="name"></p>
                </div>
                <div class="col-12 col-md-4">
                    <h4 class="fw-light text-center">Contraseña de la cuenta FTP</h4>
                    <p class="text-center" id="password"></p>

                </div>

            </div>
        </div>
        
        <div class="container mt-5 text text-goblin" id="main">

            <h2 class="fw-light text-center mt-3">¿Cuál es el propósito principal de Docker Compose en el ecosistema de Docker?</h2>

            <div class="row justify-content-center align-items-center g-2 mt-3">
                <div class="col-12 text-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="radio" class="btn-check" name="btnradio1" id="btncheck1" autocomplete="off" value='1' />
                        <label class="btn btn-dark" for="btncheck1">Gestionar múltiples contenedores</label>

                        <input type="radio" class="btn-check" name="btnradio1" id="btncheck2" autocomplete="off" value='2' />
                        <label class="btn btn-dark" for="btncheck2">Compilar imágenes de docker</label>

                        <input type="radio" class="btn-check" name="btnradio1" id="btncheck3" autocomplete="off" value='3' />
                        <label class="btn btn-dark" for="btncheck3">Orquestar la distribución de contenedores en clústeres.</label>
                    </div>
                </div>
            </div>
            <h2 class="fw-light text-center  mt-3">¿Cuál es el comando de Docker utilizado para construir una imagen a partir de un Dockerfile?</h2>

            <div class="row justify-content-center align-items-center g-2 mt-3">
                <div class="col-12 text-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="radio" class="btn-check" name="btnradio2" id="btncheck4" autocomplete="off" value='4' />
                        <label class="btn btn-dark" for="btncheck4">docker start</label>

                        <input type="radio" class="btn-check" name="btnradio2" id="btncheck5" autocomplete="off" value='5' />
                        <label class="btn btn-dark" for="btncheck5">docker build</label>

                        <input type="radio" class="btn-check" name="btnradio2" id="btncheck6" autocomplete="off" value='6' />
                        <label class="btn btn-dark" for="btncheck6">docker create</label>
                    </div>
                </div>
            </div>

            <h2 class="fw-light text-center  mt-3">¿Cómo se detiene un contenedor en ejecución en Docker?</h2>
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <div class="col-12 text-center">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="radio" class="btn-check" name="btnradio3" id="btncheck7" autocomplete="off" value='7' />
                        <label class="btn btn-dark" for="btncheck7">docker stop</label>

                        <input type="radio" class="btn-check" name="btnradio3" id="btncheck8" autocomplete="off" value='8' />
                        <label class="btn btn-dark" for="btncheck8">docker kill</label>

                        <input type="radio" class="btn-check" name="btnradio3" id="btncheck9" autocomplete="off" value='9' />
                        <label class="btn btn-dark" for="btncheck9">docker pause</label>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button onclick="checkForm()" class="btn btn-primary fw-light fs-5 p-4">
                    Comprobar
                </button>
            </div>
            
        </div>
        <div class="container">
        <p class="text-center text text-goblin" id="response"></p>
            
        </div>
    </main>
    <footer>
    </footer>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Principal/style4.css?v=2.0">
    <link rel="stylesheet" href="style-home.css?v=3.0">
    <title>Document</title>
</head>
<body style="background-color: #e0e0e0">

    <?php
        include_once '../Principal/index.php';
    ?>

    <!-- banner -->
    <div class="container-arq">
        <p>Nuestros Diseños Arquitectonicos</p>
    </div>

    <!-- Tarjetas -->
    <div class="container-tarjetas">

    
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
            <img src="./diseno/13/1.jpg" class="card-img-top" alt="...">
            <div class="status">Por construir</div>
            <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5 class="card-title">Casa Habitación</h5></li>
                <li class="list-group-item"><p class="card-text">Estilo: Minimalista</p></li>
                <li class="list-group-item"><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bed Room">5</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Living Room">2</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Parking">2</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Kitchen">1</button>
            </li>
            </ul>
                
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="./diseno/14/1.jpg" class="card-img-top" alt="...">
            <div class="status">Terminada</div>
            <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5 class="card-title">Cocina</h5></li>
                <li class="list-group-item"><p class="card-text">Estilo: Minimalista</p></li>
                <li class="list-group-item"><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bed Room">5</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Living Room">2</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Parking">2</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Kitchen">1</button>
            </li>
            </ul>
                
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div> <!-- 
        <div class="col">
            <div class="card h-100">
            <img src="./diseno/3/1" class="card-img-top" alt="propiedades">
            <div class="status">En construcción</div>
            <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5 class="card-title">Casa Habitación</h5></li>
                <li class="list-group-item"><p class="card-text">Estilo: Minimalista</p></li>
                <li class="list-group-item"><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bed Room">5</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Living Room">2</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Parking">2</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Kitchen">1</button>
            </li>
            </ul>
                
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
            </div>
        </div> -->

    </div> 

    <br>

    <nav aria-label="...">
  <ul class="pagination pagination-sm">
    <li class="page-item">
      <a class="page-link" href="arquitectura.php" style="color:#282936;">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="arquitectura.php" style="color: #282936;">1</a></li>
    <li class="page-item"><a class="page-link" href="#" style="background-color: #681319; color: white;">2</a></li>
    <li class="page-item disabled">
      <a class="page-link">Next</a>
    </li>
  </ul>
</nav>


</div>


    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    

    <?php
        include_once 'footer.php';
    ?>
</body>
</html>
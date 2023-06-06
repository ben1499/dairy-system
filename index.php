<?php
include_once 'header.php';
?>
<head><title>Home</title></head>
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="img/nandini2.jpg" height="500px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img src="img/heritage.jpg" width="1280px" height="500px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img src="img/nandini.jpg" width="1280px" height="500px" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img src="img/thirumala.jpg" width="1280px" height="500px" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <?php include_once 'footer.php' ?>
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?php 

require "conn.php";

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-dark" >

    <style>
        .input-container {
    display: flex;
    background: white;
    border-radius: 1rem;
    background: linear-gradient(135deg, #23272F 0%, #14161a 100%);
    box-shadow: 10px 10px 20px #0e1013, -10px -10px 40px #383e4b;
    padding: 0.3rem;
    gap: 0.3rem;
    width: 80%;
  }
  

  .input-container input {
    border-radius: 0.8rem 0 0 0.8rem;
    background: #23272F;
    box-shadow: inset 5px 5px 10px #0e1013, inset -5px -5px 10px #383e4b, 0px 0px 100px rgba(255, 212, 59, 0), 0px 0px 100px rgba(255, 102, 0, 0);
    width: 100%;
    flex-basis: 75%;
    padding: 1rem;
    border: none;
    border: 1px solid transparent;
    color: white;
    transition: all 0.2s ease-in-out;
  }
  
  .input-container input:focus {
    border: 1px solid #FFD43B;
    outline: none;
    box-shadow: inset 0px 0px 10px rgba(255, 102, 0, 0.5), inset 0px 0px 10px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 102, 0, 0.5);
  }
  
  .input-container button {
    flex-basis: 25%;
    padding: 1rem;
    background: linear-gradient(135deg, rgb(255, 212, 59) 0%, rgb(255, 102, 0) 100%);
    box-shadow: 0px 0px 1px rgba(255, 212, 59, 0.5), 0px 0px 1px rgba(255, 102, 0, 0.5);
    font-weight: 900;
    letter-spacing: 0.3rem;
    text-transform: uppercase;
    color: #23272F;
    border: none;
    width: 100%;
    border-radius: 0 1rem 1rem 0;
    transition: all 0.2s ease-in-out;
  }
  
  .input-container button:hover {
    background: linear-gradient(135deg, rgb(255, 212, 59) 50%, rgb(255, 102, 0) 100%);
    box-shadow: 0px 0px 100px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 102, 0, 0.5);
  }
  .ad-par{
    font-size: 15px;
    line-height: 17px;
  }
  
  @media (max-width: 500px) {
    .input-container {
      flex-direction: column;
      width: 100%;
    }

  
    .input-container input {
      border-radius: 0.8rem;
    }
   
    .input-container button {
      padding: 1rem;
      border-radius: 0.8rem;
    }
  }
/* Default styles for larger screens */
.custom-image {
    max-width: 200px; /* Set your desired max-width */
    max-height: 200px; /* Set your desired max-height */
    width: auto;
    height: auto;
}

/* Media query for smaller screens (phones) */
@media (max-width: 767px) {
    .custom-image {
        max-width: 100px; /* Set a smaller max-width for phones */
        max-height: 100px; /* Set a smaller max-height for phones */
        width: auto;
        height: auto;
}

    .title{
      font-size: 14px;
    }
}



    </style>


  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <div class="cgpa p-5 justify-content-center">
        <form action="cgpa.php" method="post" >
            <p class="text-center h1 text-light my-5">Enter Your Email To Proceed</p>
            <div class="input-container m-auto  done justify-content-center">
            <input type="email" id="no-co" name="email" required placeholder="e.g name@example.com">
            <button type="submit" class="button" name="check" id="done" >Check Now</button>
        </div>
    </form>

  
    

        
    <?php
$sql = "SELECT * FROM ads";
$result = $conn->query($sql);

$ads = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ads[] = $row;
    }
}

// Shuffle the array of ads
shuffle($ads);

// Render the carousel
?>
<div id="carouselExample" class="carousel" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $active = true;
        foreach ($ads as $ad) {
            echo "<div class='carousel-item " . ($active ? 'active' : '') . "'>
                      <a href='counter.php?idtag={$ad['idtag']}' class='text-decoration-none' target='_blank' rel='noopener noreferrer'>
                          <div class='mt-5 alert d-flex alert-light' role='alert'>
                              <img src='./admin{$ad['image']}' class='custom-image img me-3 me-sm-5' alt=''>
                              <div class='content'>
                                  <h4 class='alert-heading title sm-h2'>{$ad['title']}</h4>
                                  <p class='ad-par'>{$ad['description']}</p>
                              </div>
                          </div>
                      </a>
                  </div>";

            $active = false;
        }
        ?>
    </div>
</div>

        </div>
  </main>












<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
    // Enable the carousel with a 3-second interval
    $('.carousel').slide({
      interval: 1000 // Adjust the interval as needed (in milliseconds)
    });
  });
</script>
        

  

  </main>
  <footer class="text-light text-center" >Created By <a class="text-warning text-decoration-none" href="https://wa.me/2349095335818"> Maxi</a> </footer>
  <!-- Bootstrap JavaScript Libraries -->
  
</body>

</html>







  
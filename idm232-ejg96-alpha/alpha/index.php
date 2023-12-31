<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dish Discovery</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="headercon">
        <!-- <h1> Dish Discovery</h1> -->
        <h2> Uncover New Recipes </h2>
        <picture>
          <source media="(max-width: 650px)" srcset="heroimg3-mob.png">
          <img src="heroimg3.png" alt="placeholder">
        </picture>

    </div>
  <main>
    <div class="filterscon">
      <div class="searchcon">
        <form>
        <input type="text" placeholder="Search..">
        <button class="search" type="submit">
          <svg fill="#000000"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 183.792 183.792" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M54.734,9.053C39.12,18.067,27.95,32.624,23.284,50.039c-4.667,17.415-2.271,35.606,6.743,51.22 c12.023,20.823,34.441,33.759,58.508,33.759c7.599,0,15.139-1.308,22.287-3.818l30.364,52.592l21.65-12.5l-30.359-52.583 c10.255-8.774,17.638-20.411,21.207-33.73c4.666-17.415,2.27-35.605-6.744-51.22C134.918,12.936,112.499,0,88.433,0 C76.645,0,64.992,3.13,54.734,9.053z M125.29,46.259c5.676,9.831,7.184,21.285,4.246,32.25c-2.938,10.965-9.971,20.13-19.802,25.806 c-6.462,3.731-13.793,5.703-21.199,5.703c-15.163,0-29.286-8.146-36.857-21.259c-5.676-9.831-7.184-21.284-4.245-32.25 c2.938-10.965,9.971-20.13,19.802-25.807C73.696,26.972,81.027,25,88.433,25C103.597,25,117.719,33.146,125.29,46.259z"></path> </g></svg>
        </button>
        </form>
        <h5>
          Protein Filter
          <!-- <svg width="24px" height="8.4px" viewBox="0 0 120 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.71666 0C0.597155 0 -1.21429 6.78082 3.22319 9.33389L57.5065 40.5654C59.0502 41.4535 60.9498 41.4535 62.4935 40.5654L116.777 9.33389C121.214 6.78082 119.403 0 114.283 0H5.71666Z" fill="#EA5624"/>
            </svg> -->
        </h5>
        <div id="protfilter" class="filter">
          <div class="protgro">
             <input class="cb" type="checkbox" id="chicken" value="chicken">
             <label for="chicken"> Chicken </label>
          </div>
          <div class="protgro">
            <input class="cb" type="checkbox" id="beef" value="beef">
             <label for="beef"> Beef </label>
          </div>
          <div class="protgro">
            <input class="cb" type="checkbox" id="vegetarian" value="vegetarian">
            <label for="vegetarian"> Vegetarian </label>
          </div>
          <div class="protgro">
            <input class="cb" type="checkbox" id="fish" value="fish">
            <label for="fish"> Fish </label>
          </div>
          <div class="protgro">
            <input class="cb" type="checkbox" id="pork" value="pork">
            <label for="pork"> Pork </label>
          </div>
          <div class="protgro">
            <input class="cb" type="checkbox" id="steak" value="steak">
            <label for="steak"> Steak </label>
            </div>
            <div class="protgro">
              <input class="cb" type="checkbox" id="turkey" value="turkey">
              <label for="turkey"> Turkey </label>
          </div>
          <div class="protgro">
            <button class="cb" type="reset" id="resetprotein" aria-label="Clear All">
              <i class="fa-solid fa-plus" aria-hidden="true"></i> </button>
            <label for="resetprotein"> Clear All </label>
        </div>
        </div>
      </div>
    </div>
    <div class="wholerecipecon" id="thisONE">
    <?php
        require_once './includes/fun.php';
        consoleMsg("PHP to JS is not it");
        require_once './env.php';
        require_once './includes/database.php';
    ?>
    <?php
      // Get all the recipes from "recipes" table in the "idm232" database
      consoleMsg("results is ; $results");
      $query = "SELECT * FROM Recipes";
      print_r($query);
      $results = mysqli_query($db_connection, $query);
      // consoleMsg("results is ; $results");
      if ($results->num_rows > 0) {
        consoleMsg("Query successful! number of rows: $results->num_rows");
        while ($oneRecipe = mysqli_fetch_array($results)) {
          // echo '<h3>' .$oneRecipe['Title']. ' - '  . $oneRecipe['Cal/Serving']  .  '</h3>'; 
          $id = $oneRecipe['id'];
          // if ($id % 2 == 0) {
          //   echo '<figure class="oneRec">';
          // } else {
          //   echo '<figure class="oneRecOdd">';
          // }
          echo '<div class="recipecon" onclick="openRecipePage()">';
          echo '<img src="./imgs/' . $oneRecipe['Main IMG'] . '" alt="Dish Image">';
          echo '<div class="rectitle">';
          echo '<h3>'  . $oneRecipe['Title'] . '</h3>';
          echo '<h4>'  . $oneRecipe['Subtitle'] . '</h4>';
          echo '</div>';
          echo '</div>';

          // echo '<figcaption>' . $id . ' ' . $oneRecipe['Title'] . '</figcaption>';
        }

      } else {
        consoleMsg("QUERY ERROR");
      }

    ?>

      <!-- <div class="recipecon" onclick="openRecipePage()">
        <img src="imgs/recipe-main-imgs/0101_FPP_Chicken-Rice_97338_WEB_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            Ancho-Orange Chicken
          </h3>
          <h4>
            with Kale Rice &amp; Roasted Carrots
          </h4>
        </div>
      </div>
      <div class="recipecon">
        <img src="imgs/recipe-main-imgs/0101_2PM_Steak-Diane_97315_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            Beef Medallions &amp; Mushroom Sauce
          </h3>
          <h4>
            with Mashed Potatoes
          </h4>
        </div>
      </div>
      <div class="recipecon">
        <img src="imgs/recipe-main-imgs/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            Broccoli &amp; Basil Pesto Sandwiches
          </h3>
          <h4>
            with Romaine &amp; Citrus Salad
          </h4>
        </div>
      </div>
      <div class="recipecon">
        <img src="imgs/recipe-main-imgs/0101_FPV_Broccoli-Calzones_97286_WEB_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            Broccoli &amp; Mozzarella Calzones
          </h3>
          <h4>
            with Caesar Salad
          </h4>
        </div>
      </div>
      <div class="recipecon">
        <img src="imgs/recipe-main-imgs/0101_2PV1_Broccoli-Bucatini-Fettuccine_97230_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            Bucatini Alfredo
          </h3>
          <h4>
            with Broccoli
          </h4>
        </div>
      </div>
      <div class="recipecon">
        <img src="imgs/recipe-main-imgs/1225_2PV1_Bucatini_100082_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            Bucatini &amp; Tomato Sauce
          </h3>
          <h4>
            with Roasted Broccoli
          </h4>
        </div>
      </div>
      <div class="recipecon">
        <img src="imgs/recipe-main-imgs/1120_FPV_Emchiladas_74891_WEB_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            Cheesy Enchiladas Rojas
          </h3>
          <h4>
            with Mushrooms &amp; Kale
          </h4>
        </div>
      </div>
      <div class="recipecon">
        <img src="imgs/recipe-main-imgs/0101_FPF_Crispy-Wild-Alaskan-Pollock_97377_WEB_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            Crispy Fish Sandwiches
          </h3>
          <h4>
            with Tartar Sauce &amp; Roasted Sweet Potato Wedges
          </h4>
        </div>
      </div>
      <div class="recipecon">
        <img src="imgs/recipe-main-imgs/0101_2PRE07_General-Tsos-Chicken_97217_WEB_SQ.jpg" alt="placeholder">
        <div class="rectitle">
          <h3>
            General Tso's Chicken
          </h3>
          <h4>
            with Bok Choy &amp; Jasmine Rice
          </h4>
        </div>
      </div> -->
    </div>
    <div id="footercon">
        <h1>© Eli Goldberg 2023</h1>
    </div>
  </main>
  <script src="script.js"> </script>
  </body>
  </html>
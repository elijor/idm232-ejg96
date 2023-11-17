<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dish Discovery - Recipe Detail Page</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <?php
        require_once '../includes/fun.php';
        consoleMsg("PHP fun is loaded");
        require_once '../env.php';
        require_once '../includes/database.php';
    ?> 


    <?php

    // $recipe_id = $_GET['id'];  
    // if (isset($_GET['id'])) {
    //     // Retrieve recipe data based on ID from the URL
    //     $recipe_id = $_GET['id'];
    //     $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
    //     $results = mysqli_query($db_connection, $query);
    //     while ($oneRecipe = mysqli_fetch_array($results)) {
    //     // echo '<p>' . $oneRecipe['Title'] . '</p>';

    //     };
    // };
    consoleMsg("it loaded atleast");
 
    // Close the database connection
    // $pdo = null;
    ?>
    <div class="headercon">

        <img id="logo" src="imgs/dishdisclogo.svg" alt="placeholder">
    </div>
    <div class="goback">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#ea5624" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        <h3>
            <a href="../">
                Back to Recipes
            </a>
        </h3>
    </div>
    <main>
        <div class="mainsect row flex twochild">
            <div class="column gap10 flex">
                <div>
                    <h1 class="title">
                    <?php $recipe_id = $_GET['id'];  
                        if (isset($_GET['id'])) {
                            // Retrieve recipe data based on ID from the URL
                            $recipe_id = $_GET['id'];
                            $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                            $results = mysqli_query($db_connection, $query);
                            while ($oneRecipe = mysqli_fetch_array($results)) {
                                echo $oneRecipe['Title'];
                            };
                        };
                      ?>
                    </h1>
                    <h2 class="subtitle">
                    <?php 
                    if (isset($_GET['id'])) {
                        $recipe_id = $_GET['id'];
                        $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                        $results = mysqli_query($db_connection, $query);
                        while ($oneRecipe = mysqli_fetch_array($results)) {
                            echo $oneRecipe['Subtitle'];
                        };
                    };
                     ?>
                    </h1>
                    </h2>
                </div>
                <div>
                    <h2 class="heading">
                        Description
                    </h2>
                    <p class="recdescript">
                        <?php
                           if (isset($_GET['id'])) {
                            $recipe_id = $_GET['id'];
                            $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                            $results = mysqli_query($db_connection, $query);
                            while ($oneRecipe = mysqli_fetch_array($results)) {
                                echo $oneRecipe['Description'];
                            };
                        };
                        ?>
                        <!-- We're amping up chicken breasts with a glaze of smoky ancho chile paste and fresh orange juice in this recipe. On the side, roasted carrots and lightly creamy, golden raisin-studded rice perfectly accent the sweetness of the glaze. -->
                    </p>
                </div>
                <div class="rowtoc flex threech">
                    <div class="mainicon">
                        <div class="iconsvg">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V12L14.5 13.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#ea5624" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        <h3>
                            Cook Time
                        </h3>
                        <h3>
                        <?php 
                        if (isset($_GET['id'])) {
                            $recipe_id = $_GET['id'];
                            $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                            $results = mysqli_query($db_connection, $query);
                            while ($oneRecipe = mysqli_fetch_array($results)) {
                                echo $oneRecipe['Cook Time'];
                            };
                        };
                        ?>
                        </h3>
                    </div>
                    <div class="mainicon">
                        <div class="iconsvg">
                            <svg fill="#ea5624" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297" xml:space="preserve" stroke="#ea5624"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M281.346,202.737C277.872,140.813,231.86,90.065,172.13,79.315c0.859-2.521,1.332-5.22,1.332-8.027 c0-13.764-11.198-24.961-24.962-24.961s-24.962,11.197-24.962,24.961c0,2.808,0.473,5.505,1.331,8.026 C65.141,90.063,19.134,140.813,15.66,202.735C6.464,206.54,0,215.406,0,225.712c0,13.764,11.53,24.961,25.702,24.961h245.596 c14.172,0,25.702-11.197,25.702-24.961C297,215.409,290.538,206.544,281.346,202.737z M142.576,71.288 c0-3.266,2.657-5.923,5.924-5.923s5.924,2.657,5.924,5.923c0,3.267-2.657,5.924-5.924,5.924S142.576,74.555,142.576,71.288z M148.5,96.25c59.666,0,108.774,46.064,113.626,104.5H34.874C39.726,142.314,88.834,96.25,148.5,96.25z M271.298,231.635H25.702 c-3.611,0-6.664-2.713-6.664-5.923c0-3.211,3.053-5.924,6.664-5.924h245.596c3.611,0,6.664,2.713,6.664,5.924 C277.962,228.922,274.909,231.635,271.298,231.635z"></path> </g></svg>                        </div>
                        <h3>
                            Servings
                        </h3>
                        <h3>
                        <?php
                          if (isset($_GET['id'])) {
                            $recipe_id = $_GET['id'];
                            $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                            $results = mysqli_query($db_connection, $query);
                            while ($oneRecipe = mysqli_fetch_array($results)) {
                                echo $oneRecipe['Servings'];
                            };
                        };
                        ?>
                        </h3>
                    </div>
                    <div class="mainicon">
                        <div class="iconsvg">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.25961 3.09856C9.6636 2.08774 10.9948 1.46276 12.0272 2.2492C13.7471 3.55935 15.9044 5.4855 17.6398 7.68865C19.3595 9.87197 20.75 12.4348 20.75 15C20.75 17.2933 20.0398 18.9975 19.0117 20.218C17.9933 21.4269 16.6994 22.1193 15.5816 22.4671C15.0076 22.6457 14.4825 22.3825 14.2275 21.9545C13.9871 21.5512 13.9859 21.0147 14.2863 20.583C15.1436 19.351 16.05 17.5793 16.05 16C16.05 15.2165 15.7123 14.2889 15.1668 13.3372C14.7566 12.6215 14.2539 11.9351 13.7643 11.3465C13.6627 12.7494 13.3578 14.5121 12.412 15.9696C11.9822 16.6319 11.0267 16.706 10.518 16.0627C10.3592 15.8618 10.2023 15.6412 10.0588 15.4393C10.0501 15.4271 10.0415 15.4151 10.033 15.403C9.9545 15.2927 9.87986 15.1882 9.80763 15.09C9.12187 15.773 8.48333 16.5902 8.48333 17.5C8.48333 18.3037 8.88448 19.4025 9.35898 20.3335C9.61561 20.837 9.50832 21.3951 9.1994 21.7606C8.87092 22.1492 8.27312 22.3491 7.70569 22.0206C5.76159 20.8952 3.25 18.4917 3.25 15C3.25 14.0531 3.57109 13.0736 4.0203 12.1168C4.47254 11.1536 5.0858 10.15 5.72984 9.14739C5.95297 8.80004 6.17941 8.45306 6.40546 8.10668C7.51002 6.41411 8.60528 4.73579 9.25961 3.09856ZM10.8983 3.41743C10.7958 3.45292 10.6992 3.53846 10.6525 3.65524C9.93718 5.44504 8.74008 7.27713 7.63532 8.9679C7.41569 9.30403 7.19971 9.63458 6.99189 9.95809C6.35264 10.9532 5.78547 11.8866 5.3781 12.7543C4.96769 13.6284 4.75 14.3737 4.75 15C4.75 17.2945 6.15653 19.0762 7.63307 20.1782C7.27845 19.3371 6.98333 18.367 6.98333 17.5C6.98333 15.7694 8.2827 14.4629 9.00894 13.7752C9.47929 13.3298 10.2914 13.2899 10.7647 13.874C10.9359 14.0853 11.1032 14.3197 11.2553 14.5336L11.2734 14.559C11.3161 14.619 11.3576 14.6774 11.3983 14.7342C12.0671 13.4599 12.2543 11.9056 12.3012 10.6262C12.3204 10.0998 12.6468 9.68344 13.0747 9.50935C13.5118 9.33153 14.0549 9.40987 14.4285 9.82319L13.8721 10.3261L14.4285 9.82319C15.0949 10.5604 15.8626 11.5347 16.4682 12.5913C17.0657 13.6337 17.55 14.8329 17.55 16C17.55 17.6926 16.7822 19.4101 16.0062 20.6885C16.6582 20.3692 17.3159 19.9028 17.8644 19.2516C18.6512 18.3177 19.25 16.9612 19.25 15C19.25 12.9433 18.1125 10.7131 16.4614 8.61679C14.8259 6.54033 12.7696 4.70034 11.1183 3.44243C11.0636 3.40079 10.993 3.38466 10.8983 3.41743Z" fill="#ea5624"></path> </g></svg>
                        </div>
                        <h3>
                            Calories
                        </h3>
                        <h3>
                        <?php 
                         if (isset($_GET['id'])) {
                            $recipe_id = $_GET['id'];
                            $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                            $results = mysqli_query($db_connection, $query);
                            while ($oneRecipe = mysqli_fetch_array($results)) {
                                echo $oneRecipe['Cal/Serving'];
                            };
                        };
                         ?>
                        </h3>
                    </div>
                </div>
            </div>
            <?php
             if (isset($_GET['id'])) {
                $recipe_id = $_GET['id'];
                $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                $results = mysqli_query($db_connection, $query);
                while ($oneRecipe = mysqli_fetch_array($results)) {
                    echo '<img src="./../imgs/'.$oneRecipe['Main IMG'] . '" " alt="Dish image">';
                };
            };
            ?>
            <!-- <img src="imgs/0101_FPP_Chicken-Rice_97338_WEB_SQ.jpg" alt="placeholder"> -->
        </div>
        <div class="mainsect row flex twochild">
             <?php
              if (isset($_GET['id'])) {
                $recipe_id = $_GET['id'];
                $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                $results = mysqli_query($db_connection, $query);
                while ($oneRecipe = mysqli_fetch_array($results)) {
                    echo '<img class="border" src="./../imgs/recipe-ing-imgs/'.$oneRecipe['Ingredients IMG'] . '" " alt="All Ingredients">';
                };
            };
            ?>
            <!-- <img class="border" src="imgs/0101_ING_FPP_large_feature.png" alt="placeholder"> -->
            <div class="column flex">
                <h2 class="heading">
                    Ingredients
                </h2>
                <!-- <ol> -->
                    <?php
                    if (isset($_GET['id'])) {
                        $recipe_id = $_GET['id'];
                        $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                        $results = mysqli_query($db_connection, $query);
                        while ($oneRecipe = mysqli_fetch_array($results)) {
             
            
                    function keyExists($oneRecipe, $key) {
                        return isset($oneRecipe[$key]) && !empty($oneRecipe[$key]);
                      };
                    if (keyExists($oneRecipe, 'All Ingredients')) {
                        $ingredientsArray = explode('*', $oneRecipe['All Ingredients']);
                    
                        // Trim each ingredient to remove extra whitespaces
                        $ingredientsArray = array_map('trim', $ingredientsArray);
                            echo '<ol>';
                            foreach ($ingredientsArray as $ingredient) {
                                echo '<li>' . $ingredient . '</li>';
                            }
                            echo '</ol>';
                    } else {
                        echo 'No ingredients available.';
                    }           
                 }; }
                    ?>
            </div>
        </div>
        <div class="mainsect column flex">
            <h2 class="heading">
                Steps
            </h2>
            <div class="row flex fwrap twochild">
            <?php
            if (isset($_GET['id'])) {
                $recipe_id = $_GET['id'];
                $query = "SELECT * FROM Recipes WHERE id = $recipe_id ";
                $results = mysqli_query($db_connection, $query);
                while ($oneRecipe = mysqli_fetch_array($results)) {
     
                    $originalSteps2 = explode('*', $oneRecipe['All Steps']);
                    $stepImgsArray = explode("*", $oneRecipe['Step IMGs']);

                // echo '<p> Number of steps is' . count($originalSteps2) .' </p>';
                    for($lp = 0; $lp < count($originalSteps2 ); $lp++) {
                        $firstChar = substr($originalSteps2[$lp], 0, 1);
                        // echo '<p> this is the first character' . $firstChar . '</p>';
                        if (is_numeric($firstChar)){
                            echo '<img src="./../imgs/recipe-steps-imgs/' . $stepImgsArray[$firstChar-1] . '" alt="Dish image">';
                        }
                    }
                }
            }
                // function applyRules($originalSteps) {
                
                //     $originalSteps = str_replace(':*', ': ', $originalSteps);

                //     // Rule three: Find numbers as the first or second character after "*"
                //     if (preg_match('/\*(\d)/', $originalSteps, $matches)) {
                //         // Check if there is another "*" 30 characters or less after the first number
                //         $positionOfFirstNumber = strpos($originalSteps, $matches);
                //         $positionOfSecondStar = strpos($originalSteps, '*', $positionOfFirstNumber + 1);
                
                //         if ($positionOfSecondStar === false || $positionOfSecondStar - $positionOfFirstNumber > 100) {
                //             // If not, add a "*" immediately after the first number
                //             $originalSteps = preg_replace('/\*(\d)/', '*$1*', $originalSteps);
                //         }
                //     }
                //     // ignore her below
                //     if (preg_match('/\b1\b/', $originalSteps)) {
                //         $positionOfFirstOne = strpos($originalSteps, '1');
                //         $positionOfSecondStarOne = strpos($originalSteps, '*', $positionOfFirstOne + 1);
                
                //         if ($positionOfSecondStarOne === false || $positionOfSecondStarOne - $positionOfFirstOne > 30) {
                //             // If not, add a "*" immediately after the first number 1
                //             $originalSteps = preg_replace('/(?<!\*)1/', '1*', $originalSteps, 1); // Limit to one replacement
                //         } 
                //     }
                //     $originalSteps = str_replace('**', '*', $originalSteps);
                //     $originalSteps = str_replace("\"&\"", "", $originalSteps);
                //     //$originalSteps = "hi*hi";
            
                //     return $originalSteps;

                // };

                // $output = applyRules($originalSteps);
                // // print_r($output);

                //     if (keyExists($oneRecipe, 'Step IMGs')) { 
                //         $iteration = 0;

                //         $stepsIMGArray = explode('*', $oneRecipe['Step IMGs']);

                //         $newNewAllSteps = explode('*', $output);

                //             for ($x = 0; $x < count($stepsIMGArray); $x++) {
                            
                //                 echo '<div class="stepcon flex column">';
                //                 echo '<div class="stepconimg">';
                //                 echo '<h3> Step ' . $newNewAllSteps[$x*2] . '</h3>';
                //                 echo '<img src="./../imgs/recipe-steps-imgs/'. $stepsIMGArray[$x] .'"  alt="step food imgs">';
                //                 echo '</div>';
                //                 echo '<p>' . $newNewAllSteps[$x*2+1] . '</p>';
                //                 echo '</div>';
                //             };

                //     } else {
                //         echo 'No steps available.';
                //     } 
                    ?>
                    
                <!-- <div class="stepcon flex column">
                    <div class="stepconimg">
                        <h3>
                            Step 1
                        </h3>
                        <img src="imgs/0101_FPP_Chicken-Rice_18594_WEB_retina_feature.jpg" alt="placeholder">
                    </div>
                    <p>
                        Place an oven rack in the center of the oven, then preheat to 450°F. In a medium pot, combine the <strong>rice, a big pinch of salt,</strong> and <strong>1 1/2 cups of water.</strong> Heat to boiling on high. Once boiling, cover and reduce the heat to low. Cook 12 to 14 minutes, or until the water has been absorbed and the rice is tender. Turn off the heat and fluff with a fork. Cover to keep warm.
                    </p>
                </div> -->
            </div>
        </div>
    </main>
    <div id="footercon">
        <h1 class="whitetext">
            © Eli Goldberg 2023
        </h1>
    </div>
  </body>
</html>

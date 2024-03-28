<?php 

session_start();
error_reporting(E_ALL);
// ini_set(display_errors);

require_once('../system/db_con.php');
include "../system/functions.php"; 
require_once('../system/admin.php');

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Админ</title>
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/admin.js?v=<?php echo time(); ?>"></script>


</head>
<style>

</style>
<? 
// auth();
// menu();
// admin();
     ?>

<body class="admin">


  <div id="tsparticles"></div>







  <script type="text/javascript">
  // const optionss = 
  (async () => {
    // await loadAll(tsParticles); // not needed if using the bundle script, required for any other installation

    await tsParticles.load({
      id: "tsparticles",
      options: {
        "fps_limit": 60,
        "interactivity": {
          "detectsOn": "canvas",
          "events": {
            "onClick": {
              "enable": true,
              "mode": "push"
            },
            "onHover": {
              "enable": true,
              "mode": "repulse"
            },
            "resize": true
          },
          "modes": {
            "push": {
              "particles_nb": 4
            },
            "repulse": {
              "distance": 100,
              "duration": 0.4
            }
          }
        },
        "particles": {
          "color": {
            "value": "#c5c6c7"
          },
          "links": {
            "color": "#c5c6c7",
            "distance": 200,
            "enable": true,
            "opacity": 0.7,
            "width": 1
          },
          "move": {
            "bounce": false,
            "direction": "none",
            "enable": true,
            "outMode": "out",
            "random": false,
            "speed": 1,
            "straight": false
          },
          "number": {
            "density": {
              "enable": true,
              "area": 800
            },
            "value": 200
          },
          "opacity": {
            "value": 0.5
          },
          "shape": {
            "type": "circle"
          },
          "size": {
            "random": true,
            "value": 2
          }
        },
        "detectRetina": true
      }
    })
  })
  ();
  </script>

</body>

</html>
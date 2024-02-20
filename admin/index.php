<?php 
include "../system/functions.php"; 

function showError($field) {
    echo "<p class='error'>Заполните поле $field</p>";
}

function validateInput($input) {
    return !empty($input);
}

function resizeImage($file, $maxWidth, $maxHeight, $quality = 90) {
    $imageType = exif_imagetype($file);
    list($origWidth, $origHeight) = getimagesize($file);

    $width = $origWidth;
    $height = $origHeight;

    // Calculate aspect ratio
    $ratio = max($origWidth / $maxWidth, $origHeight / $maxHeight);

    if ($ratio < 1) {
        $width = $origWidth;
        $height = $origHeight;
    } else {
        $width = $maxWidth;
        $height = $maxHeight;
    }

    // Create a new image from the original file
    if ($imageType == IMAGETYPE_JPEG) {
        $imageResized = imagecreatefromjpeg($file);
    } elseif ($imageType == IMAGETYPE_PNG) {
        $imageResized = imagecreatefrompng($file);
        imagesavealpha($imageResized, true); // Save alpha channel
    } else {
        return false; // Unsupported image type
    }

    $imageResizedNew = imagecreatetruecolor($width, $height);

    // Preserve transparency for PNG images
    if ($imageType == IMAGETYPE_PNG) {
        imagealphablending($imageResizedNew, false);
        imagesavealpha($imageResizedNew, true);
        $transparent = imagecolorallocatealpha($imageResizedNew, 0, 0, 0, 127);
        imagefilledrectangle($imageResizedNew, 0, 0, $width, $height, $transparent);
    }

    imagecopyresampled($imageResizedNew, $imageResized, 0, 0, 0, 0, $width, $height, $origWidth, $origHeight);

    // Save the resized image
    if ($imageType == IMAGETYPE_JPEG) {
        imagejpeg($imageResizedNew, $file, $quality);
    } elseif ($imageType == IMAGETYPE_PNG) {
        imagepng($imageResizedNew, $file, 5); // 9 is the highest compression level
    }

    // Free memory
    imagedestroy($imageResized);
    imagedestroy($imageResizedNew);

    return $file;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_comment'])) {
        $name = $_POST['name'];
        $rating = isset($_POST['rating']) ? intval($_POST['rating']) : null;
        $comment = $_POST['comment'];

        if (!validateInput($name)) {
            showError('ФИО');
        } elseif (!validateInput($comment)) {
            showError('Отзыв');
        } else {
            $sqlComment = "INSERT INTO comments (name, rating, message) VALUES ('$name', '$rating', '$comment')";
            
            $res = customSqlQuery($connect, $sqlComment);

            if ($res === TRUE) {
                echo "Отзыв успешно добавлен";
                header("Location: {$_SERVER['PHP_SELF']}");
                exit();
            } else {
                echo "Ошибка при добавлении отзыва: " . $connect->error;
            }
        }
    }

    if (isset($_POST['submit_doctor'])) {
        $doctorName = $_POST['doctor-name'];
        $doctorProfession = $_POST['doctor-prof'];

        $doctorPhoto = null;
     
       if (isset($_FILES['doctor-photo'])) {
          $fileTmpPath = $_FILES['doctor-photo']['tmp_name'];
          if (file_exists($fileTmpPath)) {
            $fileName = $_FILES['doctor-photo']['name'];
            $fileType = $_FILES['doctor-photo']['type'];
            $fileSize = $_FILES['doctor-photo']['size'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
              $allowedExtensions = array('jpg', 'jpeg', 'png');

              if (in_array($fileExtension, $allowedExtensions) && exif_imagetype($fileTmpPath)) {
                  $resizedFile = resizeImage($fileTmpPath, 800, 800, 90); // Resize the image to a maximum of 800x600 pixels
                  if ($resizedFile) {
                     $doctorPhoto = base64_encode(file_get_contents($resizedFile));
                     unlink($resizedFile); // Remove the temporary resized file
                  }
              } else {
                  echo "Неверный формат изображения. Допустимые форматы: JPG, JPEG, PNG.";
                  exit;
              }
          } else {
              echo "Файл не найден.";
              exit;
          }
      }
        

        if (!validateInput($doctorName)) {
            showError('ФИО врача');
        } elseif (!validateInput($doctorProfession)) {
            showError('Специальность врача');
        } else {
            $sqlDoctor = "INSERT INTO doctors (name, profession, photo) VALUES ('$doctorName', '$doctorProfession', '$doctorPhoto')";

            $res = customSqlQuery($connect, $sqlDoctor);

            if ($res === TRUE) {
                echo "Врач успешно добавлен";
                header("Location: {$_SERVER['PHP_SELF']}");
                exit();

            } else {
                echo "Ошибка при добавлении врача: " . $connect->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write to JSON</title>
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <style>
  body {
    background-size: cover;
    background-position-y: 0;
  }

  .container {
    display: flex;
    gap: 50px;
  }

  .error {
    color: red;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="container">
      <div class="form">
        <h3 class="title form-title">Создать отзыв</h3>

        <form method="post">
          <label>
            <input type="text" name="name" class="form-input" placeholder="ФИО*">
          </label>

          <label>
            <input type="number" name="rating" class="form-input" placeholder="Рейтинг">
          </label>

          <textarea class="form-input form-comment" placeholder="Отзыв" name="comment" id="" cols="30"
            rows="5"></textarea>

          <button class="button form-button" name="submit_comment">Отправить отзыв</button>
        </form>

      </div>
      <!-- /.form -->

      <div class="form">
        <h3 class="title form-title">Добавить врача</h3>

        <form method="post" enctype="multipart/form-data">
          <label>
            <input type="text" name="doctor-name" class="form-input" placeholder="ФИО*">
          </label>
          <label>
            <input type="text" name="doctor-prof" class="form-input" placeholder="Специальность*">
          </label>
          <div class="file-drop-area">
            <span class="fake-btn">Добавьте фото врача</span>
            <span class="file-msg">или перетащите сюда</span>
            <input class="file-input" name="doctor-photo" type="file" multiple>
          </div>

          <button class="button form-button" name="submit_doctor">Добавить врача</button>
        </form>

      </div>
      <!-- /.form -->

    </div>


  </div>
  <!-- ./container -->
  <script>
  function valid() {
    let buttons = document.querySelectorAll('.form-button');

    buttons.forEach(button => {
      button.addEventListener('click', function(event) {
        let form = this.closest('form');
        let inputs = form.querySelectorAll('input, textarea');
        let isValid = true;

        inputs.forEach(input => {
          if (input.value.trim() === '') {
            isValid = false;
            let error = document.createElement('p');
            error.classList.add('error');
            error.textContent = 'Заполните поле';
            input.insertAdjacentElement('afterend', error);
          }
        });

        if (!isValid) {
          event.preventDefault();
        }
      });
    });
  }

  valid();


  function formAction() {
    const fileInput = document.querySelector('.file-input')
    const dropArea = document.querySelector('.file-drop-area')

    function addClassToInput() {
      dropArea.classList.add('is-active')

    }

    function removeClassFromInput() {
      dropArea.classList.remove('is-active')

    }

    if (fileInput) {
      fileInput.addEventListener('dragenter', addClassToInput)
      fileInput.addEventListener('focus', addClassToInput)
      fileInput.addEventListener('click', addClassToInput)
      fileInput.addEventListener('dragleave', removeClassFromInput)
      fileInput.addEventListener('blur', removeClassFromInput)
      fileInput.addEventListener('drop', removeClassFromInput)

      fileInput.addEventListener('change', function() {
        console.log(this);
        let filesCount = this.files.length
        let textContainer = this.previousElementSibling

        if (filesCount === 1) {
          let fileName = this.value.split('\\').pop()
          textContainer.textContent = fileName
        } else {
          textContainer.textContent = filesCount + ' файлов (-а) выбрано'
        }
      })
    }

  }

  formAction()
  </script>
</body>

</html>
<!-- <?php
      // include_once $_SERVER['DOCUMENT_ROOT'] . '/system/functions.php';

      // function add_doctor()
      // {
      //   global $connect;

      //   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //     if (isset($_POST['submit_doctor'])) {
      //       $name = $_POST['name'];
      //       $post = $_POST['post'];
      //       $description = $_POST['description'];
      //       $photo = isset($_POST['photo']) ? $_POST['photo'] : null;
      //       $active  = isset($_POST['active']) ? 'yes' : 'no';
      //       $link  = $_POST['doc_link'];

      //       $sqlDoctor = "INSERT INTO doctors (name, post, description, link, photo, active) VALUES (?, ?, ?, ?, ?, ?)";
      //       $stmt = $connect->prepare($sqlDoctor);

      //       if ($stmt) {
      //         $stmt->bind_param("ssssss", $name, $post, $description, $link, $photo, $active);

      //         if ($stmt->execute()) {
      //           echo json_encode(array("success" => true));
      //         } else {
      //           echo json_encode(array("error" => "error 26 Ошибка при обновлении данных в базе данных"));
      //         }

      //         $stmt->close();
      //       } else {
      //         echo json_encode(array("error" => " error 31 Ошибка подготовки запроса"));
      //       }
      //     }
      //   }

      ?> -->
<? function add_doctor()
{

?>
<!-- action="/admin/pages/doctors/settings/send.php" -->
<div class="tabs-content insert">
  <div class="admin-doctor insert">
    <div class="modal-content">

      <h2>Врач</h2>
      <form id="reviewContent" method="POST" enctype="multipart/form-data">

        <label for="photo">
          Фото
          <div class="admin-doctor-file-wrapper">

            <input name="photo" id="photo" type="file">
            <img class="input-file" src="/assets/img/clip.svg" alt="">

          </div>
          <!-- /.admin-doctor-file-wrapper -->

          <?
            $path_to_img = '/assets/img/no-avatar.png'
            ?>

          <img class="admin-doctor__img" src="
            <? echo $path_to_img ?>" alt="">



        </label>

        <label class="active" for="active">
          Активность
          <input id="active" name="active" type="checkbox" checked>
        </label>

        <label for="name">
          Имя
          <input name="name" id="name" type="text">

        </label>

        <input type="hidden" name="doc_link">

        <label for="post">
          Должность
          <input name="post" id="post" type="text">

        </label>
        <label for="description">
          Описание
          <textarea data-id="description-to-convert" name="description" id="description" cols="80" rows="10"></textarea>
          <input type="hidden" name="description">
        </label>
        <input id="id" name="id" type="hidden">
        <div class="admin-modal-wrapper">
          <button type="button" class="button warning exit">Выйти без сохранения</button>
          <button type="submit" name="submit_doctor" class="button save">Сохранить</button>
        </div>
      </form>

    </div>
  </div>
</div>

<?
}
?>
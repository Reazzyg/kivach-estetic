<?php
// Получаем данные из базы данных
$sql = "SELECT name, profession, photo FROM doctors";
$result = customSqlQuery($connect, $sql);
?>
<section class="specialists">
  <h2 class="title">Специалисты клиники</h2>
  <div class="container specialists-container">
    <?php 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $profession = $row['profession'];
            $photoData = $row['photo'];
    ?>
    <figure class="specialists-card">
      <?php echo '<img src="data:image/jpeg;base64,' . $photoData . '" alt="" class="specialists-card__img">'; ?>
      <p class="title specialists-card__name ">
        <?php echo $name; ?>
      </p>
      <p class="text specialists-card__profession ">
        <?php echo $profession; ?>
      </p>
    </figure>
    <!-- /.specialist -->
    <?php
        }
    }
    ?>
  </div>
  <!-- /.container specialists-container -->
</section>
<!-- /.specialists -->
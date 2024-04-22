<?
$parentItemsResult = sqlQuery("SELECT * FROM menu_items_new WHERE parent_id IS NULL");


$parentItems = [];
while ($parentItem = mysqli_fetch_assoc($parentItemsResult)) {
  $parentItems[] = $parentItem;
}
?>

<div class="">
  <!-- обработка табов (nav tabs) происходит по последнему гет параметру ссылки в admin.js tabs() -->
  <nav class="nav tabs">
    <ul class="nav-list">
      <?
      foreach ($parentItems as $parentItem) {
      ?>
      <li class="nav-list__item">

        <a href="/admin/?page=menu&tab=<? echo $parentItem['alias'] ?>" class="nav-list__link menu">
          <? echo $parentItem['name'] ?>
        </a>

      </li>

      <?
      }
      ?>
    </ul>
  </nav>

  <?
  foreach ($parentItems as $parentItem) {
  ?>

  <form data-parent="<? echo $parentItem['id']; ?>"
    class="navigation-button noselect navigation-button-active tabs-content <? echo $parentItem['alias'] ?>">

    <div class="navigation-button-wrapper">

      <p class="navigation-button__name">
        <? echo $parentItem['name']; ?>
      </p>

      <button data-action="save" data-parent="<? echo $parentItem['id']; ?>" class="button" style="display: none;"
        type="button">Сохранить
        изменения</button>

      <button data-action="add" data-parent="<? echo $parentItem['id']; ?>" class="button" type="button">Добавить
        ссылку</button>

      <input type="hidden" name="parent-id" value="<? echo $parentItem['id']; ?>">

    </div>

    <table>
      <thead>
        <tr>
          <th>№</th>
          <th>Название</th>
          <th>Ссылка</th>
          <th>Активность</th>
          <!-- <th>Изменить</th> -->
        </tr>
      </thead>
      <tbody>
        <?

          $subItemsQuery = "SELECT * FROM menu_items_new WHERE parent_id = " . $parentItem['id'];

          $subItemsResult = sqlQuery($subItemsQuery);

          $i = 0;

          while ($subItem = mysqli_fetch_assoc($subItemsResult)) {
          ?>

        <tr class="link" data-id="<? echo $subItem['id'];  ?>">

          <td>
            <? echo $i + 1 ?>
          </td>

          <td>
            <!-- <span data-name="name">
                  <? echo  $subItem['name'] ?>
                </span> -->
            <input type="text" name="name_<? echo $subItem['id'] ?>" class="navigation-list-item__link"
              value="<? echo  $subItem['name'] ?>" />
          </td>

          <td>
            <!-- <span data-name="link">
                  <? echo $subItem['link'] ?>
                </span> -->
            <input type="text" name="link_<? echo $subItem['id'] ?>" value="<? echo $subItem['link'] ?>" />
          </td>

          <td>
            <? $active = '<input data-name="active_toggle" type="checkbox" checked />';
                $inactive = '<input  data-name="active_toggle" type="checkbox"/>';
                echo $subItem['active'] == 'yes' ?  $active : $inactive;
                ?>
            <input type="hidden" name="active_<? echo $subItem['id'] ?>"
              value="<? echo $subItem['active'] == 'yes' ? 'yes' : 'no' ?>">
          </td>

          <!-- <td>
                <a class="change-link">Изменить</a>
              </td> -->

        </tr>

        <?
            $i++;
          }
          ?>

      </tbody>
    </table>

    <!-- </ul> -->
  </form>
  <?
  }
  ?>
</div>

<script>
// Создаем экземпляр класса при загрузке страницы
// document.addEventListener('DOMContentLoaded', () => {
//   const menuFormHandler = new MenuFormHandler();
// });
</script>
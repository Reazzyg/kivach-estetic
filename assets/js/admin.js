function getUrlParam(paramName) {
  var reParam = new RegExp("(?:[?&]|&amp;)" + paramName + "=([^&]+)", "i");

  var match = window.location.search.match(reParam);

  return match && match.length > 1 ? match[1] : "";
}

function insertImg(url) {
  var funcNum = getUrlParam("CKEditorFuncNum");

  console.log(funcNum);

  var fileUrl = url;

  window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
}

function insertPic(url) {
  var f = window.opener.document.getElementById("pics");

  console.log(window.opener);

  $(f).html(
    "<legend>Изображения <span style='cursor:pointer; float:right; color:navy; font-weight:bold;' onClick='var newWindow=window.open(\"/admin/?page=pics&article=2",
    "",
    "Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=550,Height=400\");'>Добавить изображение</span></legend>"
  );

  $(f).append(
    "<div style='cursor:pointer;' id='icon' onClick='if(window.confirm(\"Убрать изображение?\")) $(this).remove();'><input type='hidden' value='" +
      url +
      "' name='icon'><img src='" +
      url +
      "'>"
  );

  window.close();
}

function insertRed(url) {
  var m = window.opener.document.getElementsByTagName("input");

  for (var i = 0; i < m.length; i++) {
    if ($(m[i]).hasClass("cke_dialog_ui_input_text")) {
      f = m[i];

      i = m.length;
    }
  }

  console.log(f);

  $(f).val(url);

  window.close();
}

function save_module() {
  var s = $("#moduleSettings").serialize();

  if ($("#html").length) {
    s = s + CKEDITOR.instances.html.getData();
  }

  s = s.replace(/\\?("|')/g, "\\$1");

  console.log(s);

  s = s.replace(/&nbsp;/g, " ");

  s = s.split("&");

  ss = s[1];

  ss = ss.split("=");

  item_id = ss[1];

  ss = s[2];

  ss = ss.split("=");

  module = ss[1];

  ss = s[3];

  ss = ss.split("=");

  position = ss[1];

  ss = s[4];

  ss = ss.split("=");

  css = ss[1];

  ss = s[0];

  ss = ss.split("=");

  module_id = ss[1];

  console.log(s);

  if (ss[1] == "new") {
    var p = "";

    var del = "";

    for (i = 5; i < s.length; i++) {
      ss = s[i].replace(/'/g, "&#039;");

      ss = ss.split("=");

      if (ss[0] == "html") ss[1] = s[i].replace(/html=/g, "");

      p = p + del + ss[0] + "=" + ss[1];

      del = "|";
    }

    q =
      "INSERT INTO menu_items_modules(item_id, module, position, css, params) VALUES ('" +
      item_id +
      "','" +
      module +
      "','" +
      position +
      "','" +
      css +
      "','" +
      p +
      "')";
  } else {
    q =
      "UPDATE menu_items_modules SET module='" + module + "', position='" + position + "', css='" + css + "', params='";

    del = "";

    p = "";

    for (i = 5; i < s.length; i++) {
      ss = s[i].replace(/'/g, "&#039;");

      ss = ss.split("=");

      if (ss[0] == "html") ss[1] = s[i].replace(/html=/g, "");

      p = p + del + ss[0] + "=" + ss[1];

      del = "|";
    }

    q = q + p + "'";

    q = q + " WHERE id=" + module_id;
  }

  console.log("q=" + q);

  loadpage(".modulesList", "../admin/pages/menu/modules.php", q, "item=" + item_id);

  location.reload();

  return false;
}

function template_preview_img() {
  if ($(".template-preview img").hasClass("big-preview")) {
    $(".template-preview img").removeClass("big-preview");
  } else {
    $(".template-preview img").addClass("big-preview");
  }
}

function template_preview() {
  var template = $("#inputTemplate").val();

  template = template.split(".");

  $(".template-preview").html(
    "<img onClick='template_preview_img();' src='/style/templates/preview/" + template[0] + ".png'>"
  );
}

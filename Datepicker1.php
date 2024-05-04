<?php 
$field_id = "date_picker_fld";

require_once("ui-type.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>jQuery UI Datepicker</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/<?= $ui_type ?>/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

<script>
var datepicker_option = {
  dateFormat: 'yy/mm/dd',
  dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
  monthNames:  ['１月', '２月', '３月', '４月', '５月', '６月', '７月', '８月', '９月', '１０月', '１１月', '１２月'],
  showMonthAfterYear: true,
  yearSuffix: '年',
  changeYear: true,
  showAnim: 'fadeIn'
}
  
$(function(){

  $("#<?= $field_id ?>").datepicker( datepicker_option );

});
  
</script>
</head>
<body>
<h1 class="alert alert-primary"><a href=".">yareRange なし ( 前10年・後10年の選択肢 )</a></h1>
<div id="main" class="m-4">
  <input type="text" id="<?= $field_id ?>" name="<?= $field_id ?>">
</div>

</body>
</html>
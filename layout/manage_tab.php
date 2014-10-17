<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
$meal_query = "SELECT * FROM `meal_info`;";
$meal_result = db_query($connect, $meal_query);
?>
<div><h2>商品管理</h2></div>
<table class="table table-striped">
	<tr>
		<th>編號</th>
		<th>名稱</th>
		<th>價格</th>
		<th>內容</th>
		<th>上架時間</th>
		<th>操作</th>
	</tr>
	<?php
		while($meal_row = db_fetch_array($meal_result)) {
			echo "<tr>
					<td>$meal_row[0]</td>
					<td>$meal_row[1]</td>
					<td>$meal_row[2]</td>
					<td><a href='#' class='thumbnail'>
      <img  class='thumbnails' src='$meal_row[4]' alt=''>
    </a></td>
					<td>$meal_row[5]</td>
					<td><a href='edit_meal_form.php?meal_id=$meal_row[0]&meal_name=$meal_row[1]&meal_price=$meal_row[2]&meal_content=$meal_row[3]&meal_time=$meal_row[5]'>編輯</a> ";
			echo 	"<a href='delete_meal.php?meal_id=$meal_row[0]'>刪除</a></td>
				</tr>";
		}
	?>
</table>

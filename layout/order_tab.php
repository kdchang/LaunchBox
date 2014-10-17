<?php
include_once 'db_function.php';
include_once 'helpers/helper.php';
$deal_query = "SELECT * FROM `order_info`;";
$deal_result = db_query($connect, $deal_query);
?>
<div><h2>訂單資訊</h2></div>
<table class="table table-striped">
	<tr>
		<th>編號</th>
		<th>商品</th>
		<th>訂購人</th>
		<th>電話</th>
		<th>地址</th>
		<th>時間</th>
		<th>數量</th>
		<th>總價</th>
		<th>操作</th>
	</tr>
	<?php
		while($deal_row = db_fetch_array($deal_result)) {
			echo "<tr>
					<td>$deal_row[0]</td>
					<td>$deal_row[1]</td>
					<td>$deal_row[2]</td>
					<td>$deal_row[3]</td>
					<td>$deal_row[4]</td>
					<td>$deal_row[5]</td>
					<td>$deal_row[6]</td>
					<td>$deal_row[7]</td>
					<td><a href='edit_order_form.php?order_id=$deal_row[0]&order_username=$deal_row[2]&order_phone=$deal_row[3]&order_address=$deal_row[4]&order_count=$deal_row[6]&order_total_price=$deal_row[7]'>編輯</a> ";
			echo 	"<a href='delete_order.php?order_id=$deal_row[0]'>刪除</a></td>
				</tr>";
		}
	?>
</table>
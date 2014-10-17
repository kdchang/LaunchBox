<?php
include_once 'helpers/helper.php';
include_once 'db_function.php';
session_start();
$show_query = "SELECT * FROM `meal_info` ORDER BY meal_time DESC LIMIT 1;";
$show_result = db_query($connect, $show_query);
if($show_result) {
    $show_result_row = db_fetch_array($show_result);
}
?>
<?php include_once 'layout/header.php'; ?>
<?php 
    if(@$_SESSION['order_submit_msg']) {
        echo flash_message('order_submit_msg');
        unset($_SESSION['order_submit_msg']);
    }
?>
    <div>
        <form action="make_deal.php" method="post">
            <div>
                <h1><?php echo $show_result_row['meal_name'];?></h1>
            </div>
            <hr>
            <div>
                <img class="meal-img" id="meal-img" src="<?php echo $show_result_row['meal_image'];?>" alt="">
            </div>
            <br>
            <div>
                <h2>內容介紹：<?php echo $show_result_row['meal_content'];?></h2>
                <h3>價格(每份)：NT <?php echo $show_result_row['meal_price'];?></h3>
            </div>
            <br>
            <div>
                <legend>訂購人</legend>
                <input type="text" name="order-username" placeholder="訂購人姓名" required>
            </div>
            <br>
            <div>
                <legend>聯絡電話</legend>
                <input type="text" name="order-phone" placeholder="聯絡電話" required>
            </div>
            <br>
            <div>
                <legend>配送地址</legend>
                <input type="text" name="order-address" placeholder="配送地址" required>
            </div>
            <br>
            <div>
                <legend>訂購數量</legend>
                <select name="order-count" id="order-count">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="5">6</option>
                    <option value="5">7</option>
                    <option value="5">8</option>
                    <option value="5">9</option>
                </select>
            </div>
            <input type="hidden" name="meal-id" value="<?php echo $show_result_row['meal_id'];?>">
            <input type="hidden" name="meal-price" value="<?php echo $show_result_row['meal_price'];?>">
            <hr>
            <div>
                <button class="btn btn-warning btn-lg btn-block" type="submit">送出訂單</button>
            </div>
        </form>
    </div>

<?php include_once 'layout/footer.php'; ?>

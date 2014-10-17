<div>
    <h2>商品上架</h2>
</div>
<br>
<form action="upload_meal.php" method="post" enctype="multipart/form-data">
    <div>
        <legend>商品名稱：</legend>
        <input type="text" name="meal-name" placeholder="請輸入商品名稱" required>
    </div>
    <br>
    <div>
        <legend>商品單價：</legend>
        <input type="text" name="meal-price" placeholder="請輸入商品單價" required>
    </div>
    <br>
    <div>
        <legend>商品說明：</legend>
        <textarea name="meal-content" id="" cols="40" rows="10" placeholder="請輸入餐點內容和成分" required></textarea>
    </div>
    <br>
    <div>
        <legend>商品圖片：</legend>
        <input type="file" name="meal-image" required>
    </div>
    <hr>
    <div></div>
    <div><input class="btn btn-lg btn-success btn-block" type="submit" value="確認上架"></div>
</form>
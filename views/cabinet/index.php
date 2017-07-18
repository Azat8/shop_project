<?php include_once (ROOT.'/views/layouts/header.php')?>
<?php include_once (ROOT.'/models/Form.php')?>


    <?php echo '<h2 style="text-align: center">Cabinet User</h2>'?>
    <br/>


<form enctype="multipart/form-data" method="post" action="<?=BASE_URL?>cabinet/userAvatar">
    <input type="file" name="load">
    <input type="submit" name="send-request" value="загрузить">
</form>
<img src="" alt="">
<?php include_once (ROOT.'/views/layouts/footer.php')?>

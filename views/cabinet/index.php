<?php include_once (ROOT.'/views/layouts/header.php')?>


    <?php echo '<h2 style="text-align: center">Cabinet User</h2>'?>
    <br/>


<form enctype="multipart/form-data" method="post">
    <input type="file" name="load">
    <input type="submit" name="send-request" value="загрузить">
</form>
<?php include_once (ROOT.'/views/layouts/footer.php')?>

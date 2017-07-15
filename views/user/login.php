<?php include_once (ROOT.'/views/layouts/header.php')?>

<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" value="" placeholder="Email Address" />
                        <input type="password" name="password" value="" placeholder="Password" />
                        <button type="submit" name="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<?php include_once (ROOT.'/views/layouts/footer.php')?>

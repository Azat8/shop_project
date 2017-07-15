<?php include_once (ROOT.'/views/layouts/header.php');?>

    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <?php if ($result): ?>
                    <p style="text-align: center">Welcome to site</p>
                <?php else: ?>

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach($errors as $error): ?>
                            <il> - <?php echo $error.'<br/>'; ?></il>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
                            <input type="email" name="email" placeholder="Email Address" value="<?php echo $email;?>">
                            <input type="password" name="password" placeholder="Password" value="<?php echo $password;?>">
                            <button type="submit"  name="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
                <?php endif;?>
            </div>
        </div>
    </section>

<?php include_once (ROOT.'/views/layouts/footer.php')?>
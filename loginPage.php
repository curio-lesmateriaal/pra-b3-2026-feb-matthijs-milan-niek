<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once 'components/head.php'; ?>
</head>

<body>
    
    <div class="container">
        <!-- <?php require_once "components/header.php" ?>  -->

        <div class="loginImgBox">
            <img  class="loginImg" src="img/devLand.png" alt="">
        </div>
        <div class="form">
            <form action="<?php echo $base_url;?>/backend/loginController.php" method="POST" >

                <div class="formGroup">
                    <label >Username:</label>
                    <input type="text">
                </div>

                <div class="formGroup">
                    <label for="">Password:</label>
                    <input type="pwd">
                </div>

                <div class="formSubmit">
                    <input type="submit" value="Inloggen">
                </div>
            </form>
        </div>

        <?php require_once "components/footer.php" ?>

    </div>
</body>

</html>

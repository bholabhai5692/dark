<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/user.php';
if (empty($_POST['user'])) {
    $_POST['user'] = $_GET['user'];
}
$user = new User(0, $_POST['user'], false);
if (!(!empty($_GET['user']) && !empty($_GET['recoverpass']))) {
    $obj = new stdClass();
    header('Content-Type: application/json');
    if($user->getStatus() !== 'a'){
        $obj->error = __("The user is not active");
        die(json_encode($obj));
    }
    if (!empty($user->getEmail())) {
        $recoverPass = $user->setRecoverPass();
        if (empty($_POST['captcha'])) {
            $obj->error = __("Captcha is empty");
        } else {
            if ($user->save()) {
                require_once 'captcha.php';
                $valid = Captcha::validation($_POST['captcha']);
                if ($valid) {
                    //Create a new PHPMailer instance
                    $mail = new \PHPMailer\PHPMailer\PHPMailer();
                    setSiteSendMessage($mail);
                    //Set who the message is to be sent from
                    $mail->setFrom($config->getContactEmail(), $config->getWebSiteTitle());
                    //Set who the message is to be sent to
                    $mail->addAddress($user->getEmail());
                    //Set the subject line
                    $mail->Subject = 'Recover Pass from ' . $config->getWebSiteTitle();

                    $msg = __("You asked for a recover link, click on the provided link") . " <a href='{$global['webSiteRootURL']}recoverPass?user={$_POST['user']}&recoverpass={$recoverPass}'>" . __("Reset password") . "</a>";

                    $mail->msgHTML($msg);

                    //send the message, check for errors
                    if (!$mail->send()) {
                        $obj->error = __("Message could not be sent") . " " . $mail->ErrorInfo;
                    } else {
                        $obj->success = __("Message sent");
                    }
                } else {
                    $obj->error = __("Your code is not valid");
                }
            } else {
                $obj->error = __("Recover password could not be saved!");
            }
        }
    } else {
        $obj->error = __("You do not have an e-mail");
    }
    die(json_encode($obj));
} else {
    ?>
    <!DOCTYPE html>
    <html lang="<?php echo getLanguage(); ?>">
        <head>
            <?php echo getHTMLTitle(__("Recover Password")); ?>
            <?php include $global['systemRootPath'] . 'view/include/head.php'; ?>
        </head>

        <body class="<?php echo $global['bodyClass']; ?>">
            <?php include $global['systemRootPath'] . 'view/include/navbar.php'; ?>

            <div class="container">
                <?php
                if ($user->getRecoverPass() !== $_GET['recoverpass']) {
                    ?>
                    <div class="alert alert-danger"><?php echo __("The recover pass does not match!"); ?></div>
                    <?php
                } else {
                    ?>
                    <form class="well form-horizontal" action=" " method="post"  id="recoverPassForm">
                        <fieldset>

                            <!-- Form Name -->
                            <legend><?php echo __("Recover password!"); ?></legend>

                            <div class="form-group">
                                <label class="col-md-4 control-label"><?php echo __("User"); ?></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="user" class="form-control"  type="text" value="<?php echo $user->getUser(); ?>" readonly >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"><?php echo __("Recover Password"); ?></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input name="recoverPassword" class="form-control"  type="text" value="<?php echo $user->getRecoverPass(); ?>" readonly >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"><?php echo __("New Password"); ?></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <?php getInputPassword("newPassword", 'class="form-control" required="required" autocomplete="off"', __("New Password")); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"><?php echo __("Confirm New Password"); ?></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <?php getInputPassword("newPasswordConfirm", 'class="form-control" required="required" autocomplete="off"', __("Confirm New Password")); ?>
                                </div>
                            </div>


                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary" ><?php echo __("Save"); ?> <span class="glyphicon glyphicon-save"></span></button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                    <?php }
                ?>
            </div>

        </div><!--/.container-->

        <?php include $global['systemRootPath'] . 'view/include/footer.php'; ?>

        <script>
            $(document).ready(function () {
                $('#recoverPassForm').submit(function (evt) {
                    evt.preventDefault();
                    modal.showPleaseWait();
                    $.ajax({
                        url: '<?php echo $global['webSiteRootURL']; ?>objects/userRecoverPassSave.json.php',
                        data: $('#recoverPassForm').serializeArray(),
                        type: 'post',
                        success: function (response) {
                            modal.hidePleaseWait();
                            if (!response.error) {
                                avideoAlert("<?php echo __("Congratulations!"); ?>", "<?php echo __("Your new password has been set!"); ?>", "success");
                            } else {
                                avideoAlert("<?php echo __("Your new password could not be set!"); ?>", response.error, "error");
                            }
                        }
                    });
                    return false;
                });

            });

        </script>
    </body>
    </html>

    <?php
}

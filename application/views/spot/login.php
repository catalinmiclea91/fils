<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Welcome to FILS admin</h2>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
    <div class="well span5 center login-box">
        <div class="alert alert-info">
            Please login with your Username and Password.
        </div>
        <form id="admin-login" class="form-horizontal" action="/admin-login" method="post">
            <?php if ( validation_errors() != '' || isset($login_error)):   ?>
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?= validation_errors();?>
                <?php if(isset($login_error)) echo $login_error;?>
            </div>
            <?php endif; ?>
            <fieldset>
                <div class="input-prepend" title="Username" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" placeholder="Username..." />
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend" title="Password" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="Password..." />
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend">
                    <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
                </div>
                <div class="clearfix"></div>

                <p class="center span5">
                <button onclick="admin_submit(); return false;" class="btn btn-primary">Login</button>
                <!--
                    <button type="submit" class="btn btn-primary">Login</button>
                -->
                </p>
            </fieldset>
        </form>
    </div><!--/span-->
</div><!--/row-->
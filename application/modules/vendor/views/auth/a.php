<button class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal"  >Login</button>
<button class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Register</button>
        <div class="input-group pb-modalreglog-input-group">
               <!--  <button class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal">Login</button>
                <button class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Register</button> -->
                <div class="auth-page">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4"> 
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Login form</h4>
                        </div>
                        <div class="modal-body">
                           <!--  <form>  --> 
                           <form class="form-horizontal templatemo-signin-form" role="form" action="" method="POST">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="email" class="form-control" name="u_email" id="email" placeholder="<?= lang('email') ?>">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="password" class="form-control" ame="u_password"  id="pws" placeholder="<?= lang('password') ?>">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <!-- <button type="button" class="btn btn-primary">Log in</button> -->
                              <input type="submit" name="login" value="<?= lang('u_login') ?>" class="btn btn-primary">
                              </form>
                        </div>
                    </div></div></div></div>
                    </div>
                </div>
            </div>

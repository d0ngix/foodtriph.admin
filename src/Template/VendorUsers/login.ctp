<div class="login-box-body">
    <p class="login-box-msg">Sign in to manage your store</p>

    <?= $this->Form->create($vendorUser,array('class'=>"")) ?>
    
    <form action="vendor-users/login" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">        
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?= $this->Form->button(__('Sign In'),['type'=>'submit', 'class'=>'btn btn-primary btn-block btn-flat pull-right']) ?>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">I forgot my password</a><br>	
    <?= $this->Form->end() ?>
</div>
<div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('/account/create') ?>" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Please enter a new username">
             
          </div> 
 
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Please enter a new password">
             
          </div>
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Sign up</button>
          </div>
        </form>
      </div>
 
    </div>
  
</div>
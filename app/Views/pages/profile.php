<div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
    
    <div class="row">
      <div class="col-md-9">
           <a href="/history"><button class="btn btn-success">Transaction history</button></a>
           
        <form action="<?php echo base_url('/account/logout') ?>" method="post" accept-charset="utf-8">
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Logout</button>
          </div>
        </form>
           <a href="/unregister"><button class="btn btn-success">Delete account</button></a>
      </div>
 
    </div>
  
</div>
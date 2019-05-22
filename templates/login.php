
<?php echo $message; ?>

<form name="frmLogin" action="authenticate.php" method="post">
  <h1 style='text-align:center; margin-top:4%'>Login to the awesome student management system</h1>
  <div  class='col-md-2 col-md-offset-5 ' style='margin: auto;margin-top:5%;   border-radius: 25px;
  background: lightgrey;
  padding: 20px; '>
    <div class="col">
      <input type="text" class="form-control" placeholder="ID" name="txtid">
    </div>
    <div class="col">
      <div style="text-align:center">-</div>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Password" name="txtpwd">
    </div>
    <div class="col" style="margin:2%;">
    <button type="submit"  class="btn btn-primary">Sign in</button>
  </div>
  </div>
</form>

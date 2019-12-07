<?php

include("header2.php");

  ?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Get your Lab Reports</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Lab Reference Number </label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Passcode (Printed on bill)</label>
              </div><button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Download report</button>
              <hr class="my-4"> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>




  <?php
include("footer2.php");
  ?>   
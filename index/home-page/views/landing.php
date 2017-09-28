<?php
  $title = "Welcome Back";
  $onscreen_title = "Login";
  $content = "<div class='jumbotron'>
                <div class='row text-center'>
                  <h2>Please login or create an account</h2>
                </div>
                <hr />
                <div class='row'>
                <form class='form-horizontal'>
                  <div class='form-group'>
                    <label class='control-label col-sm-2' for='email'>Email:</label>
                    <div class='col-sm-10'>
                      <input type='email' class='form-control' id='email' placeholder='Enter email'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='control-label col-sm-2' for='pwd'>Password:</label>
                    <div class='col-sm-10'>
                      <input type='password' class='form-control' id='pwd' placeholder='Enter password'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <div class='col-sm-offset-2 col-sm-10'>
                      <div class='checkbox'>
                        <label><input type='checkbox'> Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class='form-group'>
                    <div class='col-sm-offset-2 col-sm-10'>
                      <button type='submit' class='btn btn-default'>Submit</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              ";

  require "home-page/statics/layout.php";
 ?>

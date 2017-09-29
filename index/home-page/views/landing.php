<?php
  $title = "Welcome Back";
  $onscreen_title = "Login";
  $navbar_items = "";
  $content = "<div class='jumbotron'>
                <div class='row text-center'>
                  <h2>Please login or create an account</h2>
                </div>
                <hr />

                <div class='row text-center' id='choiceButtons'>
                  <button type='button' class='btn btn-success btn-lg' onclick='loginForm()'>Login</button>
                  <button type='button' class='btn btn-info btn-lg' onclick='createAccountForm()'>Create Account</button>
                </div>

                <div class='row' id='login' hidden>
                  <div class='col-md-10'>
                    <form class='form-horizontal' action='home/login' method='post' id='loginForm'>
                      <div class='form-group'>
                        <label class='control-label col-sm-2' for='alias'>Alias:</label>
                        <div class='col-sm-10'>
                          <input type='text' class='form-control login' name='alias' id='alias' placeholder='Enter Alias'>
                        </div>
                      </div>
                      <div class='form-group'>
                        <label class='control-label col-sm-2' for='pwd'>Password:</label>
                        <div class='col-sm-10'>
                          <input type='password' class='form-control login' name='pass' id='pwd' placeholder='Enter password'>
                        </div>
                      </div>
                      <div class='form-group'>
                        <div class='col-sm-offset-2 col-sm-10'>
                          <button type='submit' class='btn btn-default' onclick='return loginValidate()'>Login</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>

                  <div class='row' id='createAccount' hidden>
                    <div class='col-md-10'>
                      <form class='form-horizontal' action='home/create_account' method='post' id='createAccountForm'>
                        <div class='form-group'>
                          <label class='control-label col-sm-2' for='alias'>Alias:</label>
                          <div class='col-sm-10'>
                            <input type='text' class='form-control create_account' name='alias' id='alias' placeholder='Enter alias'>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label class='control-label col-sm-2' for='pwd'>Password:</label>
                          <div class='col-sm-10'>
                            <input type='password' class='form-control create_account' name='pass' id='pwd' placeholder='Enter password'>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label class='control-label col-sm-2' for='f_name'>First Name:</label>
                          <div class='col-sm-10'>
                            <input type='text' class='form-control create_account' name='f_name' id='f_name' placeholder='Enter First Name'>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label class='control-label col-sm-2' for='m_name'>Middle Name:</label>
                          <div class='col-sm-10'>
                            <input type='text' class='form-control create_account' name='m_name' id='m_name' placeholder='Enter Middle Name'>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label class='control-label col-sm-2' for='l_name'>Last Name:</label>
                          <div class='col-sm-10'>
                            <input type='text' class='form-control create_account' name='l_name' id='l_name' placeholder='Enter Last Name'>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label class='control-label col-sm-2' for='email'>Email:</label>
                          <div class='col-sm-10'>
                            <input type='email' class='form-control create_account' name='email' id='email' placeholder='Enter Email'>
                          </div>
                        </div>
                        <div class='form-group'>
                          <div class='col-sm-offset-2 col-sm-10'>
                            <button type='submit' class='btn btn-default' onclick='return createAccountValidate()'>Create Account</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    </div>

                </div>
              </div>
              ";

  require "home-page/statics/layout.php";
 ?>

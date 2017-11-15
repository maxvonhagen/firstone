<ul id="login-dp" class="dropdown-menu">
  <li>
     <div class="row">
        <div class="col-md-12">
          Login via
          <div class="social-buttons">
            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
          </div>
                          or
                          <div id="_LOGIN_">

                          </div>
           <div class="form" role="form" id="login-nav">
              <div class="form-group">
                 <label class="sr-only" for="exampleInputEmail2">Email/User</label>
                 <input type="email" class="form-control" id="name" placeholder="Email address" required>
              </div>
              <div class="form-group">
                 <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                 <input type="password" class="form-control" id="pass" placeholder="Password" required>
                                       <div class="help-block text-right"><a href="">Forget the password ?</a></div>
              </div>
              <div class="form-group">
                 <input type="button" onclick="goLogin()" class="btn btn-primary btn-block"value="Enviar">
              </div>
              <div class="checkbox">
                 <label>
                 <input type="checkbox"> keep me logged-in
                 </label>
              </div>
           </div>
        </div>
        <div class="bottom text-center">
     <a href="?c=index&m=Registrar"><b>Registrarse</b></a>
        </div>
     </div>
  </li>
</ul>

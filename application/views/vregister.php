<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1"> 
<div class="vd_body">
<!-- Header Start -->

<!-- Header Ends --> 
<div class="content">
  <div class="container"> 
    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper" >
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_register-page">
              <div class="heading clearfix">
                <div class="logo">
                  <a href="<?php echo base_url(); ?>"><h2 class="mgbt-xs-5">StartOwl</h2></a>
                </div>
                <h4 class="text-center font-semibold vd_grey">REGISTRO DE USUARIO</h4>
              </div>
              <div class="panel widget">
                <div class="panel-body">

                <?php if($this->session->flashdata("error")):?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap! </strong><?php echo $this->session->flashdata("error"); ?></div>
                <?php endif; ?>

<!--                  <div id="register-success" class="alert alert-success" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Registration confirmation has been sent to your email </div>
                  <div id="register-passerror" class="alert alert-danger" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Your password and Confirm password are not same </div>-->
                  <form class="form-horizontal"  action="<?php echo base_url(); ?>cnewuser/register" method="post" role="form" id="register-form">
                  
                  <div class="alert alert-warning vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span>Verifique confirmacion de contraseña </div>                    
                  <div class="alert alert-success vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span>Hemos enviado una confirmacion de registro a tu correo </div>                  
                    <p><span class="vd_red">*</span> Campos obligatorios.</p>
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Nombre <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="first-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="Nombres" class="required" required name="nombre" id="firstname">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Apellido <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="last-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="Apellidos" class="required" required name="apellido" id="lastname">
                        </div>
                      </div>
                    </div>
                    <!-- <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Compañia <span class="vd_red"></span></label>
                        </div>
                        <div class="vd_input-wrapper" id="company-input-wrapper"> <span class="menu-icon"> <i class="fa fa-briefcase"></i> </span>
                          <input type="text" placeholder="Compañia (Opcional)" name="company" id="company">
                        </div>
                      </div>
                    </div> -->
                    <!-- <div class="form-group ">
                      <div class="col-md-3">
                        <div class="label-wrapper">
                          <label class="control-label">Telefono <span class="vd_red"></span></label>
                        </div>
                        <div class="vd_input-wrapper" id="country-code-input-wrapper"> <span class="menu-icon"> <i class="fa fa-phone"></i> </span>
                          <input type="tel" pattern="[0-9]" placeholder="Codigo"  name="telefono" id="tel">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="label-wrapper">
                          <label class="control-label">&nbsp;</label>
                        </div>
                        <div class="vd_input-wrapper no-icon" id="phone-input-wrapper">
                          <input placeholder="Numero Telefónico" name="phone" id="phone">
                        </div>
                      </div>
                    </div> -->
                    <!-- <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Web</label>
                        </div>
                        <div class="vd_input-wrapper" id="website-input-wrapper"> <span class="menu-icon"> <i class="fa fa-globe"></i> </span>
                          <input type="text" placeholder="Página Web, Blog." name="website" id="website">
                        </div>
                      </div>
                    </div> -->
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Correo <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="email" placeholder="correo" class="required" required  name="email" id="email">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Pais</label>
                        </div>
                        <div class="vd_input-wrapper">
                        <select name="cod_pais" class="vd_input-wrapper">
                          <option value="<?php echo $usuario->cod_pais; ?>"><?php echo $usuario->nom_pais; ?></option>
                        <?php foreach($paises as $pais):?>
                          <option value="<?php echo $pais->cod_pais; ?>"><?php echo $pais->nom_pais; ?></option>
                        <?php endforeach; ?>
                        </select>
                        </div> 
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-4">
                        <div class="label-wrapper">
                          <label class="control-label">Username<span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="username-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="usuario" class="required" required  name="username" id="username">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="label-wrapper">
                          <label class="control-label">Contraseña <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" data-minlength="6" class="form-control required" name="password" id="inputPassword" placeholder="contraseña" required>
                        </div>
                        <div class="help-block">Minimo 6 caracteres</div>
                      </div>
                      <div class="col-md-4">
                        <div class="label-wrapper">
                          <label class="control-label">Confirmar contraseña <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper"><span class="menu-icon"> <i class="fa fa-lock"></i> </span>                          
                        <input type="password" class="form-control required" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, No coinciden" placeholder="confirmar" required>
                        </div>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group col-sm-6">
                      </div>
                    </div>
                    <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Este Campo es necesario. </div>
                    <div class="form-group">
                      <div class="col-md-12 mgbt-xs-10 mgtp-20">
                        <!-- <div class="vd_checkbox">
                          <input type="checkbox" id="checkbox-1" value="1">
                          <label for="checkbox-1"> Enviarme notificaciones de actualizaciones</label>
                        </div> -->
                        <div class="vd_checkbox">
                          <input type="checkbox" id="checkbox-2" value="1" required name="checkbox-2">
                          <label for="checkbox-2"> Estoy de acuerdo con los <a href="#">terminos de servicio</a></label>
                        </div>
                      </div>
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-register" name="submit-register">Registrar Cuenta</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
              <div class="register-panel text-center font-semibold"> Ya tienes una cuenta? <br/>
                <a href="<?php echo base_url(); ?>cloreg/login">INGRESA<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
            </div>
            <!-- vd_login-page --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->
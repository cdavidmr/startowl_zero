    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>cprofile/profile">Perfíl de Usuario</a> </li>
                <li class="active">Editar perfíl de usuario</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1>Actialización de Información</h1>
              <small class="subtitle"></small> </div>
          </div>
          <!-- MENSAJES DEL SISTEMA -->
                  <?php if($this->session->flashdata("error")):?>
                  <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> <?php echo $this->session->flashdata("error");?> </div>
                  <?php endif; ?> 

                  <?php if($this->session->flashdata("right")):?>
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong><?php echo $this->session->flashdata("registrado"); ?></strong> </div>              
                 <?php endif; ?>
                 <!-- END MENSAJES -->

          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title"> </div>
                  <form class="form-horizontal"  role="form" action="ceditprofile/update" method="post" enctype="multipart/form-data">
                    <div  class="panel-body">
                      <h2 class="mgbt-xs-20"><span class="font-semibold" id="apellido"><?php echo $usuario->apell_usuario; ?></span><span>, </span><span class="font-semibold" id="nombre"> <?php echo $usuario->nom_usuario; ?> </span><span>.</span></h2>
                      <br/>
                      <div class="row">
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="<?php echo $usuario->imagen_usuario; ?>"> </div>
                              <div class="form-img-action text-center mgbt-xs-20"> <input type="file" name="img_profile" accept="image/*" value="Subir foto"></div>
                              <br/>
                              <div>
                                <table class="table table-striped table-hover">
                                  <tbody>
                                    <tr>
                                      <td style="width:60%;">Estado</td>
                                      <td><span class="label label-success">En linea</span></td>
                                    </tr>
                                    <tr>
                                      <td>Reputación</td>
                                      <td>5<i class="fa fa-star vd_yellow fa-fw"></i></td>
                                    </tr>
                                    <tr>
                                      <td>Miembro desde</td>
                                      <td> <?php echo $usuario->fecha_registro; ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">Configuracón de la cuenta</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="email"  placeholder="<?php echo $usuario->email_usuario; ?>" value="<?php echo $usuario->email_usuario; ?>">
                                </div>
                                <!-- col-xs-12 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Nombre de Usuario</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  placeholder="<?php echo $usuario->username_usuario; ?>" values="<?php echo $usuario->username_usuario; ?>">
                                </div>
                                <!-- col-xs-9 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                  
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Contraseña</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="password" class="width-40"  placeholder="contraseña">
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Confirmación de contraseña</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="password" class="width-40"  placeholder="confirmación de contraseña">
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <hr />
                          <h3 class="mgbt-xs-15">Configuración de perfil</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Nombre</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  placeholder="<?php echo $usuario->nom_usuario; ?>" value="<?php echo $usuario->nom_usuario; ?>">
                                </div>
                                <!-- col-xs-9 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Apellido</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" placeholder="<?php echo $usuario->apell_usuario; ?>" value="<?php echo $usuario->apell_usuario; ?>">
                                </div>
                                <!-- col-xs-9 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-lock fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <!-- <div class="form-group">
                            <label class="col-sm-3 control-label">Género</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <span class="vd_radio radio-info">
                                    <input type="radio" checked="" value="option3" id="optionsRadios3" name="masculino">
                                    <label for="optionsRadios3"> Masculino </label>
                                  </span>
                                  <span class="vd_radio  radio-danger" > 
                                    
                                    <input type="radio" value="option4" id="optionsRadios4" name="femenino">
                                    <label for="optionsRadios4"> Femenino </label>
                                  </span> 
                                    
                                  
                                </div> -->
                                <!-- col-xs-9 -->
                                <!-- <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-lock fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div> -->
                                  <!-- btn-action col-sm-10 --> 
                                <!-- </div> -->
                              <!-- </div> -->
                              <!-- row --> 
                            <!-- </div> -->
                            <!-- col-sm-10 --> 
                          <!-- </div> -->
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Fecha de Nacimiento</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="datepicker-normal" class="width-40" placeholder="<?php echo $usuario->fnacimiento_usuario; ?>" value="<?php echo $usuario->fnacimiento_usuario; ?>">
                                </div>
                                <!-- col-xs-12 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">País</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40">
                                    <option><?php echo $usuario->nom_pais; ?></option>
                                    <?php foreach($paises as $pais):?>
                                    <option value="<?php echo $pais->cod_pais; ?>"><?php echo $pais->nom_pais; ?></option>
                                    <?endforeach; ?>
                                  </select>
                                </div>
                                <!-- col-xs-9 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <!-- <div class="form-group">
                            <label class="col-sm-3 control-label">Ocupación</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0"> -->
                                <!-- <div class="col-xs-9">
                                  <select class="width-40">
                                    <option>CEO</option>
                                    <option>Director</option>
                                    <option>Administrador</option>
                                    <option>Staff</option>
                                    <option>Trabajo de Oficina</option>
                                  </select>
                                </div> -->
                                <!-- col-xs-12 -->
                                <!-- <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div> -->
                                  <!-- btn-action col-sm-10 --> 
                                <!-- </div>
                              </div> -->
                              <!-- row --> 
                            <!-- </div> -->
                            <!-- col-sm-10 --> 
                          <!-- </div> -->
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Sobre mi</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <textarea rows="3" placeholder="Breve descripción sobre mi..."><?php echo $usuario->descripcion_usuario; ?></textarea>
                                </div>
                                <!-- col-xs-12 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <hr/>
                          <h3 class="mgbt-xs-15">Configuración de contacto</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Teléfono</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  placeholder="<?php echo $usuario->tel_usuario; ?>" value="<?php echo $usuario->tel_usuario; ?>">
                                </div>
                                <!-- col-xs-12 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Web</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  placeholder="sitios web">
                                </div>
                                <!-- col-xs-9 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Facebook</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  placeholder="facebook">
                                </div>
                                <!-- col-xs-9 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Twitter</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" placeholder="twitter">
                                </div>
                                <!-- col-xs-9 -->
                                <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Público</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Sócios</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Solo yo</a></li>
                                    </ul>
                                  </div>
                                  <!-- btn-action col-sm-10 --> 
                                </div>
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group --> 
                          
                        </div>
                        <!-- col-sm-12 --> 
                      </div>
                      <!-- row --> 
                      
                    </div>
                    <!-- panel-body -->
                    <div class="pd-20 center-block">
                      <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Actualizar</button>
                    </div>
                  </form>
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-sm-12--> 
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
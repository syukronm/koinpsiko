<?php
/* Smarty version 4.0.0, created on 2022-06-21 23:03:24
  from 'C:\xampp\htdocs\koinpsiko\4a801fc3\templates\gapas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62b2321c96dfa0_91062869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51762bd770dd93b641ef5eb4902794179121ba62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koinpsiko\\4a801fc3\\templates\\gapas.tpl',
      1 => 1652949338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b2321c96dfa0_91062869 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrapper">
<section class="content">
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="login-logo">
        <a href="../../index2.html"><b>Ganti </b>Password</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Silahkan dilengkapi data berikut</p>

          <form action="gapas.php?Roiy97YthR=gapaskuy" method="post">
            <div class="input-group mb-3">
                <input type="password" name="pass_lama" class="form-control" placeholder="Password lama..." required="">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="pass_baru" class="form-control" placeholder="Password baru..." required="">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="c_pass_baru" class="form-control" placeholder="Konfirmasi password baru..." required="">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              
              <!-- /.col -->
              <div class="col-4">
                  <input type="submit" class="btn btn-primary btn-block" value="Ganti">
              </div>
              <!-- /.col -->
            </div>
          </form>
        <!-- /.login-card-body -->
      </div>
    </div>
    <div class="col-4"></div>
</div>
</section>
</div><?php }
}

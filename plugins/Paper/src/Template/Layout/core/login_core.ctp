<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

use Cake\Core\Configure;
$cakeDescription = '.:: XMF Cristina ::.';
?>



<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--  Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="84x82" href="<?php echo $this->request->webroot?>paper/img/favicon.png">
    <!-- <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png"> -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>
      <?= $cakeDescription ?>:
      <?php
       //$this->fetch('title')
      ?>
  </title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- <?= $this->Html->css('bootstrap.min.css') ?> -->
    <?= $this->Html->css('paper-dashboard.css') ?>

<style media="screen">
body {
 display: flex;
 min-height: 100vh;
 flex-direction: column;
}

main {
 flex: 1 0 auto;
}
.brand-logo >img {
width: 50px;
height: 50px;
margin-top: 5px;
}
/* Menu - profile */
.bg-card-user {
background: rgba(0,77,64,.5);
padding: 15px 0;
}
.truncate >img {
width: 180px;
margin-top: 6px;
margin-bottom: 6px;
}
/* FOOTER */
footer .foot-text {
margin-top: 10px;
}

/* LOGIN */
.logueo {/* PARALLAX */
 height: 650px!important;
}
i.iconis {
 font-size: 1em!important;
 margin-top: 8px;
}
.login {
 border: 1px solid #FFF;
 width: 80%;
 margin: 0 auto;
 background-color: rgba(255,255,255,.7);
 padding: 20px;
}

.btn {
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
background-image: none;
border: 1px solid transparent;
-moz-user-select: none;
touch-action: manipulation;
cursor: pointer;
border-color: #7AC29A;
font-weight: 500;
}

</style>
  </head>
  <body>

	<div class="had-container">

	     <div class="parallax-container logueo">
      	<!-- <div class="parallax"> -->
          <!-- <img src="https://alistapart.com/d/438/fig-6--background-blend-mode.jpg"> -->
        <!-- </div> -->
      	<div class="row">
          <!-- <br> -->

          <?= $this->Form->create() ?>
      		<div class="col m8 s8 offset-m2 offset-s2 center">
      			<!-- <h5 class="truncate bg-card-user"> -->

					  <div class="row login">

					  	<h5>INICIAR SESIÓN - S.I.E</h5>
              <hr>
              <img src="<?php echo $this->request->webroot?>paper/img/partidos/frentexqroo.jpg" alt="" class="responsive-img">
					    <form class="col s12">
  					      <div class="row">
  					         <div class="input-field col m12 s12">
    					          <i class="material-icons iconis prefix">account_box</i>
    					          <!-- <input id="icon_prefix" type="text" class="validate"> -->
                        <?= $this->Form->control('username',
                                    [
                                      'label' => FALSE,
                                      'required' => true,
                                      'class'=> 'validate',
                                      'id'=> 'icon_prefix',
                                      'templates' => [
                                                        'inputContainer' => '{{content}}'
                                                     ]
                                    ]
                            )
                         ?>
  					          <label for="icon_prefix">USUARIO</label>
  					        </div>
  					      </div>
                  <div class="row">
	                   <div class="input-field col m12 s12">
				                <i class="material-icons iconis prefix">enhanced_encryption</i>
  					          <!-- <input id="password" type="password" class="validate"> -->
                        <?= $this->Form->control('password',
                                    [
                                      'label' => FALSE,
                                      'required' => true,
                                      'class'=> 'validate',
                                      'id'=> 'icon_prefix',
                                      'templates' => [
                                                        'inputContainer' => '{{content}}'
                                                     ]
                                    ]
                            )
                         ?>
      					          <label for="password">CONTRASEÑA</label>
    					        </div>
	               </div>
					      <div class="row">
					      	<!-- <button class="btn waves-effect waves-light" type="submit" name="action">INGRESAR</button> -->

                  <?= $this->Form->button('INGRESAR',['class'=>'btn btn-success']); ?>
                  <?= $this->Form->end() ?>

					      </div>
					    </form>
					  </div>
          <!-- </h5> -->
		   	  </div>
	    	</div>


	    </div>
    </div>


    </div> <!-- fin del .container -->

<footer class="page-footer grey darken-4">

</footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>


    <script type="text/javascript">
      $(document).ready(function(){
        $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true, // Choose whether you can drag to open on touch screens,
            onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
            onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
          }
        );
          $('.parallax').parallax();
      });
    </script>
  </body>
</html>

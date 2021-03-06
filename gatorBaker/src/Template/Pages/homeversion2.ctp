<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Stock Photo Marketplace</h1>      
    <p>Team 03</p>
<p>THIS IS A CLASS PROJECT FOR SOFTWARE ENGINEERING SFSU 648</p>
   <p>NOT A SERIOUS PRODUCT</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cars</a></li>
          <li><a href="#">Cities</a></li>
          <li><a href="#">People</a></li>
	<li><a href="#">Animals</a></li>
	<li><a href="#">Landscapes</a></li>
        </ul>
      </li>
        <li><a href="#">Contact</a></li>
	<li><a href="#">About Us</a></li>
<li><form class="form-inline">Search Stock Media:
    <input type="search" class="form-control" size="50" placeholder="Enter name or category">
    <button type="button" class="btn btn-danger">Search</button>
	<button type="button" class="btn btn-success">Upload</button>
  </form>  </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Create Account</a></li>
          <li><a href="#">Register</a></li>
        
        </ul>

        
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart and Checkout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Image 1</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Media Category</div>
	<div class="panel-footer">Media Title</div>
	<div class="panel-footer">Media description</div>
	<div class="panel-footer">Media Price</div>
	<div class="panel-footer">Owner <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-envelope"></span> Message Owner</a></div>


      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Image 2</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Media Category</div>
	<div class="panel-footer">Media Title</div>
	<div class="panel-footer">Media description</div>
	<div class="panel-footer">Media Price</div>
	<div class="panel-footer">Owner <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-envelope"></span> Message Owner</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Image 3</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Image 3 description</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Image 4</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Image 4 description</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Image 5</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Image 5 description</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Image 6</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Image 6 description</div>
      </div>
    </div>
  </div>
</div><br><br>


<footer class="container-fluid text-center">
  
	<form class="form-inline">Search Stock Media:
    <input type="search" class="form-control" size="50" placeholder="Enter name or category">
    <button type="button" class="btn btn-danger">Search</button>
  </form>  
  
</footer>

</body>
</html>

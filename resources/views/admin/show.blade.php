<!DOCTYPE html>
<html lang="en">
<head>
<title>Plunge a Sports Category Bootstrap Responsive Web Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Plunge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--css links-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="css/font-awesome.css" rel="stylesheet"><!--font-awesome-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<!--//css links-->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!--//fonts-->
</head>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
</div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('victimes.create') }}"> Create New victimes</a>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show victimes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('victimes.index') }}"> Back</a>
        </div>
    </div>
</div>
<table class="table table-bordered">
    <tr>
    <th>Nom:</th>
    <th>Prénom:</th>
    <th>Age:</th>
    <th>Etat</th>
    <th>Date de sauvtage</th>
    </tr>

        <tr>
           <td>{{ $victimes->nom }}</td>
      
          
           <td>{{ $victimes->prenom }}</td>
     
    
    
           <td>{{ $victimes->age }}</td>
     
        
           <td>{{ $victimes->etat }}</td>
       
      
           <td>{{ $victimes->datedesauvetage }}</td>
        </tr>
      
    </table>
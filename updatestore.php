<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Overview</a></li>
            <li><a href="addstore.php">Add Store</a></li>
            <li class="active"><a href="updatestore.php">Update Store<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
         <title>X-editable Demo</title>

        <script src="assets/jquery/jquery-1.9.1.min.js"></script>  
        <script src="assets/mockjax/jquery.mockjax.js"></script>
        
        <!-- momentjs --> 
        <script src="assets/momentjs/moment.min.js"></script> 
        
        <!-- select2 --> 
        <link href="assets/select2/select2.css" rel="stylesheet">
        <script src="assets/select2/select2.js"></script>         

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
        
         
        <!-- bootstrap 3 -->
        <link href="assets/bootstrap300/css/bootstrap.css" rel="stylesheet">
        <script src="assets/bootstrap300/js/bootstrap.js"></script>

        <!-- bootstrap-datetimepicker -->
        <link href="assets/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet">
        <script src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>        
        
        <!-- x-editable (bootstrap 3) -->
        <link href="assets/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
        <script src="assets/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>

        <!-- select2 bootstrap -->
        <link href="assets/select2/select2-bootstrap.css" rel="stylesheet">
       
        <!-- typeaheadjs -->
        <link href="assets/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css" rel="stylesheet">
        <script src="assets/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>         
        <script src="assets/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>         
        
        <link href="assets/demo-bs3.css" rel="stylesheet">
        
        <style type="text/css">       
            #comments:hover {
                background-color: #FFFFC0;
                cursor: text; 
            }
        </style>
        
        <script>
        var f = 'bootstrap3';
        </script>

        
        <!-- address input -->
        <link href="assets/x-editable/inputs-ext/address/address.css" rel="stylesheet">
        <script src="assets/x-editable/inputs-ext/address/address.js"></script> 
        
        <script>
            var c = window.location.href.match(/c=inline/i) ? 'inline' : 'popup';
            $.fn.editable.defaults.mode = c === 'inline' ? 'inline' : 'popup';

            $(function(){
                $('#f').val(f);
                $('#c').val(c);
                
                $('#frm').submit(function(){
                    var f = $('#f').val();
                    if(f === 'jqueryui') {
                        $(this).attr('action', 'demo-jqueryui.html');
                    } else if(f === 'plain') {
                        $(this).attr('action', 'demo-plain.html');
                    } else if(f === 'bootstrap2') {
                        $(this).attr('action', 'demo.html');
                    } else {
                        $(this).attr('action', 'demo-bs3.html');                        
                    }
                });
            });
        </script>        
                
        <style type="text/css">
            body {
                padding-top: 50px;
                padding-bottom: 30px;
            }
            
            table.table > tbody > tr > td {
                height: 30px;
                vertical-align: middle;
            }
        </style>         

    </head>

    <body> 

        <div style="width: 80%; margin: auto;"> 
            <h1>X-editable Demo</h1>
           <hr>
            <table id="user" class="table table-bordered table-striped" style="clear: both">
                <tbody> 
                    <tr>         
                        <td width="35%">Simple text field</td>
                        <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                    </tr>
                    <tr>         
                        <td width="35%">Simple text field</td>
                        <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                    </tr>               
                                                                                                                
                    
                </tbody>
            </table>
            

        </div>
        
        <script src="assets/demo-mock.js"></script> 
        <script src="assets/demo.js"></script> 


        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery.min.js"><\/script>')</script>
    <script src="bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


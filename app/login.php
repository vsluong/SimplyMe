<?php
       if($_POST["submit"]){
       
            $result="<div class='alert alert-success'>Form Submitted</div>";
            
            if(!$_POST["name"]){
                
                $error="<br />&nbsp;Please enter your name.";
            
            }
            
            if(!$_POST["email"]){
                
                $error.="<br />&nbsp;Please enter your email.";
            
            }
            
             if(!$_POST["password"]){
                
                $error.="<br />&nbsp;Please enter your password.";
            
            }
            
            if ($_POST["email"] != "" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
                $error.="<br />&nbsp;Please enter a VALID email.";
            } 
            
            if($error){
                
                $result="<div class='alert alert-danger'>Please fix these errors: <strong>".$error."</strong></div>";

            } else{
                
                // edit code to add information into database
                
                if(mail("r.saenz@sitedesigncreation.com", "Test email form contact form", "Name: ".$_POST["name"]." 
                    Email: ".$_POST["email"]." password: ".$_POST["password"])){
                    
                // end edit code, no need to edit past here
            
                    $result="<div class='alert alert-success'>Thanks for registering!</div>";
            
                } else{
                
                    $result="<div class='alert alert-danger'>Sorry please try again!</div>";
                
                }
            
            
            }
       }
        
?>
<!doctype html>
<html>
<head>
    <title>Login to Simply Me</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initialscale=1" />
    
    <!-- bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<style>
    .emailForm{
        border:1px solid grey;
        border-radius:10px;
        margin-top:20px;
        padding-bottom:30px;
    
    }
    
    textarea{
        height:100px;
    
    }
</style>
</head>
<body>
    <div>        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 emailForm">
                    <h1>Login</h1>
                    
                    <?php echo $result ?>
                    
                    <p class="lead">Register for SimplyMe to get customized college events for you.</p>
                    
                    <form method="post">
                        
                        <div class="form-group">
                            <label for="name">Your name</label>
                            <input type="text" name="name" placeholder="Your Name" class="form-control" value="<?php echo $_POST["name"]; ?>" />
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Your email</label>
                            <input type="email" name="email" placeholder="Your Email" class="form-control" value="<?php echo $_POST["email"]; ?>" />
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Your password</label>
                            <input type="password" name="password" placeholder="Your password" class="form-control" value="<?php echo $_POST["password"]; ?>" />
                        </div>
                        
                        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
                    
                    </form>
                
                
                </div>
            </div>
        
        </div>
    </div>
    
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
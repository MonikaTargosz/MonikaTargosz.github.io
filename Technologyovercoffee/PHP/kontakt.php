<!DOCTYPE html>
<html lang="pl">
<head>
<title>Automatyk przy kawie</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="\Technologyovercoffee/css/main.css">
    <link rel="stylesheet" href="\Technologyovercoffee/css/form.css">
</head>
    
<body>

   <div class="header"><h0>Technology over coffee</h0></div>
    
  <div class="column side">
 
                             <a  href="\Technologyovercoffee/index.html">Home</a> 
                   
        <li class="submenu"> <a  href="\Technologyovercoffee/php/tech_nowinki.php">Technology news</a>  
            
        </li>
        <li class="submenu"> <a  href="\Technologyovercoffee/php/programowanie.php" >Programming</a>  
                <ul>
                             <a  href="\Technologyovercoffee/php/java.php" >Java in Android Studio</a> 
                             <a  href="\Technologyovercoffee/php/java_pl.php">Java w Android Studio</a>   
                </ul>
        </li>
                            <a  href="\Technologyovercoffee/php/kontakt.php" class="active">Contact</a>  

                  <br \>   <br \>
    
    </div>  
    
    
        <div  id="menu">
              
        <!--li><a href="link1.html">Link1</a></li>
        <li><a href="link2.html">Link2</a></li>
        <li><a href="link3.html">Link3</a></li-->
    </div>
      
  <div class="column middle">

       
    <h1>Contact</h1>
         <hr>
      <br/>
 
            <p style="text-align: center;">
            If you have any question, any idea for improving website or want to leave an opinion I invite you to send to me the message below.
        </p>
  
     <div id="panel">
     <form action="\Technologyovercoffee/php/contact.php"  method="post" >
         
    <label for="passw">Full name</label>
    <input type="text" id="passw" name="name" />
    <label for="email">E-mail address</label>
    <input type="email" id="email" name="email" />
    <label for="message">Message</label>
    <textarea name="message" id="message" placeholder="Enter the text here" ></textarea>
    <div id="lower">
   <input type="submit" value="Send" />
    </div>
    </form> 
    </div>
    
</div>

            
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <!--particles.js container-->
<!--div id="particles-js"></div> 
        <!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/app.js"></script> 
         
         <!--particles.js container-->
    <div id="particles-js">
        
        </div>
        
    <!-- scripts -->
<script src="\Technologyovercoffee/js/particles.js"></script>
<script src="\Technologyovercoffee/js/app.js"></script>


    
 
      <div id="footer">Copyright &copy; 2018 by Monika Targosz</div> 
 
</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
<title>Technology over coffee</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="\Technologyovercoffee/css/main.css">
    <link rel="stylesheet" href="\Technologyovercoffee/css/form.css"> 
    <link rel="stylesheet" href="\Technologyovercoffee/css/java.css"> 
  
</head>
    
<body oncontextmenu="return false" onselectstart="return false" onselect="return false" oncopy="return false" ondragstart="return false" ondrag="return false" onbeforeprint="document.body.style.visibility = 'hidden'; alert('Wydruk jest niedostępny!')" onafterprint="document.body.style.visibility = 'visible'">
    
      
     <div class="header"><h0>Technology over coffee</h0></div>
    
     <div class="column side">
 
                             <a  href="\Technologyovercoffee/index.html">Home</a>   
                   
        <li class="submenu"> <a  href="\Technologyovercoffee/php/tech_nowinki.php">Technology news</a>  
            
        </li>
        <li class="submenu"> <a  href="\Technologyovercoffee/php/programowanie.php">Programming</a>  
                <ul>
                             <a  href="\Technologyovercoffee/php/java.php" class="active">Java in Android Studio</a>
                             <a  href="\Technologyovercoffee/php/java_pl.php">Java w Android Studio</a>  
                </ul>
        </li>
                            <a  href="\Technologyovercoffee/php/kontakt.php">Contact</a>  

                  <br \>   <br \>
                  
    
    </div> 
    
   <div id="menu"> </div>  

     <div class="column middle_s">
    
    <h1> The first steps in Android Studio </h1>
        
        <div class="column middle_s0">
            <img style="display: block; height:70%; widht:70%;  " src="\Technologyovercoffee/image/java/android.jpg"/>
            <br/><br/>
        </div>
          <hr>
         
        <div class="cm1">
         
         <a name="Create your"></a>
          
            <p style="text-indent: 10%;"> <b>Create your first application and get to know all the most important Android Studio tools. In this course you will learn about the Android Studio environment, you will learn to debug USB and enjoy your own application on your phone, so get to work!</b></p>
    
        </div>


         <div class="column middle_s2">
              <video width="100%" height="100%" controls>
                  <source src="\Technologyovercoffee/image/java/app.mp4" type="video/mp4">
              </video>  
              <a name="App"></a> 
         </div>     

         <div class="cm3">

               <p style="text-indent: 10%;"> The path to create our application will consist of the following steps. The first application requires more time to dedicate, which in the future will allow you to easily operate Android Studio. Here you will find all the most important functions for the operation of your application. References will allow you to find the right functions faster when creating new applications.</p>
                
             <br><a href="#Create your">The first steps in Android Studio</a><br/>
               <a href="#App">My first app - coding in Java</a><br/>
               <a href="#Button implementation">Button implementation</a><br/>
               <a href="#New Activity implementation">New Activity implementation</a><br/>
               <a href="#Menu implementation">Menu implementation</a><br/>
               <a href="#onBackPressed implementation">onBackPressed implementation</a><br/>
               <a href="#Source code of application">Source code</a><br/>
               <a href="#Debugging USB project of Android Studio">Debugging USB</a><br/>
               <a href="#Create your">Advanced functions</a>
         </div>
         
         <div class="column middle_s4">
         <img style="display: block; height:95%; widht:95%;  " src="\Technologyovercoffee/image/java/Newapp.gif"/>
         </div>
         <div class="cm5">
             <p style="text-indent: 30%;">Visualisation 1. <b>How to create a new project in Android Studio</b></p><br>
             <p style="text-indent: 10%;">To create a new project select: <b>File -> New -> New project</b>. Then you should name your application and choose the Android version on which the application should be created. 100% is recommended, thanks to this it will be easily operated on any Android phone. You also need to know that creating a project requires a lot of time, so be patient.</p>
         </div>
         <div class="column middle_s6">
             <img style="display: block; height:95%; widht:95%;  " src="\Technologyovercoffee/image/java/MainActivity.bmp"/>
         </div>
         <div class="cm7">
             <br> <p style="text-indent: 10%;">When you open a new document with your future application, you should see the source code of <b>MainActivity.java</b>. <br>The most important things you should know are: <br><b>package</b> -> source of your application, <br><b>import</b> -> necessary libraries for proper operation, <br><b>public class</b> -> here we will write the correct source code of our Activity, <br>setContentView (R.layout.<b>filename.xml</b>).</p><br/> 
             <p style="text-indent: 10%;">Another important thing you need to know is to support the project tree that you are developing below icon of the Android on the vertical <b>1.Project bar</b>. There you develop <b>app-> src-> main-> res-> layout </b>and right here you can create a new layout and <b>app-> src-> main-> java </b>band right-click to select a new class .java or new Activity. You need the new Activity if you create another activity of your application.</p>
             </div>
             
             <div class="cm7a">
                 <p style="text-indent: 20%;">Img 1. <b>Basic visualisation of MainActivity.java</b></p>
         </div>
         <div class="column middle_s8">
              <img style="display: block; height:100%; widht:100%;  " src="\Technologyovercoffee/image/java/xml.bmp"/>
         </div>
         <div class="cm9"><br> <p style="text-indent: 10%;">And now a pleasant part of creating applications for your eyes, here you will be able to create application visualization. In the <b>Palette</b> tab you can view all possible functions. This is where we create elements that help the user communicate with the device: buttons, displays, pictures, charts, videos and decide about their placement and sequence.<br><br/></p>
             <p style="text-indent: 10%;">Certainly you have already noticed this red underline, it is a deliberate treatment and will appear with you more than once. This is very important because it informs you that there is an error in your code, for example: the lack of the library needed, incompatibility of element names in the <b>.xml</b> file with <b>.java</b> in one, all activity - our <b>MainActivity</b>.</p><br/>
         </div>
        
         <div class="cm8a">
                 <p style="text-indent: 50%;">Img 2. <b>Basic code of MainActivity.xml</b></p>
         </div>
         <div class="column middle_s10">
             <img style="display: block; height:100%; widht:100%;  " src="\Technologyovercoffee/image/java/Mainxml.bmp"/>
         </div>
         
         <div class="cm11"> 
             <br><br/><p style="text-indent: 10%;">Now you switch the tab from <b>Design</b> to <b>Text</b> and see the next code, it is not a worse option, on the contrary, it makes your work easier and allows for more options, you write the code yourself, which you think you need. It is here where you decide on the type of layout, whether it is linear or relative, you specify the parameters of each element in this layout.<br><br/></p>
             <p style="text-indent: 10%;">Already here you can see the first most important things when creating an element: what is the element -> TextView, the width and height of its layout and the text you want to display.<br><br/></p>
          </div> 
          <div class="cm10a">
                 <p style="text-indent: 25%;">Img 3. <b>Basic code of MainActivity.xml</b></p>
                 <br><br/>
              <p style="text-indent: 10%;">Get to work, create your first application! Write and learn faster and remember the most. Practice makes perfect!</p>
         </div>
         
         <div class="column middle_s12">
             <img style="display: block; height:100%; widht:100%;  " src="\Technologyovercoffee/image/java/FA.jpeg"/>
         </div>
         
         <div class="cm13"> 
             <br><p style="text-indent: 10%;">First, let's analyze the code below <b>MainActivity.java</b>. In the first line of code, we have our package, and then a list of all necessary libraries. To add a train we write "import android. " and the appropriate librarie or it fits in automatically when you write the code and select the appropriate item from the list.<br><br/></p>
             <p style="text-indent: 10%;">Now our<b> class MainActivity extends AppCompatActivity {}</b>, which includes the element creating elements this is <b>protected void onCreate (Bundle savedInstanceState)</b> { here we assign the names of elements in the class to the matching element names in the .xml file}. The matching layout is entered here <b>setContentView(R.layout.activity_main);</b><br><br/></p>
             <p style="text-indent: 10%;">First, let's think about what elements our application will consist of. Our application contains: the word "MENU", two buttons "NEXT ACTIVITY" and "SHOW THE INSCRIPTION", a text field with an inscription and signature. It also has a menu with one field containing "Created by MT".<br><br/></p>
             <p style="text-indent: 10%;">At the beginning, we should declare our buttons in the protected void onCreate class (Bundle savedInstanceState) {<br><b>btnNext = (Button) findViewById (R.id.btnNext);</b> <br><b>btnShow = (Button) findViewById (R.id.btnShow);</b><br>}. In brackets, enter the matching element name in the .xml file.<br><br/></p>
             <p style="text-indent: 10%;">I'm sure you're wondering what these two lines mean <br> <b>requestWindowFeature(Window.FEATURE_NO_TITLE);</b><br> <b>getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);</b><br>They turn on the FULL SCREEN function, I have not used this function in NewActivity.java especially so that you can see the difference.<br/></p>
          </div> 
         
         <div class="column middle_s14">
             <img style="display: block; height:100%; widht:100%;  " src="\Technologyovercoffee/image/java/MA1.bmp"/>
         </div>
         <div class="cm18"> 
            <a name="Button implementation"></a>
             <br><p style="text-indent: 10%; font-size: 13pt; "><b>Button implementation</b></p>
             <br><p style="text-indent: 10%;">Below is the function of our button "SHOW THE INSCRIPTION", which contains the function <b>OnClick()</b>. We will find there variable <b>tvStdInfo</b>, which is matched to the name <b>tvStd</b> in the .xml file, which is the name <b>TextView</b>. Next we find a function that inserts the word <b>"setText"</b>, the size of the field and our string.<br><br/></p>
         </div>
         <div class="column middle_s14a">
             <img style="display: block; height:100%; widht:100%;  " src="\Technologyovercoffee/image/java/MA11a.bmp"/>
         </div>
         <div class="cm19"> 
            <a name="New Activity implementation"></a>
             <p style="text-indent: 10%; font-size: 13pt;"><b>New Activity implementation</b></p>
             <br><p style="text-indent: 10%;">We create a function that is responsible for the operation of the button. With us, this is the Next () function, so we create an Intent object that stores the activity in which we are <b>.this</b> and the activity we want to access <b>.class</b>. And then calls the function <b>startActivity(intent); </b> that opens this activity.<br></p>
             <a name="Menu implementation"></a>
             <br><p style="text-indent: 10%; font-size: 13pt;"><b>Menu implementation</b></p>
             <br><p style="text-indent: 10%;">Here we write a function creating a menu, in our case it has only one option, with the words "Created by MT".<br><br/></p>
         </div>
         
         <div class="column middle_s14b">
             <img style="display: block; height:100%; widht:100%;  " src="\Technologyovercoffee/image/java/MA11b.bmp"/>
         </div>
         
         <div class="cm20"> 
            <a name="onBackPressed implementation"></a>
             <br><br/><p style="text-indent: 10%; font-size: 13pt;"><b>onBackPressed implementation </b></p>
             <br><p style="text-indent: 10%;">It is a function thanks to which we can terminate the operation of our application. Previously, we must declare a counter <b>btnBackPressCounter</b> to which we assign a value of zero. If the number of pressed <b>Back()</b> buttons is equal to zero, Toast <b>"Press again to exit"</b> will be displayed and the next function will call the <b>finish()</b> function.<br><br/></p>
         </div>
         
         <div class="column middle_s14c">
             <img style="display: block; height:100%; widht:100%;  " src="\Technologyovercoffee/image/java/MA111.bmp"/>
         </div>
         
         <div class="cm17"> 
            <a name="Source code of application "></a>
             <p style="text-indent: 10%; font-size: 13pt;"><b>Source code of application </b></p>
             <br><p style="text-indent: 10%;">Below is the source code of our application, rewrite yourself  .java files to learn the most and copy .xml files.</p>
        
          </div> 
         
          <embed src="\Automatykprzykawie/image/note.txt" width="100%" height="570vh" margin="auto"  />
          
         <div class="column middle_s15">
             <img style="display: block; height:100%; widht:100%;  " src="\Technologyovercoffee/image/java/debugging.jpeg"/>
         </div>
         
         <div class="cm16"> 
            <a name="Debugging USB project of Android Studio"></a>
             <br><br/><p style="text-indent: 10%;"><b>Debugging USB project of Android Studio</b></p>
             <br><br/><p style="text-indent: 10%;">You just have the source code ready to compile and debug. I recommend USB debugging, because the result of the written application we can enjoy immediately and upload subsequent versions of our improved code each time. You can also use the visualization of your application using the Emulator, but it is a very time-consuming option.<br><br/></p>
             <p style="text-indent: 10%;">At the beginning we choose: <b>Settings -> About phone -> Build number</b> and then click on this option until we show us a toast with the number of subsequent clicks. Did you go off well? You already have programmer options. Now you connect <b>USB</b> from computer to phone and choose <b>MIDI</b> and <b>USB debugging</b>.<br><br/></p>
          </div> 
         
         <div class="cm21"> 
            <a name="Sources"></a>
             <br><br/><p style="text-indent: 10%;"><b>Sources</b></p>
             <br><br/><p style="text-indent: 10%;">You just have the source code ready to compile and debug. I recommend USB debugging, because the result of the written application we can enjoy immediately and upload subsequent versions of our improved code each time. You can also use the visualization of your application using the Emulator, but it is a very time-consuming option.<br><br/></p>
             <p style="text-indent: 10%;">At the beginning we choose: <b>Settings -> About phone -> Build number</b> and then click on this option until we show us a toast with the number of subsequent clicks. Did you go off well? You already have programmer options. Now you connect <b>USB</b> from computer to phone and choose <b>MIDI</b> and <b>USB debugging</b>.<br><br/></p>
          </div>
    
    </div>
  
   <div id="footer">Copyright &copy; 2018 by Monika Targosz</div> 
    
 
</body>
</html>
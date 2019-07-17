<div id="sau">
<link rel="stylesheet" type="text/css" href="../css/Contact.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/pied.css">


 <body>
    <header>
<?php include('tete.php') ?>
    </header>
<section>
    
 
       <h1>you can fill out this formulare to contact us</h1>
           
           
           
           
        
        <div>
            <form method="post" action="#">
                <br>
                Message adressed to: <br>
                    <select name="selectio1">
                
                        <option>Our Team</option>
                        <option>The Manager</option>
                        <option>Other</option>
                        
                    </select><br><br><br><br>
                    
                Message Object*<br>
                <select name="selectio2">
                    
                
                    <option selected="selected">Information request</option>
                
                    <option>Suggetion</option>
                    
                    <option>Other things</option>
                    
                    
                </select><br><br><br><br>
               
                <input type="text" placeholder="Your LastName" size="73" name="email" required style="height: 30px;"><br><br><br><br>
                <input type="text" placeholder="FirstNane" size="73" name="email" required style="height: 30px;"><br><br><br><br>
                <input type="email" placeholder=" Email" size="73" name="email" required style="height: 30px;"><br><br><br><br>
                <input type="tel" placeholder="Your phone number" size="73" name="email" required style="height: 30px;"><br><br><br><br>
           
            
    
                
                <label for="text">Your SMS:</label><br>
                <textarea name="text"></textarea><br><br>
                
               <input class="en" type="submit" value="submit" style="height: 30px; border-radius: 10px; background-color: blueviolet; color: white; font-weight: bold"> 
            </form>
       
       
       </div>
       
    </section>

    
    <footer>
    <?php include('footer.php') ?>
    </footer>
    </body>
</div>
<!DOCTYPE html>
<html>
     <head>
    <title>wwwBIT_Diligent.com</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/pied.css">
    <link rel="stylesheet" type="text/css" href="../css/cammand.css">
    
    </head>
    
    
       
        
       
        <body> 
            <header>
                <?php include('tete.php') ?>
            </header>
         
         
        <form action="" method="POST" id="fau">
            <p>Please fill out this formulare</p>
            <label for="name">Name:</label><br> <input name="Name" required="required" value="" placeholder="Lastname" id="name"><br><br>

            <label for="prenom">First
            Name</label><br> <input name="Prenom" value="" required="required" placeholder="Firstname" id="prenom"><br><br>

            <!--<label for="">Saissisez le nom du produit:</label><br> <input name="produit" value="" size="20" placeholder="produit" required><br><br>-->

            <label for="mail">Email:</label><br> <input name="Email" required="required" type="email" value="" placeholder="email" id="mail"><br><br>

            <label for="number">Phone number:</label><br> <input type="Tel" name="Name" value="" required="required" placeholder="Phone number" id="number"><br><br>

            Select your countrie:<br>
             <select>
                <option >Burkina Faso</option>
                <option selected>Ghana</option>
                <option>Mali</option>
                <option>Cote D'ivoire</option>
                <option>Niger</option>
                <option>Benin</option>
             </select><br><br> 

            <label for="quantite">Quantity:</label><br>
             <input name="quantite" type="quantite" value="" required="required" placeholder="Quantity" id="quantite"><br><br>
            Votre message:<br> 
            <textarea name="message"></textarea><br><br>
           
            <input type="submit" value="submit">  
        
        </form>
        <div style="position: absolute;top: 500px;left: 500px;">
        

<?php 
                if (isset($_POST['Name'])) {
                     echo $_POST['Name'];
                    echo "";
                   
                } 
                else{echo "";}
                ?>


        </div>
            <footer>
                <?php include('footer.php') ?>
                
            </footer>
        </body>

  
    

</html>

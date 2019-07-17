			<nav>
				<ul>
					<li><a href="face.php" class="aret">Home</a></li>
					<li><a href="produit.php" class="aret">Our_Product</a></li>
					<li><a href="Contact.php" class="aret">Contact</a></li>
                    <li><a href="index.php" class="aret">Our_Team</a></li>
					<li class="login"><a class="za">Get_Courses</a>
						<a class="me su" id="myBtn">log_in</a>
						<a class="me seu" id="myBt">log_up</a>
					</li>
				</ul>
			</nav>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/modal.css">
			
<body>
<!--********************************************pour log in***********************************************************-->

<!-- Trigger/Open The Modal -->
<!--<div id="myBtn">Open Modal</div>-->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">×</span>
    <p> <center> <h3 style="color: blue">Fill up to get courses</h3></center> 
                                <form>
          
              <p>  <form action="">
                       
User name<br> <input name="name" required type="text" placeholder="name" class="nom"><br><br>
pasword: <br> <input name="pasword" type="password" placeholder="password" class="nom"><br><br>               
phone number: <br><input name="name" type="buttom" placeholder="Phone" class="nom"><br><br> <br>
            
<input type="submit" value="logg in" class="env"><br>
</form></p>
    
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!--********************************************pour log in***********************************************************-->

<!-- Trigger/Open The Modal -->
<!--<div id="myBtn">Open Modal</div>-->

<!-- The Modal -->
<div id="myModa" class="moda">

  <!-- Modal content -->
  <div class="modal-conten">
    <span class="clos">×</span>
<h3 style="color: blue;text-align: center;">create a new account</h3>
    
           <form>       
               <p>  <form action="">

User name:<br> <input name="Name" type="name" required placeholder="Name" class="nom"><br><br>
phone number: <br><input name="name" type="buttom" required placeholder="Phone" class="nom"><br><br>
Email: <br> <input name="email" required type="email"placeholder="Email" class="nom"><br><br>
pasword: <br> <input name="pasword"type="password" required placeholder="code" class="nom"><br><br>               


<input type="submit"  class="env" value="log up"><br>
</form></p>
           
  </div>

</div>

<script>
// Get the modal
var moda = document.getElementById('myModa');

// Get the button that opens the modal
var bt = document.getElementById("myBt");

// Get the <span> element that closes the modal
var spa = document.getElementsByClassName("clos")[0];

// When the user clicks the button, open the modal 
bt.onclick = function() {
    moda.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spa.onclick = function() {
    moda.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == moda) {
        moda.style.display = "none";
    }
}
</script>
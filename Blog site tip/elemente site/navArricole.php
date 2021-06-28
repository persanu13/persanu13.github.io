
<nav>

    <div id="casutaimg">

        <a id="logo" href="../blogpg1.php"><img src="../img/logoalb.png" alt="logo""></a>

    </div>

    <div id="nav1">


        <div id="textsfarsit">

            <a href="#"><i id="insta" class="fab fa-instagram"></i></a>
            <a  href="#"><i  class="fab fa-facebook-f"></i></a>



            <?php


            if(isset($_SESSION['nume'])){
                echo '
                 <form id="logout" action="" method="post"   >
                <button name="logout" id="butonout">LOGOUT </button>
                    </form>
                ';

                if (isset($_POST['logout'] )) {
                    $_SESSION['nume']=null;
                    $_SESSION['email']=null;
                    $_SESSION['parola']=null;
                    header('Location:../paginisite/login.php?'.$_SESSION['nume'].' ');
                }

                if ($_SESSION['nume']=="persanu13"){
                    echo ' <a href="../paginisite/adminon.php">ADMIN ON</a>';
                }
            }else{
                echo'
            <a href="../paginisite/login.php">LOGIN</a>
            <a href="../paginisite/login.php" > SIGN UP</a>';}




            ?>



        </div>


        <div id="textmijloc">
            <a href="#"> CONTACT US</a>
            <a href="#"> ABOUT US</a>
            <a href="#"> PARTENERS</a>
            <a href="#"> MAKE BY</a>


        </div>


    </div>



</nav>


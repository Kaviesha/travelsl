   <?php  
    echo "<div class='header'>";
    
    echo "<img src='images/logo.png' id = 'logo'>";
    
    include_once "conn.php";
    $con = mysqli_connect($servername, $username, $password, $dbname);
    
    
    $ql="SELECT value FROM mainvar WHERE id=1;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    echo "<h2>";
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
    mysqli_free_result($result);
    echo"</h2>";
  
    echo "</div>";

    echo "<div id='navbar'>";
    
    
    $ql="SELECT value FROM mainvar WHERE id=2;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    echo "<a class='active'' href='index.php'>";
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
    mysqli_free_result($result);
    
            echo "</a>";
    
    $ql="SELECT value FROM mainvar WHERE id=3;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    echo "<a href='#whereto'>";
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
     mysqli_free_result($result);
            echo"</a>";
    
    $ql="SELECT value FROM mainvar WHERE id=4;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    echo "<a href='vbook.php'>";
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
        echo"</a>";
    
     $ql="SELECT value FROM mainvar WHERE id=5;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    echo "<a href='contact.php''>";
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
        echo"</a>";
      ?>
    
    
</div>
    
    
    

    <script>
window.onscroll = function() {stickyNav()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyNav() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href ="style.css">
    </head>
    <body>
        
        
        

  <div class="admnheader">  
        <h1 class="admnh1" align="center">Admin Panel</h1>
      </div>
    <br>
        <?php
        include "conn.php";
    echo" <h3 id='admnh3'>Header Editor</h3>";
       include_once "header.php";
        ?>
        
    <form method="post">
        <div class="adminht">
        <table border="2px" width="100%">
            <tr><th>Description</th><th>Current Value</th><th>Enter new value</th>
            </tr>
            <tr>
                <td><strong>Header title</strong></td>
                <td>
                    <?php
                    $ql="SELECT value FROM mainvar WHERE id=1;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
    mysqli_free_result($result);
                    ?>
                </td>
                <td><input type="text" name="title"  "><input type="submit" value="update"></td>
            </tr>
            <tr>
                <td><strong>Navigation bar tab 1</strong></td>
                <td>
                    <?php
                    $ql="SELECT value FROM mainvar WHERE id=2;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
    mysqli_free_result($result);
                    ?>
                </td>
                    <td><input type="text" name="navtab1"  "><input type="submit" value="update"></td>
            </tr>
            <tr>
                <td><strong>Navigation bar tab 2</strong></td>
                <td>
                    <?php
                    $ql="SELECT value FROM mainvar WHERE id=3;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
    mysqli_free_result($result);
                    ?>
                </td>
                <td><input type="text" name="navtab2"  "><input type="submit" value="update"></td>
            </tr>
            <tr>
                <td><strong>Navigation bar tab 3</strong></td>
                <td>
                    <?php
                    $ql="SELECT value FROM mainvar WHERE id=4;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
    mysqli_free_result($result);
                    ?>
                </td>
                    <td><input type="text" name="navtab3"  "><input type="submit" value="update"></td>
            </tr>
            <tr>
                <td><strong>Navigation bar tab 4</strong></td>
                <td>
                    <?php
                    $ql="SELECT value FROM mainvar WHERE id=5;";
    $result=mysqli_query($con,$ql);
    $resultCheck = mysqli_num_rows($result);
    
    
        while ($row= mysqli_fetch_assoc($result))
              {
                        echo $row['value'];
            }
    mysqli_free_result($result);
                    ?>
                    <td><input type="text" name="navtab4"  "><input type="submit" value="update"></td>
                </td>
            </tr>
        </table>
                        </div>
        </form>
                
<?php
    if(isset($_POST['title'])) {
        $title =$_POST['title'];
        echo "$title";
        $sql = "UPDATE mainvar SET value = $title WHERE id=1)";
        $result=mysqli_query($con,$sql);
        
    }
    
    if(isset($_POST['navtab1'])) {
        $navtab1 =$_POST['navtab1'];
        echo $navtab1;
        $sql = "UPDATE mainvar SET value = $navtab1 WHERE id=2)";
        $result=mysqli_query($con,$sql);
    }
    if(isset($_POST['navtab2'])) {
        $navtab2 =$_POST['navtab2'];
        echo $navtab2;
        $sql = "UPDATE mainvar SET value = $navtab2 WHERE id=3)";
        $result=mysqli_query($con,$sql);
    }
    if(isset($_POST['navtab3'])) {
        $navtab3 =$_POST['navtab3'];
        echo $navtab3;
        $sql = "UPDATE mainvar SET value = $navtab3 WHERE id=4)";
        $result=mysqli_query($con,$sql);
    }
    if(isset($_POST['navtab4'])) {
        $navtab4 =$_POST['navtab4'];
        echo $navtab4;
        $sql = "UPDATE mainvar SET value = $navtab3 WHERE id=5)";
        $result=mysqli_query($con,$sql);
    }
    
        
    
    
?>
</body>
</html>
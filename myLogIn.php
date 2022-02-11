<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MySimpleWeb</title>
  <link href="styles.css" rel="stylesheet" />
</head>
<body>
    <header>You can create your account</header>
    
    <nav class="myNav">
    <a href="myWeb.php" class="nav1 myBotMain">Menu</a>
      <a href="#" class="nav1 myBotNav1">News</a>
      <a href="#" class="nav1 myBotNav2">MyFriends</a>
      <a href="#" class="nav1 myBotNav3">MyMusic</a>
      <a href="#" class="nav1 myBotNav4">MyVideo</a>
      <a href="#" class="nav1 myBotNav5">Setting</a>
      <a href="myLogIn.php" class="nav1 myBotNav6">Log In</a>
  </nav>

    <main class="mainContent2">
      
      </div>
      <div class="block1 sentFile">
        <form action="myLogIn.php" method="POST" enctype="multipart/form-data">
          <span class="text-center">Info</span>
            <div class="input-container">
            <input type="text" required="" name="name"/>
            <label>Name</label>		
          </div>
        <div class="input-container">		
          <input type="text" required="" name="age"/>
          <label>Age</label>
          
        </div>
        <div>
        <input type="file" name="filename" id="file" class="inputfile" />
          <label for="file">Choose a file</label>
        </div>
        <div>
        <button type="submit" class="btn">Sent</button>
        </div>
        </form>
      </div>

      <div class="block1 myPicture">
        <div class="Picture">
           <?php
          if($_FILES){
            $nameOfFile = $_FILES["filename"]["name"];

            switch($_FILES["filename"]["type"]){
              case 'image/jpeg' : $extractOfImg = 'jpg'; break;
              case 'image/gif' : $extractOfImg = 'gif'; break;
              case 'image/png' : $extractOfImg = 'png'; break;
              default: $extractOfImg = ''; break;
            }

            if($extractOfImg){
              $nameOfImg = "image.$extractOfImg";
              move_uploaded_file($_FILES["filename"]["tmp_name"], $nameOfImg);
              echo "<img src='$nameOfImg'";
            }
            else echo "'$nameOfFile' - неприемлемый файл изображения ";

          }
        else echo "<br>Изображение не загрузилось";

        ?>
        </div>
     

        <?php
          $name = "Not defined";
          $age = "Not defined";
          if(isset($_POST["name"])){
          
              $name = $_POST["name"];
          }
          if(isset($_POST["age"])){
          
              $age = $_POST["age"];
          }
          echo "Name: $name <br> Age: $age";
    ?>

        
    </div>

      
  
    </main>
    <aside class="myAside">This is MyAside1</aside>
    <footer class="myFooter">MyFooter</footer>
  
</body>
</html>
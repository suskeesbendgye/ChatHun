<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Keresztnév</label>
            <input type="text" name="fname" placeholder="Keresztnév" required>
          </div>
          <div class="field input">
            <label>Vezetéknév</label>
            <input type="text" name="lname" placeholder="Vezetéknév" required>
          </div>
        </div>
        <div class="field input">
          <label>Email cím</label>
          <input type="text" name="email" placeholder="Írd be az e-mail címed" required>
        </div>
        <div class="field input">
          <label>Jelszó</label>
          <input type="password" name="password" placeholder="Írd be a jelszavad" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Válassz Képet</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Tovább a Chatre">
        </div>
      </form>
      <div class="link">Már regisztráltál? <a href="login.php">Lépj be</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

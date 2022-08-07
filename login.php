<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Cím</label>
          <input type="text" name="email" placeholder="Írd be az Email címed" required>
        </div>
        <div class="field input">
          <label>Jelszó</label>
          <input type="password" name="password" placeholder="Írd be a jelszavad" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Tovább a Chatre">
        </div>
      </form>
      <div class="link">Még nem regisztráltál? <a href="index.php">Regisztrálj most!</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>

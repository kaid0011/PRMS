<?php
switch ($navbar) {
    case 'homepage':
?>
        <!-- Navbar Home Page Section-->
        <nav class="navbar navbar-expand-md px-4 fixed-top">
    <div class="container-fluid">
      <a href="<?=base_url('')?>" class="navbar-brand"><img id="logo" src="<?=base_url('assets/images/logo1.png')?>" alt="logo3">
      <h1>CLINIC</h1></a>
    
    <button type="button" class="navbar-toggler"
    data-bs-toggle="collapse"
    data-bs-target="#navbarLinks">
      <span class="navbar-toggler-icon"> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarLinks">
      <div class="navbar-nav ms-auto">
            <a href="<?=base_url('')?>" class="nav-item nav-link mx-auto px-2">HOME</a>
            <a href="<?=base_url('login')?>" class="nav-item nav-link mx-auto px-2">LOGIN</a>
      </div>
    </div>
   </div>
  </nav>
        <!-- (end) Navbar Home Page Section -->

    <?php
        break;
    case 'stafflogin':
    ?>
        <!-- Navbar Registration Section -->

        <!-- (end) Navbar Registration Section -->

    <?php
        break;
    case 'login':
    ?>
        <!-- Navbar Log In Section -->

        <!-- (end) Navbar Log In Section -->

    <?php
        break;
    case 'main':
    default:
    ?>
        <!-- Navbar Main Section -->

        <!-- (end) Navbar Main Section -->

<?php
        break;
}
?>

<!-- <script>

    function urlName() {
        <?php $name ?> = document.getElementById("userName").value;
    }

</script> -->
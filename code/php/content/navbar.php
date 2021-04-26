<div class="margin-nav navbar-fixed position-navbar">
  <nav class="raduis-navbar">
    <div class="nav-wrapper">
      <a href="../page/index.php" class="brand-logo margin-left height-logo-a"><img class="responsive-img img-navbar-logo" src="../../../assets/logo-big.PNG" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down row">
        <li class="input-field marge-search offset-s2 offset-m2 offset-l2 offset-xl2 col s4 m3 l3 xl4">
          <input placeholder="Rechercher" id="search" type="search" required>
          <label class="label-icon icon-searc" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons icon-search">close</i>
        </li>
        <div class="right">
          <?php if (isset($_SESSION['user']) && $_SESSION['user']['admin'] == 1): ?>
            <li><a class="height-panier-a hover" href="../page/admin.php"><img class="responsive-img img-navbar-panier taille-admin" src="../../../assets/admin.png" alt=""></a></li>
          <?php endif; ?>
          <li><a class="height-panier-a hover" href="../page/panier.php"><img class="responsive-img img-navbar-panier" src="../../../assets/panier.PNG" alt=""><img class="responsive-img img-navbar-mon-panier" src="../../../assets/mon-panier.PNG" alt=""></a></li>
          <?php
            if (isset($_SESSION['user'])){
            $hrefUser = '../page/user.php';?>
            <li><a class="height-user-a hover margin" href="../action/logout.php"><img class="responsive-img img-navbar-user" src="../../../assets/logo-logout.PNG" alt=""></a></li>
          <?php } else
            $hrefUser = '../page/login.php'; ?>
            

           
          <li><a class="height-user-a hover margin" href="<?php echo $hrefUser ?>"><img class="responsive-img img-navbar-user" src="../../../assets/user-logo.PNG" alt=""></a></li>

        </div>
        </ul>
    </div>
  </nav>
</div>



<ul class="sidenav" id="mobile-demo">
<li><a href="sass.html">Accueil</a></li>
<li class="input-field marge-search color grey">
  <input id="search" type="search" required>
  <label class="label-icon icon-searc" for="search"><i class="material-icons">search</i></label>
  <i class="material-icons icon-search">close</i>
</li>
<li><a href="collapsible.html">panier</a></li>
<li><a href="mobile.html">Mon Compte</a></li>
</ul>

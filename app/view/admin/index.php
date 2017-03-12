<?php
if(!defined("_BASE_URL")) die("Ressource interdite !");?>

<?php include 'app/view/layout/admin/header.php' ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Accueil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Liste <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Test</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon Profil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Mes Messages</a></li>
            <li><a href="#">Nous Contacter</a></li>
            <li><a href="#">Modifier le Profil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="BO">
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="<?php if(!isset($_GET['tab'])){echo 'active';}?>"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Liste des logements</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Liste des utilisateurs</a></li>
            <li role="presentation" class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 'com') {echo 'active';} ?>"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Gérer les commentaires</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Modifier un logement</a></li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane <?php if(!isset($_GET['tab'])){echo 'active';}?>" id="home"><?php include ('app/view/admin/logements.php');?></div>
            <div role="tabpanel" class="tab-pane" id="profile"><?php include('app/view/admin/users.php');?></div>
            <div role="tabpanel" class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 'com') {echo 'active';} ?>" id="messages"><?php include('app/view/layout/admin/commentaires.php');?></div>
            <div role="tabpanel" class="tab-pane" id="settings">test4</div>
            <div role="tabpanel" class="tab-pane" id="settings">test5</div>

        </div>

    </div>
</div>


<?php include('app/view/layout/footer.php'); ?>

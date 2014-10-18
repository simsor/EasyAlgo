<?php
if (!isset($_POST['mail']))
{
?>

  <h2 class="col-lg-4 col-lg-offset-4">Donnez-nous vos impressions !</h2>

  <form action="#" method="POST" role="form" class="col-lg-4 col-lg-offset-4">
    <div class="form-group">
      Votre nom :
      <input type="text" name="nom" class="form-control" />
    </div>

    <div class="form-group">
      Votre prénom :
      <input type="text" name="prenom" class="form-control" />
    </div>

    <div class="form-group">
      Votre adresse e-mail :
      <input type="mail" name="mail" class="form-control" />
    </div>

    <div class="form-group">
      Message :
      <textarea name="message" placeholder="Vos mots d'amour" class="form-control"></textarea>
    </div>

    <input type="submit" class="btn btn-success col-lg-4">
  </form>
<?php
}
else
{ ?>

  <div class="col-lg-4 col-lg-offset-4">
    <p>Merci pour votre feedback !</p>
  </div>

<?php
}
?>

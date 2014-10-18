<div class="container">
  <?php

  if (!isset($_GET['id']))
  {
    require "pages/index.inc.php";
  }
  else
  {
    $page = $_GET['id'];
    switch($page)
      {
      case 0:
	require "includes/pages/index.inc.php";
	break;

      case 1:
	require "includes/pages/formulaire.inc.php";
	break;

      case 2:
	require "includes/pages/contact.inc.php";
	break;

      default:
	require "includes/pages/404.inc.php";
	break;
      }
  }

  ?>
</div>

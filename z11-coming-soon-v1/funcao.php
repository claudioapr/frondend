<?php require_once 'database.php'; ?>

<?php
/**
 *  Cadastro de email
 */
function add() {

  if (!empty($_POST['email'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $email = $_POST['email'];
    $email['created'] = $today->format("Y-m-d H:i:s");
    
    save('email', $email);
    header('location: index.php');
  }
}

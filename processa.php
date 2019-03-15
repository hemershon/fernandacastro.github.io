<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

      require 'vendor/autoload.php';

      $from = new SendGrid\Email(null, "contatocustodialegal@gmail.com");
      $subject = "Mensagem de contato";
      $to = new SendGrid\Email(null, "hemershon@gmail.com");
      $content = new SendGrid\Content("text/html", "Olá Rita, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
      $mail = new SendGrid\Mail($from, $subject, $to, $content);

      //Necessário inserir a chave
      $apiKey = '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';
      $sg = new \SendGrid($apiKey);

      $response = $sg->client->mail()->send()->post($mail);
      echo <h1>"Mensagem enviada com sucesso.";

      ?>

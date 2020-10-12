<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form  action="thanks.php"  method="post">
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="user_name">
        </div>
        <div>
          <label  for="prenom">Prenom:</label>
          <input  type="text"  id="prenom"  name="first_name">
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label for="select">Subject</label>
            <select name="select" id="select">
                <option>Contacter un conseiller
                <option>Obtenir un financement
            </select>
        </div>
        <div>
          <label  for="message">Message :</label>
          <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div>
        <label  for="number">Numéro :</label>
          <input  type="text"  id="number"  name="phone_number">
        </div>
        <div  class="button">
          <button  type="submit">Envoyer votre message</button>
        </div>
       
       


      </form>

    
</body>
</html>
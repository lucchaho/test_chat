<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8" />
</head>

<body>
   <div id="inscription">
      <form method="post" action="../controller/connectioncontroller.php">
         <center>
            <table>
               <tr><td><label for="prenom">Prénom :</label><input type="text" name="prenom" required autofocus /></td></tr>
               <tr><td><label for="nom">Nom :</label><input type="text" name="nom" required /></td></tr>
               <tr><td><label for="email">E-Mail :</label><input type="email" name="email" required /></td></tr>
               <tr><td><label for="pseudo">Pseudo :</label><input type="text" name="pseudo" required /></td></tr>
               <tr><td><label for="password">Mot de passe :</label><input id="pwd1" type="password" name="password" required /></td></tr>
               <tr><td><input type="submit" value="S'inscrire !"/></tr></td>
            </table>
         </center>
      </form>
   </div>
</tr>
</table>
</center>
</form>
</div>
</body>
</html>
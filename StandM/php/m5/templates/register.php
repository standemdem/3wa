<h1>INSCRIPTION</h1>

<form method="POST" action="">
  <fieldset>
    <legend>Identité et coordonnées</legend>
    <label>Last Name</label><input type="text" name="last_name" placeholder="votre nom"/>
    <label>First Name</label><input type="text" name="first_name" placeholder="votre prénom"/>
    <label>Date de naissance</label><input type="date" name="birthdate"/>
    <label>Adresse</label><input type="text" name="address" />
    <label>Ville:</label><input type="text" name="city"/>
    <label>Code Postal:</label><input type="text" name="postalCode"/>
    <label>Téléphone</label><input type="number" name="phone"/>
  </fieldset>
  <fieldset>
    <legend>Informations d'authentification</legend>
    <label>Email</label><input type="email" name="email" placeholder="votremail@votrehebergeur.com"/>
    <label>Password</label><input type="password" name="password" placeholder="votre password"/>
  </fieldset>
  <input type="submit" value="s'inscrire"/>
  <p>Déjà inscrit ? <a href="http://localhost/StandM/php/m5/connexion">vous connecter</a></p>
</form>

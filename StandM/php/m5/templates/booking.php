<h2>Réservation</h2>

<form method="POST" action="">
  <fieldset>
    <legend>informations</legend>
    <label>Date de réservation</label>
    <p><input type="date" name="date"/> à <input type="number" name="hour" placeholder="h" min="10" max="23" /><input type="number" name="minute" min="0" max="59"/></p>
    <label>Nombre de couverts</label><input type="number" />
    <input type="submit" />
  </fieldset>
</form>

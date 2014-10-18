<form action="" role="form">
  <fieldset>
    <div class="form-group">
      <legend>Cartouche</legend>
        <select id="type" name="type" class="form-control">
          <option value="procedure">Procédure</option>
          <option value="fonction">Fonction</option>
          <option value="dejacodee">Déjà Codée</option>
      </select>
      <label>Définition</label>
      <textarea cols="40" rows="2" name="definition" id="definition" class="form-control" placeholder="définition"></textarea>
      <label for="entree">Paramètre d'entrée</label>
      <textarea cols="40" rows="1" name="entree" id="entree" class="form-control" placeholder="Paramètre en Entrée"></textarea>
      <input type="submit" value="+"/>
      <br/>
      <label for="sortie">Paramètre de Sortie</label>
      <textarea cols="40" rows="1" name="sortie" id="sortie" class="form-control" placeholder="Paramètre en Sortie"></textarea>
      <input type="submit" value="+"/>
      <br/>
      <label for="precondition">Pré-condition</label>
      <textarea cols="40" rows="1" name="precondition" id="precondition" class="form-control" placeholder="Pré-condition"></textarea>
      <input type="submit" value="+"/>
      <br/>
      <label for="postcondition">Post-Condition</label>
      <textarea cols="40" rows="1" name="postcondition" id="precondition" class="form-control" placeholder="Post-Condition"></textarea>
      <input type="submit" value="+"/>
    </div>
  </fieldset>

  <fieldset>
    <legend>Algo</legend>
    <div class="form-group">
      <textarea cols="40" rows="15" name="algo" id="algo" class="form-control" placeholder="Tapez votre code algo"></textarea>
    </div>
  </fieldset>

  <fieldset>
    <legend>Code</legend>
    <div class="form-group">
      <textarea cols="40" rows="15" name="code" id="code" class="form-control" placeholder="Tapez votre code"></textarea>
    </div>
    <div class="form-group">
      <label for="langage">Langage de programmation</label>
      <select id="langage" name="language" class="form-control">
        <option value="c">C</option>
        <option value="cpp">C++</option>
        <option value="py">Python</option>
        <option value="java">Java</option>
      </select>
      <p>
       <input type="checkbox" name="numerotation" id="numerotation" /> <label for="numerotation">Numérotation des Lignes</label><br />
    </div>
  </fieldset>

  <div class="form-group">
    <input type="submit" class="btn btn-success">
  </div>
</form>

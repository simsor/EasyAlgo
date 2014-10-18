<script src="js/form.js"></script>

<form action="traitementFormulaire.inc.php" method="post" role="form">
	<fieldset>
		<div class="form-group">
			<legend>
				Cartouche
			</legend>
			<select id="type" name="type" class="form-control" onchange="changeTypeCartouche()">
				<option value="procedure">Procédure</option>
				<option value="fonction">Fonction</option>
				<option value="dejacodee">Déjà Codée</option>
			</select>
			<div id="cartouche1">
				<label>Définition</label>
				<textarea cols="40" rows="2" name="definition" id="definition" class="form-control" placeholder="définition"></textarea>
				<div id="blocEntree">
					<label for="entree">Paramètre d'entrée</label><a class="badge plus">+</a><a class="badge moins">-</a>
					<textarea cols="40" rows="1" name="entree1" id="entree" class="form-control" placeholder="Paramètre en Entrée"></textarea>
					<br/>
				</div>
				<div id="blocSortie">
					<label for="sortie">Paramètre de Sortie</label><a class="badge plus">+</a><a class="badge moins">-</a>
					<textarea cols="40" rows="1" name="sortie1" id="sortie" class="form-control" placeholder="Paramètre en Sortie"></textarea>
					<br/>
				</div>
				<div id="blocPreCond">
					<label for="precondition">Pré-condition</label><a class="badge plus">+</a><a class="badge moins">-</a>
					<textarea cols="40" rows="1" name="precondition1" id="precondition" class="form-control" placeholder="Pré-condition"></textarea>
					<br/>
				</div>
				<div id="blocPostCond">
					<label for="postcondition" class="postCond">Post-Condition</label><a class="badge plus">+</a><a class="badge moins">-</a>
					<textarea cols="40" rows="1" name="postcondition1" id="precondition" class="form-control postCond" placeholder="Post-Condition" ></textarea>
				</div>
			</div>
			<div id="cartouche2">
				<label>Cartouche</label>
				<textarea cols="40" rows="15" name="cartouche" id="cartouche" class="form-control" placeholder="Tapez votre cartouche"></textarea>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend>
			Algo
		</legend>
		<div class="form-group">
			<textarea cols="40" rows="15" name="algo" id="algo" class="form-control" placeholder="Tapez votre code algo"></textarea>
		</div>
	</fieldset>

	<fieldset>
		<legend>
			Code
		</legend>
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
				<input type="checkbox" name="numerotation" id="numerotation" />
				<label for="numerotation">Numérotation des Lignes</label>
				<br />
		</div>
	</fieldset>

	<div class="form-group">
		<input type="submit" class="btn btn-success">
	</div>
</form>

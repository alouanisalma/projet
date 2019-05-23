<aside class="sidebar">
						<div class="side">
							<div class="form-group">
								<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
								<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
							</div>
						</div>
						
							
						<div class="side">
							<h2 class="sidebar-heading">Subscribe to our newsletter</h2>
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control form-email text-center" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
									</div>
								</div>
								<p>
									<ul class="colorlib-social-icons text-center">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</p>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
		<p>
		
		<form name="f" method="post" action="http://localhost/wordpress/enseignant/enseignant-effecte/">
<label for="your_fields[select]">Select Module</label>
<br>
<select name="s" id="your_fields[select]">
 <option value="option-one" <?php selected($meta['select'],'option-one'); ?>>Programmation Objet Avancé-DSI2</option>
 <option value="option-two" <?php selected($meta['select'],'optiontwo');?>>Programmation Événementielle-DSI2</option>
 <option value="option-two" <?php selected($meta['select'],'optionthree');?>>Concepts Du Génie Logiciel -DSI2</option>
 <option value="option-two" <?php selected($meta['select'],'optionfour');?>>Conception Orienté Objet (UML) -DSI2</option>
 <option value="option-two" <?php selected($meta['select'],'optionfive');?>>Develloppement Cote Serveur-DSI2</option>
 <option value="option-two" <?php selected($meta['select'],'optionsix');?>>Programmation Objet -DSI2</option>
 <option value="option-two" <?php selected($meta['select'],'optionseven');?>>base de donnée-DSI2</option>
 <option value="option-two" <?php selected($meta['select'],'optioneight');?>>C2I -TI1</option>
 <option value="option-two" <?php selected($meta['select'],'optionnine');?>>Fondement Du Multimédia -TI1</option>
<option value="option-two" <?php selected($meta['select'],'optionten');?>>algorithme et structure de donnees _TI</option>
<option value="option-two" <?php selected($meta['select'],'optioneleven');?>>Mathématique -TI11</option>
<p>Switch statement for options.</p>
</select>
</p>
<p>
<label for="your_fields[text]">enseignant effecté: </label>
<select name="s1">
<option>manel aloumi </option>
<option> hela jbeli</option>
<option>hejer bacouch </option>
<option>ikram chebi </option>
<option>mohamed taher ben bahri </option>
<option>ramzi ben elhadj said </option>
<option>ikram chebi </option>
<option>mohamed saleh meddeb </option>
<option>mohamed amine ferjeni </option>
<option>fatma kaabi </option>
<option>insaf </option>
</select><br>
<label for="your_fields[text]">charge horaire : </label>
<input type="checkbox" name="r1" value="cheched">3h
<input type="checkbox" name="r2" value="">1h30min
<br>

<input type="button" name="b1" value="valider">
</p>
</form>
</body>
<html>
	

<div class="blog-post">
<h2 class="blog-post-title"><?php the_title() ?></h2>
<p class="blog-post-meta"><?php the_date(); ?> par <a href="#">
	<?php the_author(++); ?></a></p>
<?php the_content(); ?>
</div><!-- /.blog-post -->
<p>
<label for="matiere[select]">Select Module</label>
<br>
<select name="matiere[select]" id="matiere[select]">
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
 
</select>
</p>
<p>
<label for="matiere[text]">enseignant effecté </label>
<br>
<input type="text" name="matiere[text]" id="matiere[text]" class="regular-text"
value="<?php echo $meta['text']; ?>" >
</p>
<p>
<label for="matiere[text]">charge horaire </label>
<br>
<input type="text" name="matiere[text]" id="matiere[text]" class="regular-text"
value="<?php echo $meta['text']; ?>" >
</p>
the_author(); ?></a></p>
<?php the_content(<html>

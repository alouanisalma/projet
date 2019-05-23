<p>
<label for="your_fields[select]">Select Module</label>
<br>
<select name="your_fields[select]" id="your_fields[select]">
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
<label for="your_fields[text]">enseignant effecté </label>
<br>
<input type="text" name="your_fields[text]" id="your_fields[text]" class="regular-text"
value="<?php echo $meta['text']; ?>" >
</p>
<p>
<label for="your_fields[text]">charge horaire </label>
<br>
<input type="text" name="your_fields[text]" id="your_fields[text]" class="regular-text"
value="<?php echo $meta['text']; ?>" >
</p>
<p>
<label for="your_fields[image]">Image Upload</label><br>
<input type="text" name="your_fields[image]" id="your_fields[image]" class="meta-image
regular-text" value="<?php echo $meta['image'];?>">
<input type="button" class="button image-upload" value="Browse">
</p>
<div class="image-preview"><img src="<?php echo $meta['image'];?>" style="max-width:
250px;"></div>
<script>
jQuery(document).ready(function ($) {
// Instantiates the variable that holds the media library frame.
var meta_image_frame;
// Runs when the image button is clicked.
$('.image-upload').click(function (e) {
 e.preventDefault();
 var meta_image = $(this).parent().children('.meta-image');
 // If the frame already exists, re-open it.
 if (meta_image_frame) {
 meta_image_frame.open();
 return;
 }
 // Sets up the media library frame
 meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
 title: meta_image.title,
 button: {
 text: meta_image.button
 }
 });
 // Runs when an image is selected.
 meta_image_frame.on('select', function () {
 // Grabs the attachment selection and creates a JSON representation of
the model.
 var media_attachment =
meta_image_frame.state().get('selection').first().toJSON();
 // Sends the attachment URL to our custom image input field.
 meta_image.val(media_attachment.url);
 });
 // Opens the media library frame.
 meta_image_frame.open();
});
});
</script>


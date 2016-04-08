#Getting Started

LabelFloat.css is a plugin developed by Dave Berning. This plugin makes creating exciting animated forms quick and easy. It's based off of Chris Coyier's take on stylized floating labels; using labels as placeholders. Installation is simple and creating your webform is just as easy (as long as you follow the proper HTML structure). Let's get started!

LabelFloat.css is compatible with *Chrome, Firefox, Safari, Opera, Edge, and Internet Explorer 9 and up*.

<<<<<<< HEAD
#Dependancies
When using LabelFloat.css, make sure you include it's dependancies. These can be referenced in the *<head>* or the at end before the closing *</body>* tag.
=======
##1. Link up LabelFloat.css stylesheet or...
```html
<link rel="stylesheet" href="css/LabelFloat.css">
```
###1a. Install with Bower
```
$ bower install labelfloat-css
```

##2. Link Latest jQuery Library, jQuery Validate, Modernizr and Selectivr CDN's
>>>>>>> origin/master
```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script><!-- jQuery Validate CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script><!-- Modernizr CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script><!-- Selectivir CDN -->
```

This is optional, but you can reference LabelFloat.js instead of using **Modernizr** and **Selectivizr**. If you want to limit load times and request this is ideal.

```html
<script src="js/LabelFloat.js"></script>
```

##Reference LabelFloat.css stylesheet
```html
<link rel="stylesheet" href="css/LabelFloat.css">
```

##Or, install with Bower
```
$ bower install labelfloat-css
```


##Initialize jQuery Validate
```html
<script>
	$("#form-ID").validate({
		errorPlacement: function(error, element) {
			error.appendTo(element.prev());
		}
	});
</script>
```

##Structure your HTML form
```html
<form>
	<div><!-- required wrapping div -->
		<input id="input-id" name="input-name" type="text">
		<label class="valid" for="input-name"><span>First Name</span></label><!-- Required class="valid" and span tag -->
	</div>
</form>
```
Labels *must* come directly after the input or textarea. If you add a <br> after your input, this will **not** work. The text inside the <label> tags *must* be wrapped in <span> tags.

###Using radio buttons, checkboxes, or select option dropdowns
```html
<div class="lf-radio"><!-- required class and div wrap. Each radio button in its own div. -->
	<input id="radio-id" name="radio-name" type="radio">
	<label class="valid" for="radio-name">Radio Button 1</label>
</div>

<div class="lf-radio lf-radio-hollow"><!-- radio button with border, hollow center -->
	<input id="radio-id" name="radio-name" type="radio">
	<label class="valid" for="radio-name">Radio Button 1</label>
</div>

<div class="lf-checkbox"><!-- required class and div wrap. Each checkbox in its own div. -->
	<input id="checkbox-id" name="checkbox-name" type="checkbox">
	<label class="valid" for="checkbox-name">Checkbox 1</label>
</div>

<div class="lf-checkbox lf-checkbox-check"><!-- checkbox with check -->
	<input id="checkbox-id" name="checkbox-name" type="checkbox">
	<label class="valid" for="checkbox-name">Checkbox 1</label>
</div>

<div class="lf-select"><!-- required class and div wrap -->
	<select id="dropdown" name="dropdown">
		<option>Option 1</option>
		<option>Option 2</option>
	</select>
</div>
```

#When using with Bootstrap
LabelFloat.css is also compatible with Bootstrap and all it's form classes.

##Reference Bootstrap if needed
```html
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
```

<<<<<<< HEAD
###Wrap Bootstrap Form with Wrapper Class
The same basic HTML structure applies, just make sure you wrap your entire form with .bootstrap.
=======
##2. Link Form Float Stylesheet or...
```html
<link rel="stylesheet" href="css/LabelFloat.css">
```
###2a. Install with Bower
```
$ bower install labelfloat-css
```
##3. Link Latest JQuery Library, jQuery Validate, Modernizr and Selectivr CDN's
```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script><!-- jQuery Validate CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script><!-- Modernizr CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script><!-- Selectivir CDN -->
```

###3a. Link up LabelFloat.js (optional)
This is optional, but you can reference LabelFloat.js instead of using Modernizr and Selectivizr. If you want to limit load times and request this can be ideal.
```html
<script src="js/LabelFloat.js"></script>
```
##4. Initialize jQuery Validate
```html
<script>
		$("#form-ID").validate({
			errorPlacement: function(error, element) {
		        error.appendTo(element.prev());
		    }
		});
</script>
```
##4. Create Basic Form Structure*
>>>>>>> origin/master
```html
<div class="bootstrap"><!-- required class and form wrap -->
	<form class="row">

		<div class="col-lg-6">
			<div class="form-group">
				<input id="firstname" class="form-control" name="firstname" type="text">
				<label class="valid" for="firstname"><span>First Name</span></label>
			</div><!-- end form-group -->
		</div><!-- end col -->

	</form>
</div><!-- end bootstrap -->
```
*Structure your Bootstrap form anyway you like. Any column size, any number of <div>'s etc.

#Customizations
```css
/* COLOR CODES: FIND AND REPLACE
	----------------------------------------
	    VALID FOCUS STATE: #366b7b; (demo: blue)
	    VALID NOT FOCUS STATE: #ccc; (demo: grey)
	    INVALID FOCUS STATE: #DA5757; (demo: red)

	    SUBMIT BUTTON: #747474;
	    SUBMIT BUTTOB HOVER: #464646;

	    *NOTE: Any color you find and replace
	    will also replace the border color
	    for its respected states;
	--------------------------------------*/
```
Change the colors to the focus, inactive, and invalid focus states! Just find and replace the above HEX codes with another or other color value.

#Updates Planned
Version 2 will come with refactored code and SASS support. Bower and other web packages are planning to be supported soon.

#Change Log
* **V1.1.1:** Bower support. Install away!
* **V1.1:** Updated base label float css classes from "labelfloat-" to "lf-". Also added an additional style for radio buttons and checkboxes.
* **V1:** Uploaded LabelFloat.css and LabelFloat.js

#Support
For support, please email: dave@daveberning.com
Visit: http://labelfloat.daveberning.com

<<<<<<< HEAD
# License
=======
# License 
>>>>>>> origin/master
Code released under the [MIT license](https://github.com/daveberning/LabelFloat.css/blob/master/LICENSE.md).

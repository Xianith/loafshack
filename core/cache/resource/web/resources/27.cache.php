<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 27,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'form',
    'longtitle' => 'Form',
    'description' => '',
    'alias' => 'form',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<div style="height:74px"></div>

[[inc-form]]

<style>
.btn { cursor: pointer; }

.attending, .rsvp, .sadface { display: none; }

.btn-outline-food {
color: black;
background-color: white;
cursor:pointer;
}

.btn-outline-food:hover, .btn-outline-food:active, .btn-outline-food:focus {
color: #5cb85c;
background-color: white;
border: 1px solid #5cb85c;
}

.btn-outline-food.active{
color: #5cb85c;
background-color: rgba(92, 184, 92, 0.18);
font-weight: bold;
border: 1px solid #5cb85c;
}

input[type="name"]::-webkit-input-placeholder {
  color: rgba(0,0,0,.15);
}

input[type="email"]::-webkit-input-placeholder {
  color: rgba(0,0,0,.15);
}

.btn {
cursor: pointer;
}

.btn-block+.btn-block {
   margin-top: 0;
}
</style>

[[!FormIt?
&hooks=`spam,FormItSaveForm,redirect` 
&redirectTo=`43`
&formName =`[[+type]]`
&store=`1`
&formFields=`name,email,text,food`
&fieldNames=`name==Name,email==Email,text==Message,food==Food`
&validate=`name:required,
  email:email:required,
type:required,
  text:stripTags`
 ]]

[[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]

[[+type=\'message\']]

<div class="container">
  <form action="[[~[[*id]]]]" method="post" class="contactForm">

	<div class="form-group [[!+fi.error.name:notempty=`has-danger`]]">
		<label for="name" class="col-form-label">Full Name</label>
			<input type="name" name="name" id="name" class="form-control-lg form-control form-control-danger form-control-success" placeholder="Benjamin Alex Piscitelli" value="[[!+fi.name]]">
			<label for="name" class="error">[[!+fi.error.name]]</label>
	</div>

	<div class="form-group [[!+fi.error.email:notempty=`has-danger`]]">
		<label for="email" class="col-form-label">Email Address</label>
			<input type="email" name="email" class="form-control form-control-danger form-control-success" id="email" placeholder="Benjamin.Alex.Piscitelli@gmail.com" value="[[!+fi.email]]">
			<label for="email" class="error">[[!+fi.error.email]]</label>
	</div>

	<div class="form-group">
		<label for="message" class="col-form-label">Message to the Bride and Groom</label>
			<textarea class="form-control" name="text" id="exampleTextarea" rows="12" value="[[!+fi.text]]">[[!+fi.text]]</textarea>
    </div>

<!--<style>
select {
width: 100%;
    overflow: auto;
    border: 0;
height:36px;
margin-bottom:5px;
}

option {
    width: 50%;
    float: left;
}

.ryes {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    border-right: 0;
}

.rno {
border-bottom-left-radius: 0;
    border-top-left-radius: 0;
}


</style>

<fieldset class="form-group">
<select name="type" size="2">
<div class="btn-group btn-block" data-toggle="buttons" name="type">
   <option class="btn btn-outline-primary ryes" value="rsvp" [[!+fi.type:FormItIsSelected=`rsvp`]]>This is my RSVP</option>
   <option class="btn btn-outline-primary rno"value="message" [[!+fi.type:FormItIsSelected=`message`]]>I just want to send a message</option>
</div>
</select>-->

<fieldset class="form-group">
<div class="btn-group btn-block" data-toggle="buttons">
  <label class="btn btn-outline-primary btn-block ryes">
    <input type="radio" name="type" autocomplete="off" value="rsvp" [[!+fi.type:FormItIsChecked=`rsvp`]]>This is my RSVP
  </label>
  <label class="btn btn-outline-primary btn-block btn-block rno active">
    <input type="radio" name="type" autocomplete="off" value="message" checked [[!+fi.type:FormItIsChecked=`message`]]>I just want to send a message
  </label>
</div>

<div class="rsvp">
<fieldset class="form-group">
      <label>Are you able to attend?</label>
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-outline-success ayes">
    <input type="radio" name="type" autocomplete="off" value="rsvp-yes" [[!+fi.type:FormItIsChecked=`rsvp-yes`]]>Yes
  </label>
  <label class="btn btn-outline-danger ano">
    <input type="radio" name="type" autocomplete="off" value="rsvp-no" [[!+fi.type:FormItIsChecked=`rsvp-no`]]>No
  </label>
</div>

<div class="sadface">
WHY U NO ATTEND!?</br>
<img src="http://i3.kym-cdn.com/entries/icons/original/000/004/006/y-u-no-guy.jpg">
</div>

<div class="attending">
    <fieldset class="form-group">
      <legend>Your choice of food</legend>
<div class="btn-group btn-group-justified btn-block" role="group" data-toggle="buttons">
  <label class="btn btn-outline-secondary btn-outline-food btn-block">
    <input type="radio" name="food" id="food1" autocomplete="off" value="steak">
The Steak!
<br/><br/><img src="http://www.omahasteaks.com/gifs/os/dd_01_filet.jpg" style="height:200px;">
<br/><br/>This is a scrumptious steak!
<br/>And awesome stuff!
  </label>
  <label class="btn btn-outline-secondary btn-outline-food btn-block">
    <input type="radio" name="food" id="food2" autocomplete="off" value="chicken">
The Chicken!
<br/><br/><img src="http://images.all-free-download.com/images/graphicthumb/chicken_picture_1_167099.jpg" style="height:200px;">
<br/><br/>This is a delicious chicken!
<br/>With some awesome glaze.
  </label>
  <label class="btn btn-outline-secondary btn-outline-food btn-block">
    <input type="radio" name="food" id="food3" autocomplete="off" value="pancakes">
The Pancakes!
<br/><br/><img src="http://www.ihop.com/-/media/DineEquity/IHop/Images/Menu/MenuItems/Pancakes/Strawberry-Banana-Pancakes/Strawberry_Banana_Pancakes.ashx" style="height:200px;">
<br/><br/>These are awesome sauce pancakes!
<br/>With all the syrupy goodness.  
</label>
</div>
</div>
</div>


	<div class="form-group">
<button type="submit" class="btn btn-outline-success btn-lg col-12">Submit</button>
</div>
  </form>
</div>',
    'richtext' => 1,
    'template' => 3,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 3,
    'createdon' => 1493258024,
    'editedby' => 3,
    'editedon' => 1496249310,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1493407200,
    'publishedby' => 3,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'form.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'header-image' => 
    array (
      0 => 'header-image',
      1 => '',
      2 => 'string',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../favicon.ico">
	<meta charset="UTF-8">
	<title>Loafshack Life</title>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700|Playfair+Display:400,700|Poppins:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="[[!++site_url]]css/animate.css">
  <link rel="stylesheet" href="[[!++site_url]]css/styles.css">


</head>
  <body>

  <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand" href="[[!++site_url]]">

        <svg id="ring_home" data-name="ring home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 115.43 79.35"><title>ring2</title><path d="M103.44,48.3a5.75,5.75,0,0,1,1-1,12.17,12.17,0,0,1,1.26-.8,9.26,9.26,0,0,0,2.16-1.61,4.85,4.85,0,0,0,1-5,4.14,4.14,0,0,0-1.17-1.62l2.64-.22C106,25.88,97.45,20.59,84.59,22.32l1,2.42a4.16,4.16,0,0,0-2.06-.33,4.85,4.85,0,0,0-4,3.21,9.25,9.25,0,0,0-.45,2.65A12.2,12.2,0,0,1,79,31.76a5.74,5.74,0,0,1-.4,1.29,27.73,27.73,0,1,0,24.82,15.17Zm-1.87-6.52a1,1,0,0,0,1.94-.5h0a1.48,1.48,0,0,1,.23-1.14,1.74,1.74,0,0,1,1.1-.8,2.2,2.2,0,0,1,2.26,1.38,2.85,2.85,0,0,1-.61,2.91,7.63,7.63,0,0,1-1.76,1.27,13.8,13.8,0,0,0-1.47.94,7.54,7.54,0,0,0-.79.69,27.5,27.5,0,0,0-6.19-7.13l6-.51-.15.25a3.48,3.48,0,0,0-.56,2.61ZM81,32.15a13.9,13.9,0,0,0,.17-1.74,7.62,7.62,0,0,1,.33-2.14,2.85,2.85,0,0,1,2.31-1.87,2.2,2.2,0,0,1,2.26,1.38,1.74,1.74,0,0,1-.21,1.34,1.48,1.48,0,0,1-.91.72,1,1,0,0,0,.43,2h0a3.48,3.48,0,0,0,2.19-1.66,3.88,3.88,0,0,0,.2-.33l2.31,5.67a27.5,27.5,0,0,0-9.25-2.32A7.53,7.53,0,0,0,81,32.15ZM67.91,78.48a20.73,20.73,0,1,1,28.5-6.87h0A20.73,20.73,0,0,1,67.91,78.48Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M35.31,37.17a27.73,27.73,0,1,0,29.09,0l.08,0C55.69,32,46.07,31.39,35.31,37.17Zm14.6,44.32A20.73,20.73,0,1,1,70.64,60.76h0A20.73,20.73,0,0,1,49.91,81.49Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M103.58,20.13a1.5,1.5,0,0,0,2.06-.5l1.56-2.56a1.5,1.5,0,1,0-2.56-1.56l-1.56,2.56A1.5,1.5,0,0,0,103.58,20.13Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M111.14,27.55a1.5,1.5,0,0,0,2,.49l.85-.52A1.5,1.5,0,0,0,112.46,25l-.85.52A1.5,1.5,0,0,0,111.14,27.55Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M121.21,19.66a1.49,1.49,0,0,0-.39.35,1.48,1.48,0,0,0-.49.18l-3.49,2.14a1.48,1.48,0,1,0,1.53,2.53l3.51-2.11a1.49,1.49,0,0,0,.39-.36A1.47,1.47,0,1,0,121.21,19.66Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M114.22,35.7a1.5,1.5,0,0,0,1.73,1.23h0l4.47-.79a1.51,1.51,0,1,0-.53-3h0l-4.47.79A1.5,1.5,0,0,0,114.22,35.7Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M123.31,35.31a1.49,1.49,0,0,0,1,.21l.79-.14a1.51,1.51,0,1,0-.53-3l-.79.14a1.5,1.5,0,0,0-.52,2.77Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M37.5,31.82a1.5,1.5,0,0,0,1.27-1.7l-.43-3a1.5,1.5,0,0,0-3,.43l.43,3A1.5,1.5,0,0,0,37.5,31.82Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M36.29,23.4a1.5,1.5,0,0,0,1.27-1.7l-.16-1.09a1.5,1.5,0,1,0-3,.43l.16,1.09A1.5,1.5,0,0,0,36.29,23.4Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M26.4,33.55l.52.86A1.5,1.5,0,0,0,29.54,33l-.06-.1L29,32a1.5,1.5,0,0,0-2.63,1.45Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M21.66,25.7a1.49,1.49,0,0,0,.3.36,1.48,1.48,0,0,0,.17.43L24,29.62a1.5,1.5,0,0,0,2.63-1.45l-.06-.1L24.7,25a1.48,1.48,0,0,0-.3-.35,1.48,1.48,0,0,0-.17-.43l-.52-.86a1.5,1.5,0,0,0-2.63,1.45l.06.1Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M19.58,42.53A1.51,1.51,0,0,0,21.24,40h0l-3.79-2.49A1.51,1.51,0,0,0,15.79,40Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M12.33,37.84A1.51,1.51,0,0,0,14,35.32l-.69-.45a1.51,1.51,0,0,0-1.66,2.52h0Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/><path d="M63.85,66.25s-4.61-5.79-2.13-7.33,2.13,2.72,2.13,2.72.59-3.15,3.07-3.05S66.92,63.64,63.85,66.25Z" transform="translate(-10.96 -9.16)" style="fill:#fff"/></svg>
<span class="hidden-md-up">Loafshack Wedding</span>

       </a>


       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Us <span class="sr-only">(current)</span></a>
           </li>
           <!--<li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Location
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="#">Ceremony</a>
                     <a class="dropdown-item" href="#">Reception</a>
                     <a class="dropdown-item" href="#">After hours</a>
                   </div>
           </li>-->
           <!--<li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Wedding Party
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="[[!++site_url]]wedding-party/bros.html">Bros</a>
                     <a class="dropdown-item" href="[[!++site_url]]wedding-party/gals.html">Gals</a>
                     <!--<a class="dropdown-item" href="[[!++site_url]]wedding-party/other-vips.html">Other VIPs</a>-->
                   </div>
           </li>-->
           <!--<li class="nav-item">
             <a class="nav-link" href="[[!++site_url]]gifts.html">Gifts & Shit</a>
           </li>-->
           <!--<li class="nav-item">
             <a class="nav-link" href="#">FAQ</a>
           </li>-->
           <!--<li class="nav-item">
             <a class="nav-link" href="[[!++site_url]]form.html">Holla!</a>
           </li>-->

         </ul>
       </div>
     </nav>

  <div class="container body-container">

<div style="height:74px"></div>



<style>
.btn { cursor: pointer; }

.attending, .rsvp, .sadface { display: none; }

.btn-outline-food {
color: black;
background-color: white;
cursor:pointer;
}

.btn-outline-food:hover, .btn-outline-food:active, .btn-outline-food:focus {
color: #5cb85c;
background-color: white;
border: 1px solid #5cb85c;
}

.btn-outline-food.active{
color: #5cb85c;
background-color: rgba(92, 184, 92, 0.18);
font-weight: bold;
border: 1px solid #5cb85c;
}

input[type="name"]::-webkit-input-placeholder {
  color: rgba(0,0,0,.15);
}

input[type="email"]::-webkit-input-placeholder {
  color: rgba(0,0,0,.15);
}

.btn {
cursor: pointer;
}

.btn-block+.btn-block {
   margin-top: 0;
}
</style>

[[!FormIt?
&hooks=`spam,FormItSaveForm,redirect` 
&redirectTo=`43`
&formName =`[[+type]]`
&store=`1`
&formFields=`name,email,text,food`
&fieldNames=`name==Name,email==Email,text==Message,food==Food`
&validate=`name:required,
  email:email:required,
type:required,
  text:stripTags`
 ]]

[[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]

[[+type=\'message\']]

<div class="container">
  <form action="form.html" method="post" class="contactForm">

	<div class="form-group [[!+fi.error.name:notempty=`has-danger`]]">
		<label for="name" class="col-form-label">Full Name</label>
			<input type="name" name="name" id="name" class="form-control-lg form-control form-control-danger form-control-success" placeholder="Benjamin Alex Piscitelli" value="[[!+fi.name]]">
			<label for="name" class="error">[[!+fi.error.name]]</label>
	</div>

	<div class="form-group [[!+fi.error.email:notempty=`has-danger`]]">
		<label for="email" class="col-form-label">Email Address</label>
			<input type="email" name="email" class="form-control form-control-danger form-control-success" id="email" placeholder="Benjamin.Alex.Piscitelli@gmail.com" value="[[!+fi.email]]">
			<label for="email" class="error">[[!+fi.error.email]]</label>
	</div>

	<div class="form-group">
		<label for="message" class="col-form-label">Message to the Bride and Groom</label>
			<textarea class="form-control" name="text" id="exampleTextarea" rows="12" value="[[!+fi.text]]">[[!+fi.text]]</textarea>
    </div>

<!--<style>
select {
width: 100%;
    overflow: auto;
    border: 0;
height:36px;
margin-bottom:5px;
}

option {
    width: 50%;
    float: left;
}

.ryes {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    border-right: 0;
}

.rno {
border-bottom-left-radius: 0;
    border-top-left-radius: 0;
}


</style>

<fieldset class="form-group">
<select name="type" size="2">
<div class="btn-group btn-block" data-toggle="buttons" name="type">
   <option class="btn btn-outline-primary ryes" value="rsvp" [[!+fi.type:FormItIsSelected=`rsvp`]]>This is my RSVP</option>
   <option class="btn btn-outline-primary rno"value="message" [[!+fi.type:FormItIsSelected=`message`]]>I just want to send a message</option>
</div>
</select>-->

<fieldset class="form-group">
<div class="btn-group btn-block" data-toggle="buttons">
  <label class="btn btn-outline-primary btn-block ryes">
    <input type="radio" name="type" autocomplete="off" value="rsvp" [[!+fi.type:FormItIsChecked=`rsvp`]]>This is my RSVP
  </label>
  <label class="btn btn-outline-primary btn-block btn-block rno active">
    <input type="radio" name="type" autocomplete="off" value="message" checked [[!+fi.type:FormItIsChecked=`message`]]>I just want to send a message
  </label>
</div>

<div class="rsvp">
<fieldset class="form-group">
      <label>Are you able to attend?</label>
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-outline-success ayes">
    <input type="radio" name="type" autocomplete="off" value="rsvp-yes" [[!+fi.type:FormItIsChecked=`rsvp-yes`]]>Yes
  </label>
  <label class="btn btn-outline-danger ano">
    <input type="radio" name="type" autocomplete="off" value="rsvp-no" [[!+fi.type:FormItIsChecked=`rsvp-no`]]>No
  </label>
</div>

<div class="sadface">
WHY U NO ATTEND!?</br>
<img src="http://i3.kym-cdn.com/entries/icons/original/000/004/006/y-u-no-guy.jpg">
</div>

<div class="attending">
    <fieldset class="form-group">
      <legend>Your choice of food</legend>
<div class="btn-group btn-group-justified btn-block" role="group" data-toggle="buttons">
  <label class="btn btn-outline-secondary btn-outline-food btn-block">
    <input type="radio" name="food" id="food1" autocomplete="off" value="steak">
The Steak!
<br/><br/><img src="http://www.omahasteaks.com/gifs/os/dd_01_filet.jpg" style="height:200px;">
<br/><br/>This is a scrumptious steak!
<br/>And awesome stuff!
  </label>
  <label class="btn btn-outline-secondary btn-outline-food btn-block">
    <input type="radio" name="food" id="food2" autocomplete="off" value="chicken">
The Chicken!
<br/><br/><img src="http://images.all-free-download.com/images/graphicthumb/chicken_picture_1_167099.jpg" style="height:200px;">
<br/><br/>This is a delicious chicken!
<br/>With some awesome glaze.
  </label>
  <label class="btn btn-outline-secondary btn-outline-food btn-block">
    <input type="radio" name="food" id="food3" autocomplete="off" value="pancakes">
The Pancakes!
<br/><br/><img src="http://www.ihop.com/-/media/DineEquity/IHop/Images/Menu/MenuItems/Pancakes/Strawberry-Banana-Pancakes/Strawberry_Banana_Pancakes.ashx" style="height:200px;">
<br/><br/>These are awesome sauce pancakes!
<br/>With all the syrupy goodness.  
</label>
</div>
</div>
</div>


	<div class="form-group">
<button type="submit" class="btn btn-outline-success btn-lg col-12">Submit</button>
</div>
  </form>
</div>


  </div>



  </body>
<script src="https://use.typekit.net/xwb0ncj.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="js/wow.js"></script>
  <script type="text/javascript" src="js/instafeed.min.js"></script>
  <script type="text/javascript" src="js/extra.js"></script>
  <script>
  var content = document.getElementById(\'instafeed\');

  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function(){
          if (xhr.readyState==4 && xhr.status==200)
          {
              var data = JSON.parse(xhr.responseText);
              if(data.status == \'ok\'){

                  for(var i=0;i<data.items.length;i++){

                      var output = \'<p class="instafeed-post"><img src="\'+ data.items[i].thumbnail+\'"></p>\';
                      $(\'#instafeed\').append(output);
                  }
              }
          }
      };
  xhr.open(\'GET\',\'http://rss2json.com/api.json?rss_url=https%3A%2F%2Fwebsta.me%2Frss%2Ftag%2Floafshacklife\',true);
  xhr.send();
  </script>

</html>
',
    '_isForward' => false,
    '_jscripts' => 
    array (
      0 => '<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>',
      1 => '<script type="text/javascript" src="form/form-script.js"></script>',
    ),
    '_loadedjscripts' => 
    array (
      '//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' => true,
      'form/form-script.js' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[inc-form]]' => '',
    '[[*id]]' => 27,
    '[[~27]]' => 'form.html',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'inc-form' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'inc-form',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$modx->regClientScript(\'//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\');
$modx->regClientScript(\'form/form-script.js\');',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$modx->regClientScript(\'//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\');
$modx->regClientScript(\'form/form-script.js\');',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'FormIt' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormIt',
          'description' => 'A dynamic form processing snippet.',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\') . \'model/formit/\';
$modx->loadClass(\'FormIt\', $modelPath, true, true);

$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
          'locked' => false,
          'properties' => 
          array (
            'hooks' => 
            array (
              'name' => 'hooks',
              'desc' => 'prop_formit.hooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the form passes validation. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_formit.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, once the form loads. You can pre-set form fields via $scriptProperties[`hook`]->fields[`fieldname`]. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_formit.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set, will not begin form processing if this POST variable is not passed.',
              'area_trans' => '',
            ),
            'validate' => 
            array (
              'name' => 'validate',
              'desc' => 'prop_formit.validate_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of fields to validate, with each field name as name:validator (eg: username:required,email:required). Validators can also be chained, like email:email:required. This property can be specified on multiple lines.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_formit.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<span class="error">[[+error]]</span>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The wrapper template for error messages.',
              'area_trans' => '',
            ),
            'validationErrorMessage' => 
            array (
              'name' => 'validationErrorMessage',
              'desc' => 'prop_formit.validationerrormessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<p class="error">A form validation error occurred. Please check the values you have entered.</p>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A general error message to set to a placeholder if validation fails. Can contain [[+errors]] if you want to display a list of all errors at the top.',
              'area_trans' => '',
            ),
            'validationErrorBulkTpl' => 
            array (
              'name' => 'validationErrorBulkTpl',
              'desc' => 'prop_formit.validationerrorbulktpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li>[[+error]]</li>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'HTML tpl that is used for each individual error in the generic validation error message value.',
              'area_trans' => '',
            ),
            'trimValuesBeforeValidation' => 
            array (
              'name' => 'trimValuesBeforeValidation',
              'desc' => 'prop_formit.trimvaluesdeforevalidation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to trim spaces from the beginning and end of values before attempting validation. Defaults to true.',
              'area_trans' => '',
            ),
            'customValidators' => 
            array (
              'name' => 'customValidators',
              'desc' => 'prop_formit.customvalidators_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of custom validator names (snippets) you plan to use in this form. They must be explicitly stated here, or they will not be run.',
              'area_trans' => '',
            ),
            'clearFieldsOnSuccess' => 
            array (
              'name' => 'clearFieldsOnSuccess',
              'desc' => 'prop_formit.clearfieldsonsuccess_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true, will clear the fields on a successful form submission that does not redirect.',
              'area_trans' => '',
            ),
            'successMessage' => 
            array (
              'name' => 'successMessage',
              'desc' => 'prop_formit.successmessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set, will set this a placeholder with the name of the value of the property &successMessagePlaceholder, which defaults to `fi.successMessage`.',
              'area_trans' => '',
            ),
            'successMessagePlaceholder' => 
            array (
              'name' => 'successMessagePlaceholder',
              'desc' => 'prop_formit.successmessageplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.successMessage',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The placeholder to set the success message to.',
              'area_trans' => '',
            ),
            'store' => 
            array (
              'name' => 'store',
              'desc' => 'prop_formit.store_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true, will store the data in the cache for retrieval using the FormItRetriever snippet.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_formit.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The prefix to use for all placeholders set by FormIt for fields. Defaults to `fi.`',
              'area_trans' => '',
            ),
            'storeTime' => 
            array (
              'name' => 'storeTime',
              'desc' => 'prop_formit.storetime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '300',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `store` is set to true, this specifies the number of seconds to store the data from the form submission. Defaults to five minutes.',
              'area_trans' => '',
            ),
            'storeLocation' => 
            array (
              'name' => 'storeLocation',
              'desc' => 'prop_formit.storelocation_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'cache',
                  'text' => 'formit.opt_cache',
                  'name' => 'MODX Cache',
                ),
                1 => 
                array (
                  'value' => 'session',
                  'text' => 'formit.opt_session',
                  'name' => 'Session',
                ),
              ),
              'value' => 'cache',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `store` is set to true, this specifies the cache location of the data from the form submission. Defaults to MODX cache.',
              'area_trans' => '',
            ),
            'allowFiles' => 
            array (
              'name' => 'allowFiles',
              'desc' => 'prop_formit.allowfiles_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set to 0, will prevent files from being submitted on the form.',
              'area_trans' => '',
            ),
            'spamEmailFields' => 
            array (
              'name' => 'spamEmailFields',
              'desc' => 'prop_formit.spamemailfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `spam` is set as a hook, a comma-separated list of fields containing emails to check spam against.',
              'area_trans' => '',
            ),
            'spamCheckIp' => 
            array (
              'name' => 'spamCheckIp',
              'desc' => 'prop_formit.spamcheckip_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `spam` is set as a hook, and this is true, will check the IP as well.',
              'area_trans' => '',
            ),
            'recaptchaJs' => 
            array (
              'name' => 'recaptchaJs',
              'desc' => 'prop_formit.recaptchajs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '{}',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a hook, this can be a JSON object that will be set to the JS RecaptchaOptions variable, which configures options for reCaptcha.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_formit.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'red',
                  'text' => 'formit.opt_red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'value' => 'white',
                  'text' => 'formit.opt_white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'value' => 'clean',
                  'text' => 'formit.opt_clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'value' => 'blackglass',
                  'text' => 'formit.opt_blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a hook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
            'redirectTo' => 
            array (
              'name' => 'redirectTo',
              'desc' => 'prop_formit.redirectto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `redirect` is set as a hook, this must specify the Resource ID to redirect to.',
              'area_trans' => '',
            ),
            'redirectParams' => 
            array (
              'name' => 'redirectParams',
              'desc' => 'prop_formit.redirectparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A JSON array of parameters to pass to the redirect hook that will be passed when redirecting.',
              'area_trans' => '',
            ),
            'emailTo' => 
            array (
              'name' => 'emailTo',
              'desc' => 'prop_formit.emailto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailToName' => 
            array (
              'name' => 'emailToName',
              'desc' => 'prop_formit.emailtoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailTo` property.',
              'area_trans' => '',
            ),
            'emailFrom' => 
            array (
              'name' => 'emailFrom',
              'desc' => 'prop_formit.emailfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the From: address for the email. If not set, will first look for an `email` form field. If none is found, will default to the `emailsender` system setting.',
              'area_trans' => '',
            ),
            'emailFromName' => 
            array (
              'name' => 'emailFromName',
              'desc' => 'prop_formit.emailfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the From: name for the email.',
              'area_trans' => '',
            ),
            'emailReplyTo' => 
            array (
              'name' => 'emailReplyTo',
              'desc' => 'prop_formit.emailreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Reply-To: address for the email.',
              'area_trans' => '',
            ),
            'emailReplyToName' => 
            array (
              'name' => 'emailReplyToName',
              'desc' => 'prop_formit.emailreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Reply-To: name for the email.',
              'area_trans' => '',
            ),
            'emailCC' => 
            array (
              'name' => 'emailCC',
              'desc' => 'prop_formit.emailcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to as a CC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailCCName' => 
            array (
              'name' => 'emailCCName',
              'desc' => 'prop_formit.emailccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailCC` property.',
              'area_trans' => '',
            ),
            'emailBCC' => 
            array (
              'name' => 'emailBCC',
              'desc' => 'prop_formit.emailbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to as a BCC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailBCCName' => 
            array (
              'name' => 'emailBCCName',
              'desc' => 'prop_formit.emailbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailBCC` property.',
              'area_trans' => '',
            ),
            'emailReturnPath' => 
            array (
              'name' => 'emailReturnPath',
              'desc' => 'prop_formit.emailreturnpath_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Return-path: address for the email. If not set, will take the value of `emailFrom` property.',
              'area_trans' => '',
            ),
            'emailSubject' => 
            array (
              'name' => 'emailSubject',
              'desc' => 'prop_formit.emailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, this is required as a subject line for the email.',
              'area_trans' => '',
            ),
            'emailUseFieldForSubject' => 
            array (
              'name' => 'emailUseFieldForSubject',
              'desc' => 'prop_formit.emailusefieldforsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If the field `subject` is passed into the form, if this is true, it will use the field content for the subject line of the email.',
              'area_trans' => '',
            ),
            'emailHtml' => 
            array (
              'name' => 'emailHtml',
              'desc' => 'prop_formit.emailhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, this toggles HTML emails or not. Defaults to true.',
              'area_trans' => '',
            ),
            'emailConvertNewlines' => 
            array (
              'name' => 'emailConvertNewlines',
              'desc' => 'prop_formit.emailconvertnewlines_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true and emailHtml is set to 1, will convert newlines to BR tags in the email.',
              'area_trans' => '',
            ),
            'emailMultiWrapper' => 
            array (
              'name' => 'emailMultiWrapper',
              'desc' => 'prop_formit.emailmultiwrapper_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+value]]',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Will wrap each item in a collection of fields sent via checkboxes/multi-selects. Defaults to just the value.',
              'area_trans' => '',
            ),
            'emailMultiSeparator' => 
            array (
              'name' => 'emailMultiSeparator',
              'desc' => 'prop_formit.emailmultiseparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The default separator for collections of items sent through checkboxes/multi-selects. Defaults to a newline.',
              'area_trans' => '',
            ),
            'fiarTpl' => 
            array (
              'name' => 'fiarTpl',
              'desc' => 'prop_formit.fiartpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiartpl_desc',
              'area_trans' => '',
            ),
            'fiarToField' => 
            array (
              'name' => 'fiarToField',
              'desc' => 'prop_formit.fiartofield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiartofield_desc',
              'area_trans' => '',
            ),
            'fiarSubject' => 
            array (
              'name' => 'fiarSubject',
              'desc' => 'prop_formit.fiarsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[++site_name]] Auto-Responder',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarsubject_desc',
              'area_trans' => '',
            ),
            'fiarFrom' => 
            array (
              'name' => 'fiarFrom',
              'desc' => 'prop_formit.fiarfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarfrom_desc',
              'area_trans' => '',
            ),
            'fiarFromName' => 
            array (
              'name' => 'fiarFromName',
              'desc' => 'prop_formit.fiarfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarfromname_desc',
              'area_trans' => '',
            ),
            'fiarReplyTo' => 
            array (
              'name' => 'fiarReplyTo',
              'desc' => 'prop_formit.fiarreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarreplyto_desc',
              'area_trans' => '',
            ),
            'fiarReplyToName' => 
            array (
              'name' => 'fiarReplyToName',
              'desc' => 'prop_formit.fiarreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarreplytoname_desc',
              'area_trans' => '',
            ),
            'fiarCC' => 
            array (
              'name' => 'fiarCC',
              'desc' => 'prop_formit.fiarcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarcc_desc',
              'area_trans' => '',
            ),
            'fiarCCName' => 
            array (
              'name' => 'fiarCCName',
              'desc' => 'prop_fiar.fiarccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailCC` property.',
              'area_trans' => '',
            ),
            'fiarBCC' => 
            array (
              'name' => 'fiarBCC',
              'desc' => 'prop_formit.fiarbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarbcc_desc',
              'area_trans' => '',
            ),
            'fiarBCCName' => 
            array (
              'name' => 'fiarBCCName',
              'desc' => 'prop_formit.fiarbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarbccname_desc',
              'area_trans' => '',
            ),
            'fiarHtml' => 
            array (
              'name' => 'fiarHtml',
              'desc' => 'prop_formit.fiarhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.fiarhtml_desc',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_formit.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathminrange_desc',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_formit.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '100',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathmaxrange_desc',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_formit.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathfield_desc',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_formit.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathop1field_desc',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_formit.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathop2field_desc',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_formit.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.mathoperatorfield_desc',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package formit
 */

$modelPath = $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/formit/\') . \'model/formit/\';
$modx->loadClass(\'FormIt\', $modelPath, true, true);

$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'FormItIsSelected' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormItIsSelected',
          'description' => 'A custom output filter used with dropdowns for checking selected status.',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItIsChecked
 *
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @var modX $modx
 *
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' selected="selected"\';
}
$input = $modx->fromJSON($input);
if (!empty($input) && is_array($input) && in_array($options,$input)) {
  $output = \' selected="selected"\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItIsChecked
 *
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @var modX $modx
 *
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' selected="selected"\';
}
$input = $modx->fromJSON($input);
if (!empty($input) && is_array($input) && in_array($options,$input)) {
  $output = \' selected="selected"\';
}
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'FormItIsChecked' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormItIsChecked',
          'description' => 'A custom output filter used with checkboxes/radios for checking checked status.',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItIsChecked
 *
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @var modX $modx
 *
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' checked="checked"\';
}
$input = $modx->fromJSON($input);
if (!empty($input) && is_array($input) && in_array($options,$input)) {
  $output = \' checked="checked"\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormItIsChecked
 *
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @var modX $modx
 *
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' checked="checked"\';
}
$input = $modx->fromJSON($input);
if (!empty($input) && is_array($input) && in_array($options,$input)) {
  $output = \' checked="checked"\';
}
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);
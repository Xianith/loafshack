<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 42,
    'type' => 'document',
    'contentType' => 'text/javascript',
    'pagetitle' => 'form-script',
    'longtitle' => '',
    'description' => '',
    'alias' => 'form-script',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 27,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '$(".ayes").click(function() {
  $(".attending").show();
  $(".sadface").hide();
});

$(".ano").click(function() {
  $(".attending").hide();
  $(".sadface").show();
});

$(".ryes").click(function() {
  $(".rsvp").show();
  $(".formitinfo").text(text.replace(\'message\', \'rsvp\')); 
});

$(".rno").click(function() {
  $(".rsvp").hide();
  $(".formitinfo").text(text.replace(\'rsvp\', \'message\')); 
});',
    'richtext' => 0,
    'template' => 0,
    'menuindex' => 0,
    'searchable' => 0,
    'cacheable' => 1,
    'createdby' => 3,
    'createdon' => 1494877276,
    'editedby' => 3,
    'editedon' => 1496173957,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1494878100,
    'publishedby' => 3,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 5,
    'uri' => 'form/form-script.js',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '$(".ayes").click(function() {
  $(".attending").show();
  $(".sadface").hide();
});

$(".ano").click(function() {
  $(".attending").hide();
  $(".sadface").show();
});

$(".ryes").click(function() {
  $(".rsvp").show();
  $(".formitinfo").text(text.replace(\'message\', \'rsvp\')); 
});

$(".rno").click(function() {
  $(".rsvp").hide();
  $(".formitinfo").text(text.replace(\'rsvp\', \'message\')); 
});',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 5,
    'name' => 'javascript',
    'description' => 'javascript content',
    'mime_type' => 'text/javascript',
    'file_extensions' => '.js',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);
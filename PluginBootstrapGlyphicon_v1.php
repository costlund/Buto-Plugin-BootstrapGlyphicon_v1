<?php
/**
 * Render Bootstrap Glyphicon.
 */
class PluginBootstrapGlyphicon_v1{
  public function widget_glyphicon($data){
    /**
     * Default.
     */
    $default = array('glyphicon' => 'user', 'text' => 'success');
    /**
     * Data.
     */
    $data = new PluginWfArray($data);
    $data = new PluginWfArray($data->get('data'));
    /**
     * Merge.
     */
    $data = new PluginWfArray(array_merge($default, $data->get()));
    /**
     * Vars.
     */
    $glyphicon = $data->get('glyphicon');
    $text = $data->get('text');
    $class = "glyphicon glyphicon-$glyphicon text-$text";
    /**
     * Element.
     */
    $element = wfDocument::createHtmlElement('span', null, array('class' => $class, 'area-hidden' => "true"));
    /**
     * Render.
     */
    wfDocument::renderElement(array($element));
  }
}
<?php
class qa_search_box_widget {
	
	function allow_template($template)
	{
		return true;
	}
	
	function allow_region($region)
	{
		return true;
	}
	function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
	{

		$html = '<div class="qa-widget-full qa-widget-full-low">';
		$html .= '<form method="get" action="http://38qa.net/search" >';
		$html .= 'Q&Aを検索する:<input type="text" name="q" value="" placeholder="分蜂" class="qa-search-field" style="padding:8px 8px 8px 0; margin-left:13px;">';
		$html .= '<input type="submit" value="検索" class="qa-form-tall-button qa-form-tall-button-save">';
		$html .= '</form></div>';

		$themeobject->output($html);
	}
}



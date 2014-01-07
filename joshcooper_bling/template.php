<?php

function joshcooper_bling_preprocess_page(&$vars) {
  // Add a suggestion for a per node type page template.
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] =  'page__' .  $vars['node']->type;
  }
}

function joshcooper_bling_css_alter(&$css) {
  // If we're only a donation page node, swap out the default css for one used
  // to render donation forms.
  if (arg(0) == 'node' && is_numeric(arg(1)) && (arg(2) == 'done' || !arg(2))) {
    $node = node_load(arg(1));
    if ($node->type == 'donation_form') {
      $theme_path = drupal_get_path('theme', 'joshcooper_bling');
      if (isset($css[$theme_path . '/layout.css'])) {
        $css[$theme_path . '/layout.css']['data'] = $theme_path . '/donation-layout.css';
      }
    }
  }
}

function joshcooper_bling_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'webform_client_form_2') {  
  $form['actions']['submit']['#value'] = t('Submit Donation');  
 }  
}

function joshcooper_bling_page_alter(&$page) {
	$node = menu_get_object();
	$nid = $node->nid;
	if ($nid == '2') {
		//moving webform element to new fieldset
		$page['content']['system_main']['nodes'][2]['webform']['#form']['submitted']['payment_information']['payment_fields']['credit']['how_did_you_hear_about_us'] = $page['content']['system_main']['nodes'][2]['webform']['#form']['submitted']['payment_information']['how_did_you_hear_about_us'];
		//unset original location of webform element
		unset($page['content']['system_main']['nodes'][2]['webform']['#form']['submitted']['payment_information']['how_did_you_hear_about_us']);
	}
}
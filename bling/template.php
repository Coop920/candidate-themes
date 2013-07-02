<?php

function bling_preprocess_page(&$vars) {
  // Add a suggestion for a per node type page template.
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] =  'page__' .  $vars['node']->type;
  }
}

function bling_css_alter(&$css) {
  // If we're only a donation page node, swap out the default css for one used
  // to render donation forms.
  if (arg(0) == 'node' && is_numeric(arg(1)) && (arg(2) == 'done' || !arg(2))) {
    $node = node_load(arg(1));
    if ($node->type == 'donation_form') {
      if (isset($css['sites/all/themes/bling/layout.css'])) {
        $css['sites/all/themes/bling/layout.css']['data'] = 'sites/all/themes/bling/donation-layout.css';
      }
    }
  }
}

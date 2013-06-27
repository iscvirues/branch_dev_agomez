<?php

function axtel_configuracion() {  
  $form['likes_fb'] = array(
    '#title' => 'URL para likes de facebook',  
    '#type' => 'textfield',
    '#default_value' => variable_get('likes_fb', 'Likes de facebook'),    
  );
  $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Guardar configuración',
  );
  $form['#submit'][] = 'axtel_configuracion_submit';  
  return $form;
}



function axtel_configuracion_validate($form, &$form_state) {
  if (trim($form_state['values']['likes_fb']) == '') {
    form_set_error('likes_fb', 'El input no puede quedar vacío.');
  }
}


function axtel_configuracion_submit($form, $form_state) {
  variable_set('likes_fb', $form_state['values']['likes_fb']);
  drupal_set_message("Se han guardado las opciones de configuración.");
}

?>
<?php
/**
* @file
* Contains \Drupal\mymodule\Form\ExampleForm.
**/

namespace Drupal\mymodule\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends FormBase{

	/**
		* {@inheritdoc}
	*/
	public function getFormId() { 
         return 'mymodule_example_form';
    }	

    /**
		* {@inheritdoc}
	*/

	public function buildForm(array $form, FormStateInterface $form_state) {
	   // Return array of Form API elements.

	}	

	/**
 * {@inheritdoc}
 */
		public function fieldSettingsForm(array $form, FormStateInterface $form_state) {
  
 			 $element = [];
  		// The key of the element should be the setting name
  		$element['size'] = [
    	'#title' => $this->t('Size'),
    	'#type' => 'select',
    	'#options' => [
      	'small' => $this->t('Small'),
      	'medium' => $this->t('Medium'),
      	'large' => $this->t('Large'),
    	],
    	'#default_value' => $this->getSetting('size'),
  	];

  		return $element;
	}


    public function submitForm(array &$form, FormStateInterface $form_state) {
        // Validation covered in later recipe, required to satisfy interface
    }

}
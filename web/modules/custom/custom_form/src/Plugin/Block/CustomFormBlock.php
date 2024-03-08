namespace Drupal\custom_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Custom Form' block.
*
* @Block(
* id = "custom_form_block",
* admin_label = @Translation("Custom Form Block"),
* )
*/
class CustomFormBlock extends BlockBase {

/**
* {@inheritdoc}
*/
public function build() {
// You can customize the form settings or include additional logic here.
$form = \Drupal::formBuilder()->getForm('Drupal\custom_form\Form\CustomForm');

return $form;
}

}
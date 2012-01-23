<?php

/**
 * iceModelMetaTag form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class iceModelMetaTagForm extends BaseiceModelMetaTagForm
{
  public function configure()
  {
    $this->widgetSchema['url']->setAttributes(array('style' => 'width: 500px;'));
    $this->widgetSchema['parameters']->setAttributes(array('style' => 'width: 250px;'));

    $this->embedI18n(array('bg_BG', 'en_US', 'tr_TR', 'ru_RU'));
  }
}

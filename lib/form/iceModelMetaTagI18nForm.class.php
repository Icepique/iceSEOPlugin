<?php

/**
 * iceModelMetaTagI18n form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class iceModelMetaTagI18nForm extends BaseiceModelMetaTagI18nForm
{
  public function configure()
  {
    $this->widgetSchema['description'] = new sfWidgetFormTextarea();

    $this->widgetSchema['title']->setAttributes(array('style' => 'width: 500px;'));
    $this->widgetSchema['keywords']->setAttributes(array('style' => 'width: 500px;'));
    $this->widgetSchema['description']->setAttributes(array('style' => 'width: 500px; height: 80px;'));
  }
}

<?php

/**
 * iceModelMetaTag form base class.
 *
 * @method iceModelMetaTag getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelMetaTagForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'url'        => new sfWidgetFormInputText(),
      'parameters' => new sfWidgetFormInputText(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'url'        => new sfValidatorString(array('max_length' => 255)),
      'parameters' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelMetaTag', 'column' => array('url', 'parameters')))
    );

    $this->widgetSchema->setNameFormat('ice_model_meta_tag[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelMetaTag';
  }

  public function getI18nModelName()
  {
    return 'iceModelMetaTagI18n';
  }

  public function getI18nFormClass()
  {
    return 'iceModelMetaTagI18nForm';
  }

}

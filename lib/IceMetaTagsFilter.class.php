<?php

class IceMetaTagsFilter extends sfFilter
{
  public function execute($chain)
  {
    // Execute this filter only once
    if ($this->isFirstCall())
    {
      $uri   = $this->getContext()->getRequest()->getPathInfo();
      $route = $this->getContext()->getRouting()->getCurrentInternalUri(true);

      if (preg_match('/(\?|&)sf_culture=('. IceBaseObject::getRoutingCulturesRegex() .')/iu', $route, $m))
      {
        $culture = $m[2];
        $route = str_replace($m[1] .'sf_culture='. $culture, '', $route);
      }
      else
      {
        $culture = sfPropel::getDefaultCulture();
      }

      if (preg_match('/(.*)\?(.*)/iu', $route, $m))
      {
        $route = $m[1];
        $parameters = $m[2];
      }
      else
      {
        $parameters = null;
      }

      $c = new Criteria();
      $c->addJoin(iceModelMetaTagPeer::ID, iceModelMetaTagI18nPeer::ID);
      $c->add(iceModelMetaTagI18nPeer::CULTURE, $culture);

      $c->add(iceModelMetaTagPeer::URL, $route);
      $c->add(iceModelMetaTagPeer::PARAMETERS, $parameters);

      if (!$meta_tag = iceModelMetaTagPeer::doSelectOne($c))
      {
        $c->add(iceModelMetaTagPeer::URL, urldecode($uri));
        $c->add(iceModelMetaTagPeer::PARAMETERS, null, Criteria::ISNULL);

        $meta_tag = iceModelMetaTagPeer::doSelectOne($c);
      }

      if ($meta_tag)
      {
        $this->getContext()->getResponse()->addMeta('title', $meta_tag->getTitle($culture), true);
        $this->getContext()->getResponse()->addMeta('description', $meta_tag->getDescription($culture), true);
        $this->getContext()->getResponse()->addMeta('keywords', $meta_tag->getKeywords($culture), true);
      }
    }

    // Execute next filter
    $chain->execute();
  }
}
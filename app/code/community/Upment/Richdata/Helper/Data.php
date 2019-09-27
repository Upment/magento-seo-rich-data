<?php

class Upment_Richdata_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Get Organization Name
     *
     * @param string $store
     * @return string
     */
    public function getOrgName($store = null)
    {
        return Mage::getStoreConfig('rich_data/general/orgname', $store);
    }

    /**
     * Get Customer Support phone number
     *
     * @param string $store
     * @return string
     */
    public function getCustomerSupport($store = null)
    {
        return Mage::getStoreConfig('rich_data/general/phone', $store);
    }

    /**
     * Get Logo URL
     *
     * @param string $store
     * @return string
     */
    public function getLogoUrl($store = null)
    {
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . 'theme/' . Mage::getStoreConfig('rich_data/general/logo', $store);
    }

    /**
     * Check if there are social medias defined
     *
     * @param string $store
     * @return boolean
     */
    public function haveSocialMedia($store = null)
    {
      return (
        ( Mage::getStoreConfig('rich_data/social/facebook', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/twitter', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/google', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/instagram', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/youtube', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/linkedin', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/myspace', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/pinterest', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/soundcloud', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/social/tumblr', $store) != '' )
      );
    }

    /**
     * Get social media URLs
     *
     * @param string $store
     * @return array
     */
    public function getSocialMedia($store = null)
    {
      $medias = array();
      if ( Mage::getStoreConfig('rich_data/social/facebook', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/facebook', $store);
      if ( Mage::getStoreConfig('rich_data/social/twitter', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/twitter', $store);
      if ( Mage::getStoreConfig('rich_data/social/google', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/google', $store);
      if ( Mage::getStoreConfig('rich_data/social/instagram', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/instagram', $store);
      if ( Mage::getStoreConfig('rich_data/social/youtube', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/youtube', $store);
      if ( Mage::getStoreConfig('rich_data/social/linkedin', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/linkedin', $store);
      if ( Mage::getStoreConfig('rich_data/social/myspace', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/myspace', $store);
      if ( Mage::getStoreConfig('rich_data/social/pinterest', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/pinterest', $store);
      if ( Mage::getStoreConfig('rich_data/social/soundcloud', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/soundcloud', $store);
      if ( Mage::getStoreConfig('rich_data/social/tumblr', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/social/tumblr', $store);
      return $medias;
    }

}

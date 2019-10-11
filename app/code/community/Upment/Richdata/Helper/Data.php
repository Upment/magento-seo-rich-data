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
     * Get Organization Description
     *
     * @param string $store
     * @return string
     */
    public function getDescription($store = null)
    {
      return Mage::getStoreConfig('rich_data/general/description', $store);
    }

    /**
     * Get Organization Founding Year
     *
     * @param string $store
     * @return string
     */
    public function getFoundingYear($store = null)
    {
      return Mage::getStoreConfig('rich_data/general/founded', $store);
    }

    /**
     * Get Customer Support email address
     *
     * @param string $store
     * @return string
     */
    public function getEmailAddress($store = null)
    {
      return Mage::getStoreConfig('rich_data/general/email', $store);
    }

    /**
     * Get Street address
     *
     * @param string $store
     * @return string
     */
    public function getStreetAddress($store = null)
    {
      return Mage::getStoreConfig('rich_data/address/street', $store);
    }

    /**
     * Get Postal Code
     *
     * @param string $store
     * @return string
     */
    public function getPostalCode($store = null)
    {
      return Mage::getStoreConfig('rich_data/address/postal', $store);
    }

    /**
     * Get Town
     *
     * @param string $store
     * @return string
     */
    public function getTown($store = null)
    {
      return Mage::getStoreConfig('rich_data/address/town', $store);
    }

    /**
     * Get Region
     *
     * @param string $store
     * @return string
     */
    public function getRegion($store = null)
    {
      return Mage::getStoreConfig('rich_data/address/region', $store);
    }

    /**
     * Get Country
     *
     * @param string $store
     * @return string
     */
    public function getCountry($store = null)
    {
      return Mage::getStoreConfig('rich_data/address/country', $store);
    }

    /**
     * Check if there are additional URLs defined
     *
     * @param string $store
     * @return boolean
     */
    public function haveAdditionalURLs($store = null)
    {
      return (
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl1', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl2', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl3', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl4', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl5', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl6', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl7', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl8', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl9', $store) != '' ) ||
        ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl10', $store) != '' )
      );
    }

    /**
     * Get additional URLs
     *
     * @param string $store
     * @return array
     */
    public function getAdditionalURLs($store = null)
    {
      $medias = array();
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl1', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl1', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl2', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl2', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl3', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl3', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl4', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl4', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl5', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl5', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl6', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl6', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl7', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl7', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl8', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl8', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl9', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl9', $store);
      if ( Mage::getStoreConfig('rich_data/additionalurls/additionalurl10', $store) != '' ) $medias[] = Mage::getStoreConfig('rich_data/additionalurls/additionalurl10', $store);
      return $medias;
    }

}

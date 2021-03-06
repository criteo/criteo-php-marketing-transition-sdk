<?php
/**
 * CategoryMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API Transition Swagger
 *
 * This is used to help Criteo clients transition from MAPI to Criteo API
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Criteo\Marketing\Model;

use \ArrayAccess;
use \Criteo\Marketing\ObjectSerializer;

/**
 * CategoryMessage Class Doc Comment
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CategoryMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_hash_code' => 'int',
        'category_name' => 'string',
        'catalog_id' => 'int',
        'catalog_name' => 'string',
        'advertiser_id' => 'int',
        'advertiser_name' => 'string',
        'campaign_id' => 'int',
        'campaign_name' => 'string',
        'average_price' => 'double',
        'number_of_products' => 'int',
        'category_bid' => '\Criteo\Marketing\Model\BidMessage',
        'enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'category_hash_code' => 'int32',
        'category_name' => null,
        'catalog_id' => 'int32',
        'catalog_name' => null,
        'advertiser_id' => 'int32',
        'advertiser_name' => null,
        'campaign_id' => 'int32',
        'campaign_name' => null,
        'average_price' => 'double',
        'number_of_products' => 'int32',
        'category_bid' => null,
        'enabled' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category_hash_code' => 'categoryHashCode',
        'category_name' => 'categoryName',
        'catalog_id' => 'catalogId',
        'catalog_name' => 'catalogName',
        'advertiser_id' => 'advertiserId',
        'advertiser_name' => 'advertiserName',
        'campaign_id' => 'campaignId',
        'campaign_name' => 'campaignName',
        'average_price' => 'averagePrice',
        'number_of_products' => 'numberOfProducts',
        'category_bid' => 'categoryBid',
        'enabled' => 'enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_hash_code' => 'setCategoryHashCode',
        'category_name' => 'setCategoryName',
        'catalog_id' => 'setCatalogId',
        'catalog_name' => 'setCatalogName',
        'advertiser_id' => 'setAdvertiserId',
        'advertiser_name' => 'setAdvertiserName',
        'campaign_id' => 'setCampaignId',
        'campaign_name' => 'setCampaignName',
        'average_price' => 'setAveragePrice',
        'number_of_products' => 'setNumberOfProducts',
        'category_bid' => 'setCategoryBid',
        'enabled' => 'setEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_hash_code' => 'getCategoryHashCode',
        'category_name' => 'getCategoryName',
        'catalog_id' => 'getCatalogId',
        'catalog_name' => 'getCatalogName',
        'advertiser_id' => 'getAdvertiserId',
        'advertiser_name' => 'getAdvertiserName',
        'campaign_id' => 'getCampaignId',
        'campaign_name' => 'getCampaignName',
        'average_price' => 'getAveragePrice',
        'number_of_products' => 'getNumberOfProducts',
        'category_bid' => 'getCategoryBid',
        'enabled' => 'getEnabled'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['category_hash_code'] = isset($data['category_hash_code']) ? $data['category_hash_code'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
        $this->container['catalog_id'] = isset($data['catalog_id']) ? $data['catalog_id'] : null;
        $this->container['catalog_name'] = isset($data['catalog_name']) ? $data['catalog_name'] : null;
        $this->container['advertiser_id'] = isset($data['advertiser_id']) ? $data['advertiser_id'] : null;
        $this->container['advertiser_name'] = isset($data['advertiser_name']) ? $data['advertiser_name'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['campaign_name'] = isset($data['campaign_name']) ? $data['campaign_name'] : null;
        $this->container['average_price'] = isset($data['average_price']) ? $data['average_price'] : null;
        $this->container['number_of_products'] = isset($data['number_of_products']) ? $data['number_of_products'] : null;
        $this->container['category_bid'] = isset($data['category_bid']) ? $data['category_bid'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets category_hash_code
     *
     * @return int|null
     */
    public function getCategoryHashCode()
    {
        return $this->container['category_hash_code'];
    }

    /**
     * Sets category_hash_code
     *
     * @param int|null $category_hash_code category_hash_code
     *
     * @return $this
     */
    public function setCategoryHashCode($category_hash_code)
    {
        $this->container['category_hash_code'] = $category_hash_code;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string|null $category_name category_name
     *
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets catalog_id
     *
     * @return int|null
     */
    public function getCatalogId()
    {
        return $this->container['catalog_id'];
    }

    /**
     * Sets catalog_id
     *
     * @param int|null $catalog_id catalog_id
     *
     * @return $this
     */
    public function setCatalogId($catalog_id)
    {
        $this->container['catalog_id'] = $catalog_id;

        return $this;
    }

    /**
     * Gets catalog_name
     *
     * @return string|null
     */
    public function getCatalogName()
    {
        return $this->container['catalog_name'];
    }

    /**
     * Sets catalog_name
     *
     * @param string|null $catalog_name catalog_name
     *
     * @return $this
     */
    public function setCatalogName($catalog_name)
    {
        $this->container['catalog_name'] = $catalog_name;

        return $this;
    }

    /**
     * Gets advertiser_id
     *
     * @return int|null
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param int|null $advertiser_id advertiser_id
     *
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets advertiser_name
     *
     * @return string|null
     */
    public function getAdvertiserName()
    {
        return $this->container['advertiser_name'];
    }

    /**
     * Sets advertiser_name
     *
     * @param string|null $advertiser_name advertiser_name
     *
     * @return $this
     */
    public function setAdvertiserName($advertiser_name)
    {
        $this->container['advertiser_name'] = $advertiser_name;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int|null $campaign_id campaign_id
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets campaign_name
     *
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->container['campaign_name'];
    }

    /**
     * Sets campaign_name
     *
     * @param string|null $campaign_name campaign_name
     *
     * @return $this
     */
    public function setCampaignName($campaign_name)
    {
        $this->container['campaign_name'] = $campaign_name;

        return $this;
    }

    /**
     * Gets average_price
     *
     * @return double|null
     */
    public function getAveragePrice()
    {
        return $this->container['average_price'];
    }

    /**
     * Sets average_price
     *
     * @param double|null $average_price average_price
     *
     * @return $this
     */
    public function setAveragePrice($average_price)
    {
        $this->container['average_price'] = $average_price;

        return $this;
    }

    /**
     * Gets number_of_products
     *
     * @return int|null
     */
    public function getNumberOfProducts()
    {
        return $this->container['number_of_products'];
    }

    /**
     * Sets number_of_products
     *
     * @param int|null $number_of_products number_of_products
     *
     * @return $this
     */
    public function setNumberOfProducts($number_of_products)
    {
        $this->container['number_of_products'] = $number_of_products;

        return $this;
    }

    /**
     * Gets category_bid
     *
     * @return \Criteo\Marketing\Model\BidMessage|null
     */
    public function getCategoryBid()
    {
        return $this->container['category_bid'];
    }

    /**
     * Sets category_bid
     *
     * @param \Criteo\Marketing\Model\BidMessage|null $category_bid category_bid
     *
     * @return $this
     */
    public function setCategoryBid($category_bid)
    {
        $this->container['category_bid'] = $category_bid;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



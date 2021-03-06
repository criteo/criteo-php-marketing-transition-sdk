<?php
/**
 * AudienceAttributes
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
 * AudienceAttributes Class Doc Comment
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AudienceAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Audience_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advertiser_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'nb_lines' => 'int',
        'nb_lines_email' => 'int',
        'nb_matches_email' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'advertiser_id' => 'int32',
        'name' => null,
        'description' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'nb_lines' => null,
        'nb_lines_email' => null,
        'nb_matches_email' => null
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
        'advertiser_id' => 'advertiserId',
        'name' => 'name',
        'description' => 'description',
        'created' => 'created',
        'updated' => 'updated',
        'nb_lines' => 'nbLines',
        'nb_lines_email' => 'nbLinesEmail',
        'nb_matches_email' => 'nbMatchesEmail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advertiser_id' => 'setAdvertiserId',
        'name' => 'setName',
        'description' => 'setDescription',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'nb_lines' => 'setNbLines',
        'nb_lines_email' => 'setNbLinesEmail',
        'nb_matches_email' => 'setNbMatchesEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advertiser_id' => 'getAdvertiserId',
        'name' => 'getName',
        'description' => 'getDescription',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'nb_lines' => 'getNbLines',
        'nb_lines_email' => 'getNbLinesEmail',
        'nb_matches_email' => 'getNbMatchesEmail'
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
        $this->container['advertiser_id'] = isset($data['advertiser_id']) ? $data['advertiser_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['nb_lines'] = isset($data['nb_lines']) ? $data['nb_lines'] : null;
        $this->container['nb_lines_email'] = isset($data['nb_lines_email']) ? $data['nb_lines_email'] : null;
        $this->container['nb_matches_email'] = isset($data['nb_matches_email']) ? $data['nb_matches_email'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
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
     * Gets advertiser_id
     *
     * @return string|null
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param string|null $advertiser_id The advertiser id that owns this Audience
     *
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the Audience
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The string description of the Audience
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created Date and time ISO 8601 formatted string
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated Date and time ISO 8601 formatted string
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets nb_lines
     *
     * @return int|null
     */
    public function getNbLines()
    {
        return $this->container['nb_lines'];
    }

    /**
     * Sets nb_lines
     *
     * @param int|null $nb_lines The number of line in the audience available once processed
     *
     * @return $this
     */
    public function setNbLines($nb_lines)
    {
        $this->container['nb_lines'] = $nb_lines;

        return $this;
    }

    /**
     * Gets nb_lines_email
     *
     * @return int|null
     */
    public function getNbLinesEmail()
    {
        return $this->container['nb_lines_email'];
    }

    /**
     * Sets nb_lines_email
     *
     * @param int|null $nb_lines_email The number of email line in the audience available once processed
     *
     * @return $this
     */
    public function setNbLinesEmail($nb_lines_email)
    {
        $this->container['nb_lines_email'] = $nb_lines_email;

        return $this;
    }

    /**
     * Gets nb_matches_email
     *
     * @return int|null
     */
    public function getNbMatchesEmail()
    {
        return $this->container['nb_matches_email'];
    }

    /**
     * Sets nb_matches_email
     *
     * @param int|null $nb_matches_email The number of email matches in the audience available once processed
     *
     * @return $this
     */
    public function setNbMatchesEmail($nb_matches_email)
    {
        $this->container['nb_matches_email'] = $nb_matches_email;

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



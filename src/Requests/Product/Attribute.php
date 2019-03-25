<?php
/**
 * Class Attribute
 *
 * Atributos de produtos
 *
 * @author Diego Wagner <diegowagner4@gmail.com>
 * http://www.discoverytecnologia.com.br
 *
 * @link https://api.mercadolibre.com/categories/MLA126186/attributes#options
 *
 */
namespace Dsc\MercadoLivre\Requests\Product;

use Doctrine\Common\Collections\Collection;
use JMS\Serializer\Annotation as JMS;

class Attribute
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $id;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $name;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $valueId;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $valueName;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $valueStruct;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $attributeGroupId;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $attributeGroupName;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * @param string $valueId
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;
    }

    /**
     * @return string
     */
    public function getValueName()
    {
        return $this->valueName;
    }

    /**
     * @param string $valueName
     */
    public function setValueName($valueName)
    {
        $this->valueName = $valueName;
    }

    /**
     * @return string
     */
    public function getValueStruct()
    {
        return $this->valueStruct;
    }

    /**
     * @param string $valueStruct
     */
    public function setValueStruct($valueStruct)
    {
        $this->valueStruct = $valueStruct;
    }

    /**
     * @return string
     */
    public function getAttributeGroupId()
    {
        return $this->attributeGroupId;
    }

    /**
     * @param string $attributeGroupName
     */
    public function setAttributeGroupName($attributeGroupName)
    {
        $this->attributeGroupName = $attributeGroupName;
    }

    //TODO Mapear os demais atributos
}

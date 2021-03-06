<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : List.proto
 */


namespace attrpubapi_v1;

/**
 * Protobuf message : attrpubapi_v1.AttributeAndIdList
 */
class AttributeAndIdList extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * attribute_and_id_list repeated message = 1
     *
     * @var \Protobuf\Collection<\attrpubapi_v1\AttributeAndId>
     */
    protected $attribute_and_id_list = null;

    /**
     * Check if 'attribute_and_id_list' has a value
     *
     * @return bool
     */
    public function hasAttributeAndIdListList()
    {
        return $this->attribute_and_id_list !== null;
    }

    /**
     * Get 'attribute_and_id_list' value
     *
     * @return \Protobuf\Collection<\attrpubapi_v1\AttributeAndId>
     */
    public function getAttributeAndIdListList()
    {
        return $this->attribute_and_id_list;
    }

    /**
     * Set 'attribute_and_id_list' value
     *
     * @param \Protobuf\Collection<\attrpubapi_v1\AttributeAndId> $value
     */
    public function setAttributeAndIdListList(\Protobuf\Collection $value = null)
    {
        $this->attribute_and_id_list = $value;
    }

    /**
     * Add a new element to 'attribute_and_id_list'
     *
     * @param \attrpubapi_v1\AttributeAndId $value
     */
    public function addAttributeAndIdList(\attrpubapi_v1\AttributeAndId $value)
    {
        if ($this->attribute_and_id_list === null) {
            $this->attribute_and_id_list = new \Protobuf\MessageCollection();
        }

        $this->attribute_and_id_list->add($value);
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'attribute_and_id_list' => []
        ], $values);

        foreach ($values['attribute_and_id_list'] as $item) {
            $message->addAttributeAndIdList($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AttributeAndIdList',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'attribute_and_id_list',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.attrpubapi_v1.AttributeAndId'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->attribute_and_id_list !== null) {
            foreach ($this->attribute_and_id_list as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \attrpubapi_v1\AttributeAndId();

                if ($this->attribute_and_id_list === null) {
                    $this->attribute_and_id_list = new \Protobuf\MessageCollection();
                }

                $this->attribute_and_id_list->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->attribute_and_id_list !== null) {
            foreach ($this->attribute_and_id_list as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->attribute_and_id_list = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \attrpubapi_v1\AttributeAndIdList) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->attribute_and_id_list = ($message->attribute_and_id_list !== null) ? $message->attribute_and_id_list : $this->attribute_and_id_list;
    }


}


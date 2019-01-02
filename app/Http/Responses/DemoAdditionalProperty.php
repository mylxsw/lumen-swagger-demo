<?php
namespace App\Http\Responses;

use OpenApi\Annotations\Property;
use OpenApi\Annotations\Schema;

/**
 *
 * @Schema(
 *     title="额外属性",
 *     description="额外属性描述"
 * )
 *
 * @package App\Http\Responses
 */
class DemoAdditionalProperty
{
    /**
     * @Property(
     *     type="string",
     *     description="KEY"
     * )
     *
     * @var string
     */
    public $key;

    /**
     * @Property(
     *     type="string",
     *     description="VALUE"
     * )
     *
     * @var string
     */
    public $value;
}
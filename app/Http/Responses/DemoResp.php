<?php

namespace App\Http\Responses;

use OpenApi\Annotations\Items;
use OpenApi\Annotations\Property;
use OpenApi\Annotations\Schema;

/**
 * @Schema(
 *     title="demo响应内容",
 *     description="demo响应内容描述"
 * )
 *
 * @package App\Http\Responses
 */
class DemoResp extends JsonResponse
{

    /**
     * @Property(
     *     type="integer",
     *     description="ID"
     * )
     *
     * @var int
     */
    public $id = 0;

    /**
     * @Property(
     *     type="string",
     *     description="用户名"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @Property(
     *     type="integer",
     *     description="年龄"
     * )
     *
     * @var integer
     */
    public $age;

    /**
     * @Property(
     *     type="string",
     *     description="性别"
     * )
     *
     * @var string
     */
    public $gender;

    /**
     * @Property(
     *     type="array",
     *     @Items(ref="#/components/schemas/DemoAdditionalProperty")
     * )
     *
     * @var array
     */
    public $properties = [];

}
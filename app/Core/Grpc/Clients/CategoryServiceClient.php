<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class CategoryServiceClient extends \App\Core\Grpc\BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname = null, $opts = null, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \App\Core\Grpc\Models\CreateCategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\CreateCategoryResponse
     */
    public function CreateCategory(\App\Core\Grpc\Models\CreateCategoryRequest $argument,
                                                                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.CategoryService/CreateCategory',
            $argument,
            ['\App\Core\Grpc\Models\CreateCategoryResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UpdateCategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UpdateCategoryResponse
     */
    public function UpdateCategory(\App\Core\Grpc\Models\UpdateCategoryRequest $argument,
                                                                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.CategoryService/UpdateCategory',
            $argument,
            ['\App\Core\Grpc\Models\UpdateCategoryResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\DeleteCategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\DeleteCategoryResponse
     */
    public function DeleteCategory(\App\Core\Grpc\Models\DeleteCategoryRequest $argument,
                                                                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.CategoryService/DeleteCategory',
            $argument,
            ['\App\Core\Grpc\Models\DeleteCategoryResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexCategoriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexCategoriesResponse
     */
    public function IndexCategories(\App\Core\Grpc\Models\IndexCategoriesRequest $argument,
                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.CategoryService/IndexCategories',
            $argument,
            ['\App\Core\Grpc\Models\IndexCategoriesResponse', 'decode'],
            $metadata, $options);
    }

}

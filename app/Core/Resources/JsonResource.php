<?php

namespace App\Core\Resources;

use App\Core\Request\Request;
use Illuminate\Contracts\Pagination\Paginator as PaginationContract;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use JsonSerializable;

class JsonResource implements JsonSerializable
{
    protected mixed $resource;

    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    public function __get($name)
    {
        if (isset($this->resource->{$name})) {
            return $this->resource->{$name};
        }

        return null;
    }

    public function toArray(Request $request): array
    {
        if (method_exists($this->resource, 'toArray')) {
            return $this->resource->toArray();
        } elseif (method_exists($this->resource, 'attributesToArray')) {
            return $this->resource->attributesToArray();
        }

        return [];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray(new Request());
    }

    /**
     * Create a resource collection from an array of models.
     */
    public static function collection(Collection|EloquentCollection|PaginationContract|array $resources): array
    {
        if ($resources instanceof PaginationContract) {
            return [
                'data' => $resources->getCollection()->map(fn($resource) => new static($resource))->all(),
                'pagination' => [
                    'current_page' => $resources->currentPage(),
                    'last_page' => $resources->lastPage(),
                    'per_page' => $resources->perPage(),
                    'total' => $resources->total(),
                ],
            ];
        }

        return collect($resources)->map(fn($resource) => new static($resource))->all();
    }
}

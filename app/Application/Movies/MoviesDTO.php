<?php
namespace Application\Movies;

use Illuminate\Database\Eloquent\Model;

class MoviesDTO
{
    public function __construct(Model $model)
    {
       foreach ($model->getAttributes() as $attributeKey => $attribute){
           $this->{$attributeKey} = $attribute;
       }
    }

}

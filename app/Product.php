<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    const AVAILABLE_PRODUCT = "available";
    const UNAVAILABLE_PRODUCT = "unavailable";

    protected $fillable = [
        "size",
        "unit_of_measure",
        "name",
        "type",
        "manufacturer",
        "blurb",
        "description",
        "quantity",
        "status",
        "image",
        "sku",
        "vendor_sku",
        "original_price",
        "current_price",
        "backorderable",
        "taxable",
        "on_sale",
        "on_sale_percentage",
        "number_of_sales",
        "number_of_views",
        "featured"
    ];

    public function isAvailble() {
        return $this->status == Product::AVAILABLE_PRODUCT;
    }
}

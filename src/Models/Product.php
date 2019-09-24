<?php

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Facades\WooCommerce;

class Product
{
    public function all($options = [])
    {
        return WooCommerce::all('products', $options);
    }

    public function find($id, $options = [])
    {
        return WooCommerce::find("products/{$id}", $options);
    }

    public function create($data)
    {
        return WooCommerce::create('products', $data);
    }

    public function update($id, $data)
    {
        return WooCommerce::update("products/{$id}", $data);
    }

    public function delete($id, $options = [])
    {
        return WooCommerce::delete("products/{$id}", $options);
    }

    public function batch($data)
    {
        return WooCommerce::create('products/batch', $options);
    }
}

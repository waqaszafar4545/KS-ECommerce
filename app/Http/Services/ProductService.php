<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Http\Services\BaseService\BaseService;


class ProductService extends BaseService
{
    public $data = [];
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProducts()
    {
        $products = $this->productRepository->getProducts();
        return $products ?? [];
    }
    public function getProductById($id=0)
    {
        $product = $this->productRepository->getById($id);
        return $product ?? [];
    }
    public function createProduct($request = [])
    {
        // return view('products.create_product');
        // try {
        //     $count = $this->productRepository->getProducts();
        //     return $this->success('Success', ['data' => $count]);
        // } catch (\Exception $e) {
        //     $this->failureLog("ERROR Occurred " . __FUNCTION__, "ERROR Occurred " . $e->getMessage(), $e);
        //     return $this->error($e->getMessage(), ['data' => $e]);
        // }
    }
}

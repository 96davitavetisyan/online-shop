<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\BrandContract;
use App\Contracts\CategoryContract;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreProductFormRequest;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    /**
     *  in this controller, i need to inject
     *  the ProductContract as i did in any other controllers.
     *  There are some more changes which i need
     *  to add to this controller, for example when
     *  i will add a new product, i need to assign brand
     *  and categories for that product, that’s why i will
     *  inject the BrandContract and CategoryContract as well.
     */
    protected $brandRepository;

    protected $categoryRepository;

    protected $productRepository;

    public function __construct(
        CategoryContract $categoryRepository,
        ProductContract $productRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->listProducts();

        $this->setPageTitle('Products', 'Product List');
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->listCategories('name', 'asc');

        $this->setPageTitle('Products', 'Create a product');
        return view('admin.products.create', compact('categories'));
    }

    public function store(StoreProductFormRequest $request)
    {
        $params = $request->except('_token');
        $product = $this->productRepository->createProduct($params);

        if (!$product) {
            return $this->responseRedirectBack("Error occurred while updating the product.", 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Product successfully updated' ,'success',false, false);
    }
    public function edit($id)
    {
//        dd(55);
        $product = $this->productRepository->findProductById($id);
        $categories = $this->categoryRepository->listCategories('name', 'asc');

        $this->setPageTitle('Products', 'Edit Product');
        return view('admin.products.edit', compact('categories',  'product'));
    }
    public function update(StoreProductFormRequest $request)
    {
//        dd($request->except('_token'));
        $params = $request->except('_token');

        $product = $this->productRepository->updateProduct($params);

        if (!$product) {
            return $this->responseRedirectBack("Error occurred while updating the product.", 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Product successfully updated' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $product = $this->productRepository->deleteProduct($id);

        if (!$product) {
            return $this->responseRedirectBack("Error occurred while updating the product.", 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Product successfully updated' ,'success',false, false);
    }

}

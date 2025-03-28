<?php

namespace Modules\Admin\Http\Controllers\Ecommerce;

use App\Models\Blog\Keyword;
use App\Models\Category;
use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\ProductKeyword;
use App\Models\Education\SeoEdutcation;
use App\Service\Seo\RenderUrlSeoCourseService;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;

class AdminProductController extends AdminController
{
    public function index()
    {
        $products = Product::orderByDesc('id')
            ->paginate(10);

        $viewData = [
            'products' => $products
        ];
        return view('admin::pages.ecommerce.product.index', $viewData);
    }

    public function create()
    {
        $keywords   = Keyword::all();
        $categories = Category::select('id', 'c_name')->get();
        $viewData   = [
            'keywords'    => $keywords,
            'categories'  => $categories,
            'keywordsOld' => []
        ];
        return view('admin::pages.ecommerce.product.create', $viewData);
    }

    public function edit($id)
    {
        $product    = Product::find($id);
        $keywords   = Keyword::all();
        $categories = Category::select('id', 'c_name')->get();

        $keywordsOld = ProductKeyword::where('pk_product_id', $id)
                ->pluck('pk_keyword_id')->toArray() ?? [];
        $viewData    = [
            'keywords'    => $keywords,
            'product'     => $product,
            'categories'  => $categories,
            'keywordsOld' => $keywordsOld
        ];

        return view('admin::pages.ecommerce.product.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $data    = $request->except(['keywords', 'avatar', '_token']);
        $product = Product::find($id);
        $product->fill($data)->save();
        if ($keywords = $request->keywords)
            $this->syncProduct($keywords, $id);

        RenderUrlSeoCourseService::init($product->pro_slug, SeoEdutcation::TYPE_PRODUCT, $product->id);
        $this->showMessagesSuccess('Cập nhật thành công');
        return redirect()->back();
    }

    protected function syncProduct($keywords, $productID)
    {
        $data = [];
        foreach ($keywords as $keyword) {
            $data[] = [
                'pk_product_id' => $productID,
                'pk_keyword_id' => $keyword
            ];
        }

        if ($data) {
            \DB::table('products_keywords')->where('pk_product_id', $productID)->delete();
            \DB::table('products_keywords')->insert($data);
        }
    }
}

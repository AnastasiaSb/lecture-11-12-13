<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Category;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Shop\Products\Product;

class HomeController extends Controller
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepo;

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(Category $category, Product $product)//CategoryRepositoryInterface $categoryRepository
    {
        $this->category = $category;
        $this->product = $product;
//        $this->categoryRepo = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

//        $category = new Category();
//        $category->name = 'New Category';
//        $category->slug = 'New slug';
//        $category->description = 'New description';
//        $category->parent_id = 1;
//        $category->save();

//        $category = $this->category->where('slug', 'category-1')->first();
//        $category->slug  = 'tv2';
//        $category->save();
        
        $categories = [
            'name' => 'sdfg',
//            'slug'=>'dsfg',
            'description'=>'sdfg',
            'parent_id'=>1
        ];
//        $category = $this->category->create($categories);
        $category = $this->category->updateOrCreate($categories, ['slug'=>'dsad']);
        $category = $this->category->where('slug','<>', 'category-1')->delete;
        $product = $this->product->where('slug','<>', 'category-1')->first();
        echo($product->price);
        dd($product->formatted);
//        $cat1 = $this->categoryRepo->findCategoryById(1);
//        $cat2 = $this->categoryRepo->findCategoryById(2);

        return view('front.index', compact('cat1', 'cat2'));
    }
}

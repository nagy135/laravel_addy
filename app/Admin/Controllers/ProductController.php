<?php

namespace App\Admin\Controllers;

use App\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Produkt';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $category_mapping = [];
        foreach (\App\Category::all() as $category){
            $category_mapping[$category->id] = $category->name;
        }
        $grid = new Grid(new Product());

        $grid->column('id', __('ID'));
        $grid->column('title', __('Názov'));
        $grid->column('description', __('Popis'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('category_id', __('Kategória'))->replace($category_mapping);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Názov'));
        $show->field('description', __('Popis'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('category_id', __('Kategória ID'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('title', __('Názov'));
        $form->text('description', __('Popis'));

        $categories_options = [];
        $categories = \App\Category::all();
        foreach ( $categories as $category) {
            $categories_options[$category->id] = $category->name;
        }


        $form->select('category_id', 'Kategória')->options($categories_options);

        return $form;
    }
}

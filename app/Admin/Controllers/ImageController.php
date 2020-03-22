<?php

namespace App\Admin\Controllers;

use App\Image;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Image';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $product_mapping = [];
        foreach (\App\Product::all() as $product){
            $product_mapping[$product->id] = $product->title;
        }
        
        $grid = new Grid(new Image());

        $grid->column('id', __('ID'));
        $grid->column('name', __('Názov'));
        $grid->column('path', __('Image'));
        $grid->column('thumbnail', __('Thumbnail'));
        $grid->column('product_id', __('Produkt'))->replace($product_mapping);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Image::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('path', __('Path'));
        $show->field('product_id', __('Product ID'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Image());

        $form->text('name', __('Názov'));
        $form->image('path')->move('public/product_images')->uniqueName();
        $form->switch('thumbnail', __('Thumbnail'));

        $product_options = [];
        $products = \App\Product::all();
        foreach ( $products as $product) {
            $product_options[$product->id] = $product->title;
        }


        $form->select('product_id', 'Produkt')->options($product_options);

        return $form;
    }
}

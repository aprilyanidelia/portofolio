<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\footer;

class footerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'footer';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new footer());

        $grid->column('id', __('Id'));
        $grid->column('cv', __('Cv'));
        $grid->column('link_fb', __('Link fb'));
        $grid->column('link_ig', __('Link ig'));
        $grid->column('link_linkedin', __('Link linkedin'));
        $grid->column('link_x', __('Link x'));
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
        $show = new Show(footer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('cv', __('Cv'));
        $show->field('link_fb', __('Link fb'));
        $show->field('link_ig', __('Link ig'));
        $show->field('link_linkedin', __('Link linkedin'));
        $show->field('link_x', __('Link x'));
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
        $form = new Form(new footer());

        $form->text('cv', __('Cv'));
        $form->text('link_fb', __('Link fb'));
        $form->text('link_ig', __('Link ig'));
        $form->text('link_linkedin', __('Link linkedin'));
        $form->text('link_x', __('Link x'));

        return $form;
    }
}

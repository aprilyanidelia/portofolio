<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\userPorto;

class UserPortoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'userPorto';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new userPorto());

        $grid->column('id', __('Id'));
        $grid->column('nama', __('Nama'));
        $grid->column('bagian', __('Bagian'));
        $grid->column('deskripsi', __('Deskripsi'));
        $grid->column('pdf', __('Cv'));
        $grid->column('image')->image();
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
        $show = new Show(userPorto::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nama', __('Nama'));
        $show->field('bagian', __('Bagian'));
        $show->field('deskripsi', __('Deskripsi'));
        $show->field('pdf', __('Cv'));
        $show->field('image', __('Image'));
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
        $form = new Form(new userPorto());

        $form->text('nama', __('Nama'));
        $form->text('bagian', __('Bagian'));
        $form->text('deskripsi', __('Deskripsi'));
        $form->file('pdf', __('Cv'));
        $form->image('image', __('Image'));

        return $form;
    }
}

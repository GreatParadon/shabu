<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Branch;

class BranchController extends BaseController
{
    protected $page = ['title' => 'Branch', 'content' => 'branch'];
    protected $list_data = [['field' => 'id', 'type' => 'number', 'label' => 'ID'],
        ['field' => 'title', 'type' => 'text', 'label' => 'Title'],
        ['field' => 'image', 'type' => 'image', 'label' => 'Logo'],
        ['field' => 'active', 'type' => 'checkbox', 'label' => 'Active']];
    protected $create = true;
    protected $edit = true;
    protected $delete = true;
    protected $sort = true;

    protected function model()
    {
        return new Branch();
    }

    protected function formData()
    {
        $form_data = collect([['field' => 'id', 'type' => 'number', 'label' => 'ID', 'required' => false],
            ['field' => 'title', 'type' => 'text', 'label' => 'Title', 'required' => true],
            ['field' => 'image', 'type' => 'image', 'label' => 'Logo', 'required' => false],
            ['field' => 'content', 'type' => 'wysiwyg', 'label' => 'Content', 'required' => true],
            ['field' => 'map', 'type' => 'map', 'label' => 'Map', 'required' => true],
            ['field' => 'active', 'type' => 'checkbox', 'label' => 'Active', 'required' => false]]);

        return $form_data;
    }

}

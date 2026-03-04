<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestimonyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TestimonyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TestimonyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Testimony::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/testimony');
        CRUD::setEntityNameStrings('testimony', 'testimonies');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
     $this->crud->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
    $this->crud->addColumn(['name' => 'date', 'type' => 'date', 'label' => 'Date']);
    $this->crud->addColumn(['name' => 'testimony', 'type' => 'text', 'label' => 'Testimony']);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {

        $this->crud->setValidation(\App\Http\Requests\TestimonyRequest::class);

    $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
    $this->crud->addField(['name' => 'date', 'type' => 'date', 'label' => 'Date']);
    $this->crud->addField(['name' => 'testimony', 'type' => 'textarea', 'label' => 'Testimony']);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();

    }
}

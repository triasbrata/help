<?php

namespace App\Http\Controllers\Admin\Data\Tambahan;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;

use App\Http\Requests\AksesInternetRequest;

class AksesInternetController extends Controller
{
     protected $prefix = 'admin.data.tambahan.akses_inet'; 
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'AksesInternetRequest');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param AksesInternetRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, AksesInternetRequest $r, $from)
     {
        return $model->fill($r->all())->save() ? $this->routeAndSuccess($from) : $this->routeBackWithError($form);
     }
     /**   
      *delete data in data store
      * @param  RepositorieInterface $model [description]
      * @return [type]                      [description]
      */
     public function destroy(RepositorieInterface $model)
     {
        return  $model->delete() ? $this->routeAndSuccess('destroy') : $this->routeBackWithError('destroy');
     }
}

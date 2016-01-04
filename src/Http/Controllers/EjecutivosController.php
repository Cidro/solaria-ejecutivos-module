<?php

namespace Asimov\Solaria\Modules\Ejecutivos\Http\Controllers;

use Asimov\Solaria\Modules\Ejecutivos\Models\Ejecutivo;
use Illuminate\Http\Request;
use Solaria\Http\Controllers\Backend\BackendController;
use Solaria\Models\User;
use Solaria\Models\Widget\Field;

class EjecutivosController extends BackendController {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(){
        $this->authorize('view', Ejecutivo::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function postIndex(Request $request){
        
    }

    /**
     * @param Request $request
     * @param $ejecutivo_id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function postDelete(Request $request, $ejecutivo_id){
        
    }

}
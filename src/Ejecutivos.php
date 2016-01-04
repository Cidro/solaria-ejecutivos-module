<?php
namespace Asimov\Solaria\Modules\Ejecutivos;

use Asimov\Solaria\Modules\Ejecutivos\Models\Ejecutivo;
use Solaria\Modules\SolariaModule;

class Ejecutivos implements SolariaModule {

    protected $name = 'Ejecutivos';

    protected $menu_name = 'Ejecutivos';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/ejecutivos');
    }

    public function getBackendStyles() {
        return [asset('modules/ejecutivos/css/ejecutivos-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/ejecutivos/js/ejecutivos-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render($ejecutivo_alias){

    }
}
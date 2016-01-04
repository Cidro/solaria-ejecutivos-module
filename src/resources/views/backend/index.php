<script>
    //TODO: cambiar esto a auna llamada por ajax, es mas menos feo
    var contents = <?=json_encode(['ejecutivos' => $ejecutivos->toArray()]);?>;
</script>
<div class="row" ng-controller="EjecutivosModuleController" ng-init="init()">
</div>
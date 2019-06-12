<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{ $rol->id }}">
  {!! Form::open(array('action' => array('RolController@destroy', $rol->id), 'method' => 'delete')) !!}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
          <h4 class="modal-title">Baja de Rol de Usuario</h4>
        </div>
        <div class="modal-body">
          <p>¿Desea dar de baja al rol de usuario {{ $rol->nombre }}?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary btn-flat">Aceptar</button>
        </div>
      </div>
    </div>
  {!! Form::close() !!}
</div>
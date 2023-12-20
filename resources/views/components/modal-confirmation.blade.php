<div class="modal fade" id="exampleModal{{$farmer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$farmer->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Você realmente deseja excluir o agricultor {{$farmer->corporate_reason}}?
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Fechar</button>
                {!! Form::model(null, ['route' => ['farmers.delete', $farmer->id]]) !!}
                    @method('delete')
                    <button type="submit" class="btn btn-danger" type="button">Confirmar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

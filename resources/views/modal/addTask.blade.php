<form method="POST" v-on:submit.prevent="createKeep">
    <div class="modal fade" id="addTask">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group input-field">
                            <label for="keep">Nombre de la tarea</label>
                            <input type="text" class="form-control" name="keep" v-model="newKeep">
                            <span v-for="error in errors" class="text-danger"> @{{ error }}</span>
                        </div> 
                        <button type="submit" class="btn btn-success ml-3 float-right">Guardar</button>
                        <button type="button" class="btn btn-link ml-3 float-right" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
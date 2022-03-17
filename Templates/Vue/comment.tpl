{literal}
    <div class="card w-25 m-auto" v-for="comment in comments">
            <div class="card-body">
                <div class="d-flex">
                    <p v-for="item in Number(comment.score)" class="material-icons text-warning">star</p>
                </div>
                <p>{{comment.comentario}}</p>
                
                <div v-if="rol == 0">
                    <button v-on:click="eliminar" class="btn btn-danger" v-bind:id="`${comment.id}`">Eliminar</button>
                </div>
            </div>
    </div>
{/literal}



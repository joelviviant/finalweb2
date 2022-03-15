{literal}
    <div v-for="comment in comments">
        <p>{{comment.comentario}}</p>
        <p>Puntuo con: {{comment.score}} estrellas</p>
        <div v-if="rol == 0">
            <button v-on:click="eliminar" v-bind:id="`${comment.id}`">Eliminar</button>
        </div>
       
    </div>
{/literal}
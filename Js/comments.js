"use strict"

const API_URL="api/comments";
    let rol = document.querySelector("#user").dataset.rol;

    let app=  new Vue({
        el: '#app',
        data:{
            titulo:"Comentarios del Producto",
            comments:[],
            rol: rol
        },
        methods: {
            eliminar: function (e) {
                deleteComment(e.target.id)},

        }
    });


    async function getComments(){
        try{
            console.log(document.querySelector("#producto"));
            let id_producto = document.querySelector("#producto").dataset.id;
            let response= await fetch (API_URL + '/' + id_producto);
            
            let commentsApi= await response.json();
            console.log(commentsApi)
            app.comments=commentsApi;
        }catch (e){
            console.log(e);        
        }
    }
   
    async function getCommentsCategories(){
        try{
            console.log(document.querySelector("#categoria"));
            let id_categoria = document.querySelector("#categoria").dataset.id;
            let response= await fetch (API_URL+"Categories"+ '/' + id_categoria);

            let commentsApi= await response.json();
            console.log(commentsApi)
            app.comments=commentsApi;
        }catch (e){
            console.log(e);        
        }
    }

    
    function getCommentInitial(){
        if(window.location.pathname.includes('viewProd'))
            getComments();
        else
            getCommentsCategories();
    }

    getCommentInitial();

    async function deleteComment(idComment) {
        if(window.location.pathname.includes('viewProd')){
            let url = (API_URL + '/' + idComment);
            try {
                let response = await fetch(url, {
                    method: 'DELETE'
                });
                if(response.ok){
                    getComments();
                }
            console.log(response);
            } catch (e) {
                console.log(e);
            }
        }else{
            let url = (API_URL + 'Categories/' + idComment);
            try {
                let response = await fetch(url, {
                    method: 'DELETE'
                });
                if(response.ok){
                    getCommentsCategories();
                }
            console.log(response);
            } catch (e) {
                console.log(e);
            }
        }
       
    }

    document.addEventListener('DOMContentLoaded', function () {
    let formComment = document.querySelector("#commentsApi");
    formComment.addEventListener("submit", function (e) {
        e.preventDefault();
    });
    
    let btnAddComment = document.querySelector("#btnAdd");
    if(btnAddComment)
        btnAddComment.addEventListener("click", addComment);

    let btnAddCommentCategory = document.querySelector("#btnAddCat");
    if(btnAddCommentCategory)
        btnAddCommentCategory.addEventListener("click", addCommentCategory);
    

    function commentData() {
        let formData = new FormData(formComment);
        let id_producto = document.querySelector("#producto").dataset.id;
        let id_User = document.querySelector("#user").dataset.id;
        let comentario = formData.get("comment");
        let score = Number(formData.get("score"));
        if (comentario != '' && score != 0 && 5<=score<=1){
            let newComment = {
                "comment": comentario,
                "score": score,
                "id_product": id_producto,
                "id_user": id_User,
            }
            formComment.reset();
            return newComment;
        }
    }

    async function addComment() {
        let newComment = commentData();
        try {
            let response = await fetch(API_URL + '/',{
                "method": "POST",
                "headers": {
                    'Content-Type': 'application/json'
                },
                "body": JSON.stringify(newComment),
            });
            if (response.ok) {
                console.log("Comentario creado");
            }
        } catch (response) {
            console.log("Error de conexion");
        }
        getComments();
    }
    
    function commentDataCategory() {
        let formData = new FormData(formComment);
        let id_category = document.querySelector("#categoria").dataset.id;
        let id_User = document.querySelector("#user").dataset.id;
        let comentario = formData.get("comment");
        let score = Number(formData.get("score"));
        if (comentario != '' && score != 0 && 5<=score<=1){
            let newComment = {
                "comment": comentario,
                "score": score,
                "id_categoria": id_category,
                "id_user": id_User,
            }
            formComment.reset();
            return newComment;
        }
    }
    
    async function addCommentCategory() {
        let newComment = commentDataCategory();
        try {
            let response = await fetch(API_URL+"Categories",{
                "method": "POST",
                "headers": {
                    'Content-Type': 'application/json'
                },
                "body": JSON.stringify(newComment),
            });
            if (response.ok) {
                console.log("Comentario creado");
            }
        } catch (response) {
            console.log("Error de conexion");
        }
        getCommentsCategories();
    }


});
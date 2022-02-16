$(function(){

    if ($("#drophere").length > 0)

    {

        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let secret = $('input[name="secret"]').attr('value');

        let myDropzone = new Dropzone('#drophere', {
            url: '/announcement/images/upload',

            params: {
                _token: csrfToken,
                secret: secret
            },


            addRemoveLinks: true,

            init: function(){
                $.ajax({
                    tipe: 'GET', 
                    url: '/announcement/images',
                    data: {
                        secret: secret

                    },

                    dataType: 'json'

                }).done(function(data){
                    $.each(data,function(key,value){
                        let file = {
                            serverId: value.id
                        };

                        myDropzone.options.addedfile.call(myDropzone,file);
                        myDropzone.options.thumbnail.call(myDropzone,file,value.src);

                    });
                })


            }


        });

        myDropzone.on("success",function(file,response){

            file.serverId = response.id;
        });

        myDropzone.on("removedfile", function file(file){


            $.ajax({
                type : 'DELETE',
                URL: '/announcement/images/remove',
                data :{
                    _token:csrfToken,
                    id: file.serverId,
                    secret: secret
                },
                dataType: 'json'
            });
        });
    } 
})



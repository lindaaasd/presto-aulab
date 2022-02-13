$(function(){
    

    if($("#drophere").length > 0){
        
        let csrfToken = $('meta[name = "csrf-token"]').attr('content');
        let secret = $('input[name = "secret"]').attr('value');

        let myDropzone = new Dropzone('#drophere', {
            url: '/form_announcement/images/upload',

            params: {
                _token: csrfToken,
                secret: secret,
                paramName: "file", // The name that will be used to transfer t
            },

            addRemoveLinks: true,

            init: function(){
                $.ajax({
                    type: 'GET',
                    url: '/form_announcement/images', 
                    data: {
                        secret: secret
                    },
                    dataType: 'json'
                }).done(function(data){
                    $.each(data, function(key, value){
                        let file= {
                            serverId: value.id
                        };

                        myDropzone.options.addedfile.call(myDropzone, file);
                        myDropzone.options.thumbnail.call(myDropzone, file, value.src);
                    });
                });
            }



        });



        myDropzone.on("success", function(file, response){
            file.serverId = response.id;
        });

        myDropzone.on("removedfile", function(file){
            $.ajax({
                type: 'DELETE',
                url: '/form_announcement/images/remove',
                data: {
                    _token: csrfToken,
                    id: file.serverId,
                    secret:secret,
                },

                dataType: 'json'
                
            })
        })
    
}



})
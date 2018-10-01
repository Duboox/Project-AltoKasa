/*=============================================
=                   Ajax Web               =
=============================================*/
var ajax = {

    select_dynamic: function(route)
    {
        $('select#city').change(function(){

            var id_city = $(this).val();

            $.ajax({
                url: route[0],
                type: 'POST',
                data: { id_city : id_city },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': token
                },

                beforeSend: function()
                {
                    $('#option').text('Cargando...');
                },

                success: function(response)
                {
                    $('#area > option').remove();
                    $.each(response, function (name, id) {
                        $('select#area').append($('<option>', { value: id, text : name }));
                    });
                },
                
                error: function(response)
                {
                    $('select#area').text('¡Ha ocurrido un Error! al cargar el áreas');
                }
            });
        });
    },

    select_dynamic_edit: function(route)
    {
            var id_city = $('select#city_edit').val();

            $.ajax({
                url: route[0],
                type: 'POST',
                data: { id_city : id_city },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': token
                },

                beforeSend: function()
                {
                    $('#option').text('Selecciona...');
                },

                success: function(response)
                {
                    // $('#area_edit > option').remove();
                    $.each(response, function (name, id) {
                        $('select#area_edit').append($('<option>', { value: id, text : name }));
                    });
                },
                
                error: function(response)
                {
                    $('select#area_edit').text('¡Ha ocurrido un Error! al cargar el áreas');
                }
            });
    },

    paginate: function()
    {
        var page = 1;
        var load_ajax = $('.ajax-load').hide();
        var document_height = 1000;

        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() <= document_height) {
                page++;
                loadMoreData(page);
            }
        });

        function loadMoreData(page)
        {
            $.ajax({
                url: '?page=' + page,
                type: 'GET',
                dataType: 'json',
                    
                beforeSend: function()
                {
                  load_ajax.show();
                },

                success:function(response)
                {
                    if(response.html == ''){
                        load_ajax.hide();
                        return;
                      }else{
                        $('div#paginate').append(response.html);
                    }
                },

                error:function(error)
                {
                    console.log('error al cargar la propiedad');
                }
            });
        }
    },

    contact: function(route)
    {
        $('#tm-contact-form').validate({
            rules: {
                ref_pro:{
                    required: true,
                },
                
                name: {
                    required: true,
                    minlength: 4,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 5,
                    maxlength: 50
                },
                subject: {
                    required: true,
                    minlength: 5,
                    maxlength: 50
                },      
                message: {
                    required: true,
                    minlength: 15,
                    maxlength: 500
                },
            },
            submitHandler: function(form) {

                var form = $('#tm-contact-form');
                var button = $('.tm-submit-btn');

                    $.ajax({
                        url: route[1],
                        type: 'POST',
                        data: form.serialize(),
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': token
                        },

                        beforeSend: function()
                        {
                           button.text('Enviando...');
                           button.attr('disabled', true);
                        },

                        success: function(response)
                        {
                           button.text(response.message);
                           form[0].reset();

                            setTimeout(function(){ 
                                button.attr('disabled', false);
                                button.text('Enviar');
                            }, 2500);
                        },
                        
                        error: function(response)
                        {
                           button.text(response.error);
                        }
                    });

                return false;
            }
        });
    },

    read_more_propierty: function(route)
    {
        $('.read_more_propierty').click(function(){

            var id_propierty = $(this).data('id');

            $.ajax({
                url: route[2]+id_propierty,
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': token
                },

                beforeSend: function()
                {
                   $('.read_more_propierty').text('Cargando información...');
                },

                success: function(response)
                {
                    $('.read_more_propierty').text('Leer más');
                    $("#read_more_propierty").modal('show');

                    // Property data according to your ID
                    $('#city').text(response[0]);
                    $('#area').text(response[1]);
                    $('#operation').text(response[2]);
                    $('#type').text(response[3]);
                    $('#street_type').text(response[4]);
                    $('#surface').text(response[5]);
                    $('#living_room').text(response[6]);
                    $('#parking').text(response[7]);
                    $('#floors_number').text(response[8]);
                    $('#toilet').text(response[9]);
                    $('#room').text(response[10]);
                    $('#door').text(response[11]);
                    $('#floor').text(response[12]);
                    $('#number').text(response[13]);
                    $('#building').text(response[14]);
                    $('#extra_area').text(response[15]);
                    $('#key_chain').text(response[16]);
                    $('#notice_important').text(response[17]);
                    $('#observation').text(response[18]);
                    $('#description').text(response[19]);
                    $('#number_cadastral').text(response[20]);
                    $('#folio').text(response[21]);
                    $('#ref_cadastral').text(response[22]);
                    $('#iva').text(response[23]);
                    $('#status').text(response[24]);
                },
                
                error: function(response)
                {
                   alert('ha ocurrido un error');
                   window.location.reload();
                }
            });

            return false;
        });
    },

    // propierty: function()
    // {
    //     $('button#save-propierty').click(function(){
    //         $('form#propierty-form').submit();
    //     });
    // },

    add_search_owner: function(route)
    {
        $('#search_owner').click(function(){

            $("#search_owner_modal").modal('show');
          
            return false;
        });

        $('#add_owner').click(function(){

            $("#add_owner_modal").modal('show');
          
            return false;
        });

        $('#save_owner').click(function(){

            $('form#owner_register').validate({
                rules: {
                    first_name: {
                        required: true,
                        minlength: 4,
                        maxlength: 50
                    },

                    last_name: {
                        required: true,
                        minlength: 4,
                        maxlength: 50
                    },

                    phone: {
                        required: true,
                        number: true
                    },
                },
                submitHandler: function(form) {

                    var form = $('#owner_register');
                    var button = $('button.button-owner');

                        $.ajax({
                            url: route[2],
                            type: 'POST',
                            data: form.serialize(),
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': token
                            },

                            beforeSend: function()
                            {
                               button.text('Cargando...');
                               button.attr('disabled', true);
                            },

                            success: function(response)
                            {
                               form[0].reset();

                                setTimeout(function(){ 
                                    button.attr('disabled', false);
                                    button.text('Enviar');
                                }, 2500);

                                $("#first_name").val(response.first_name);
                                $("#last_name").val(response.last_name);
                                $("#phone").val(response.phone);
                                $("#cell_phone").val(response.cell_phone);
                                $("#work_phone").val(response.work_phone);
                                $("#description").val(response.description);

                                alert('success');

                                $("#add_owner_modal").modal('hide');
                            },
                            
                            error: function(response)
                            {
                               button.text(response.error);
                            }
                        });

                    return false;
                }
            });

        });
    },

    query_owner: function(route){

        $('select#query_owner').change(function(){

            var id_owner = $(this).val();

            $.ajax({
                url: route[1]+id_owner,
                type: 'POST',
                data: { id_owner : id_owner },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': token
                },

                beforeSend: function()
                {
                    $('#option').text('Cargando...');
                },

                success: function(response)
                {
                    $("#search_owner_modal").modal('hide');

                    $("#first_name").val(response.first_name);
                    $("#last_name").val(response.last_name);
                    $("#phone").val(response.phone);
                    $("#cell_phone").val(response.cell_phone);
                    $("#work_phone").val(response.work_phone);
                    $("#description").val(response.description);
                },
                
                error: function(response)
                {
                    alert('error');
                }
            });
        });
    },
};
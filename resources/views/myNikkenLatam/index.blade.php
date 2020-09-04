<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
</head>
<body>
    <form class="form-horizontal" id="formmass" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="id" class="form-control" id="id_mass"  disabled>
        <input type='text' name="fecha" class='form-control input-number-line' id='fecha_mass'  maxlength='45' required='required' autofocus> <br>
        <input type='file' name="fotogeneral_mass_file[]" class='form-control' id='fotogeneral_mass_file' maxlength='45' required='required' autofocus> <br>
        <input type='file' name="fotogeneral_mass_file[]" class='form-control' id='fotodetalle_mass_file' maxlength='45' required='required' autofocus> <br><br>             
    
        <button type="submit" id="acciones" class="btn btn-warning edit">Guardar</button>
    
    </form>
    @php
        $fecha = 'Sep 10, 2020';
        $fecha = str_replace(",", "", $fecha);
        $fecha = explode(' ', $fecha);
        $fecha = $fecha[1] . '-' . $fecha[0] . '-' . $fecha[2];
        $fecha = DateTime::createFromFormat('j-M-Y', $fecha);
        echo $fecha->format('Y-m-d') . ' 00:00:00.000';
    @endphp
</body>
<script>
    $("#id_mass").val("Hola mundo");

    $('#formmass').on('submit', function(e) {
        console.log("prevent");
        // evito que propague el submit
        e.preventDefault();
        
        // agrego la data del form a formData
        var formData = new FormData(this);
        formData.append('_token', $('input[name=_token]').val());
        console.log(formData);
        $.ajax({
            type:'POST',
            url: '/saveData',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                alert('Validation true!', 'se pudo Añadir los datos<br>');
            },
            error: function(jqXHR, text, error){
                alert('Validation error!', 'No se pudo Añadir los datos<br>');
            }
        });
    });
</script>
</html>
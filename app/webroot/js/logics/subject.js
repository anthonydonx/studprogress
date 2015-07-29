$(document).ready(function() {
getSubjects();    
    $("#btn_add_subject").bind("click", function() {
        var name = $('#name').val();
        var hours = $('#hours').val();
        var revisionhours = $('#revisionhours').val();
       
             
        $.ajax({
            url: "subject/saveSubject",     //url
            data: {name: name, hours: hours,revisionhours:revisionhours},
            type: 'POST',
            success: function() {
               alert("Save Completed");
               getSubjects();
            
        $('#name').val('');
        $('#hours').val('');
        $('#revisionhours').val('');
      
       
            }

        });
    });


function getSubjects() {
   $("#accordion > tbody").html("");  
    $.ajax({
        url: "subject/getSubject",
        data: {},
        type: 'POST',
        dataType: 'json',
        success: function(data) {               
            for (i = 0; i < data.Data.length; i++) {
                var Str = '<tr class="active">';
                
                Str += '<td>'+data.Data[i].Subject.name+'</td>';
                Str += ' <td>'+data.Data[i].Subject.hours+'</td>';
                Str += ' <td>'+data.Data[i].Subject.revisionhours+'</td>';
               
               
                Str += '</tr>';
                $("#accordion").find('tbody').append( Str );
                
            }
        }

    });
}



 });




       
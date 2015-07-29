$(document).ready(function() {
getStudents();    //table
    $("#btn_add_student").bind("click", function() {
        var fullname = $('#fullname').val();
        var address = $('#address').val();
        var mobile = $('#mobile').val();
             
        $.ajax({
            url: "student/saveStudent",     //url
            data: {fullname: fullname, address: address,mobile:mobile},
            type: 'POST',
            success: function() {
               alert("Save Completed");
               getStudents();
            
        $('#fullname').val('');
        $('#address').val('');
        $('#mobile').val('');
       
            }

        });
    });


function getStudents() {
   $("#accordion > tbody").html("");  
    $.ajax({
        url: "student/getStudent",
        data: {},
        type: 'POST',
        dataType: 'json',
        success: function(data) {               
            for (i = 0; i < data.Data.length; i++) {
                var Str = '<tr class="active">';
                
                Str += '<td>'+data.Data[i].Student.fullname+'</td>';
                Str += ' <td>'+data.Data[i].Student.address+'</td>';
                Str += ' <td>'+data.Data[i].Student.mobile+'</td>';
               
                Str += '</tr>';
                $("#accordion").find('tbody').append( Str );
                
            }
        }

    });
}



 });




       
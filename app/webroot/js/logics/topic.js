$(document).ready(function() {

$.ajax({
        url: "topic/getSubjects",
        data: {},
        type: 'GET',
        dataType: 'json',
        success: function(da) { 

            $('#subjectsname').empty();  //to null box

 for (i = 0; i < da.Data.length; i++) {

$('#subjectsname').append($("<option></option>")   
         .attr("value",da.Data[i].Subject.name)
         .text(da.Data[i].Subject.name)); 

}

}
});

getTopics();    
    $("#btn_add_topic").bind("click", function() {
        var subjectsname = $('#subjectsname').val();
        var title = $('#title').val();
        var minhours = $('#minhours').val();
        var minrevisionhours = $('#minrevisionhours').val();
       
             
        $.ajax({
            url: "topic/saveTopic",     //url
            data: { subjectsname:subjectsname,title: title, minimumhours: minhours,minrevisionhours:minrevisionhours},
            type: 'POST',
            success: function() {
               alert("Save Completed");
               getTopics();
         
        $('#subjectsname').val('');   
        $('#title').val('');
        $('#minhours').val('');
        $('#minrevisionhours').val('');
      
       
            }

        });
    });


function getTopics() {
   $("#accordion > tbody").html("");  
    $.ajax({
        url: "topic/getTopic",
        data: {},
        type: 'POST',
        dataType: 'json',
        success: function(datat) {               
            for (i = 0; i < datat.Data.length; i++) {
                var Str = '<tr class="active">';
                
                Str += '<td>'+datat.Data[i].Topic.subjectsname+'</td>';
                Str += '<td>'+datat.Data[i].Topic.title+'</td>';
                Str += ' <td>'+datat.Data[i].Topic.minimumhours+'</td>';
                Str += '<td>'+datat.Data[i].Topic.minrevisionhours+'</td>';
               
               
                Str += '</tr>';
                $("#accordion").find('tbody').append( Str );
                
            }
        }

    });
}



 });




       
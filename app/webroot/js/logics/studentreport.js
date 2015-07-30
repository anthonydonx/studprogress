$(document).ready(function() {

getreport();

 });

function getreport() {
   $("#stureport_table > tbody").html("");  
    $.ajax({
        url: "studentreport/getStudentreport",
        data: {},
        type: 'POST',
        dataType: 'json',
        success: function(data) {               
            for (i = 0; i < data.Data.length; i++) {
                var Str = '<tr class="active">';
                
                Str += '<td>'+data.Data[i].Students_topic.Studentsid+'</td>';
                Str += '<td>'+data.Data[i].Students_topic.Topicstitle+'</td>';
                Str += ' <td>'+data.Data[i].Students_topic.spendhours+'</td>';
                Str += ' <td>'+data.Data[i].Students_topic.revisionhours+'</td>';
               
               
                Str += '</tr>';
                $("#stureport_table").find('tbody').append( Str );
                
            }
        }

    });
}



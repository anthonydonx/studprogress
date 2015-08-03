$(document).ready(function() {
    $('#studentsid').change();
    $('#studentsid').change(function(){
         getreport($("#studentsid").val());

    });

//getreport();

 //});
$.ajax({
    url : "studentreport/reportstudentname",
    data : {},
    type : 'POST',
    dataType : 'json',
    success : function(rsid) {

    $('#studentsid').empty();

    for(i=0; i<rsid.Data.length; i++){
      
      $('#studentsid').append($("<option></option>")
            .attr("value",rsid.Data[i].Student.id)
            .text(rsid.Data[i].Student.fullname));


    }

    }
    
});


function getreport(selectedValue) {
   $("#stureport_table > tbody").html("");  
    $.ajax({
        url: "studentreport/getStudentreportname",
        data: {selectedStudent:selectedValue},
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


});
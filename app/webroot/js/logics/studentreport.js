$(document).ready(function() {
    $('#studentsid').change();
    $('#studentsid').change(function(){
        getreport($("#studentsid").val());

        getdetails($("#studentsid").val());

        getstudentssubject($("#studentsid").val());
  });
 


// student select box
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

// Table report ,according to student name
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

// Table Student details

function getdetails(selecteddetails){
$("#studetails_table > tbody").html("");
$.ajax({
    url : "studentreport/getstudentdetails",
    data: {selectstudentdet:selecteddetails},
    type : 'POST',
    dataType: 'json',
    success: function(datad){
            for (i = 0; i < datad.Data.length; i++) {
                var Str = '<tr class="active">';
                
                Str += '<td>'+datad.Data[i].Student.fullname+'</td>';
                Str += ' <td>'+datad.Data[i].Student.address+'</td>';
                Str += ' <td>'+datad.Data[i].Student.mobile+'</td>';
               
                Str += '</tr>';
                $("#studetails_table").find('tbody').append( Str );
                
            }
        }

    });
}

// Table student subject

function getstudentssubject(selectedvalue){
    $("#stusubject_table > tbody").html("");
    $.ajax({
          url : "studentreport/getstudentsubject",
          data : {selectedsubject:selectedvalue},
          type : 'POST',
          dataType : 'json',
          success : function(datas){
             for(i = 0; i < datas.Data.length; i++){

                var strs = '<tr class="active">';
             strs += '<td>'+datas.Data[i].Students_subject.Studentsid+'</td>';
             strs += '<td>'+datas.Data[i].Students_subject.Subjectsname+'</td>';

                 strs +='</tr>';
                 $("#stusubject_table").find('tbody').append(strs);




             }

          }

       });
     }








});
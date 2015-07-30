$(document).ready(function(){
//Get all students
getStudents();
$( "#studentsid" ).change(function() {
 getSelectedStudentSubject($('#studentsid').val());

});
	
});

function getStudents(){
//Student select box 
$.ajax({
    url : "student/getStudent",
    data : {},
    type : 'POST',
    dataType : 'json',
    success : function(da)  {

    $('#studentsid').empty();

    for(i=0; i<da.Data.length; i++){
      
     $('#studentsid').append($("<option></option>")   
         .attr("value",da.Data[i].Student.id)
         .text(da.Data[i].Student.fullname)); 
    }
getSelectedStudentSubject($('#studentsid').val());
    }

});
}

function getSelectedStudentSubject(SelectStudent){
$.ajax({
    url : "studsubject/getSelectedStudentSubject",
    data : {studentID:SelectStudent},
    type : 'POST',
    dataType : 'json',
    success : function(da)  {

    $('#subject').empty();

    for(i=0; i<da.Data.length; i++){
      
     $('#subject').append($("<option></option>")   
         .attr("value",da.Data[i].Students_subject.Subjectsname)
         .text(da.Data[i].Students_subject.Subjectsname)); 
    }

    getSubjectRelatedTopics($('#subject').val());
    }

});
}

function getSubjectRelatedTopics(Subjectname){
$.ajax({
    url : "topic/getSubjectRelatedTopics",
    data : {SubjectID:Subjectname},
    type : 'POST',
    dataType : 'json',
    success : function(da)  {

    $('#topic').empty();

    for(i=0; i<da.Data.length; i++){
      
     $('#topic').append($("<option></option>")   
         .attr("value",da.Data[i].Topic.title)
         .text(da.Data[i].Topic.title)); 
    }
    }

});


}
/**
 * Created by Vidushan on 1/9/2018.
 */
$("#membefirstrname").keyup(function() {





    $.ajax({
        type: 'GET',
        url : "/SMSITP/public/memberslist/",
        success : function (data) {
            $("#tab1").html(data);
        }
    });
});

$("#issuebookname").keyup(function(e) {


    console.log(e.target.value);
    if(e.target.value.length > 6){
        $.ajax({
            type: 'GET',
            url : "/SMSITP/public/memberslist/",
            success : function (data) {
                // $("#tab1").html(data);
                console.log(data);
                 $("#isbnnumber").value(data[0].name);
            }
        });
    }
    //

});

$('.membefirstrname').autocomplete({
    nameProperty: 'name',
    valueField: '#hidden-field',
    dataSource: '/SMSITP/public/memberslist/'
});


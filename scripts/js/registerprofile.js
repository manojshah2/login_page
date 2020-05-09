$(document).ready(function(){
    $("#aboutme").toggle();

    
    $(document).on('click', ".item", function (e) {
        e.preventDefault();
        $('.collapsable div').toggle();

        var id=e.target.hash;
        
    });

    $(document).on('click','#createprofile',function(){
        $("#profileSpinner").show();

        var array = $("#profileFrm").serializeArray();
        var json={};
    
        jQuery.each(array, function() {
            json[this.name] = this.value || '';
        });

        console.log(json);

        $.ajax({
            url: "addprofile.php",
            method: 'POST',
            data: JSON.stringify( json),
            contentType:"application/json",
            dataType: 'json',            
            success: function (data1, status, xhr) {
                $("#profileSpinner").hide();
                if (data1["status"] === "failure") {
                    $("#profileMessage").html(data1["message"]);
                } else {
                    $("#profileMessage").html(data1["message"]);                    
                }
            }
        });
    });
});
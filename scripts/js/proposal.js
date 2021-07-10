$(document).ready(function(){

    var profileId_value=$("#profileId").val();
    if(profileId_value!==undefined && profileId_value.length>0){
        $("#unique_id").val($("#profileId").val());
        var id=$("#unique_id").val();
        $.ajax({
            url: "/api/getProfileDetails.php?id="+id,
            method: 'GET',            
            contentType:"application/json",
            dataType: 'json',            
            success: function (data1, status, xhr) {
                $("#profile_name").val(data1["data"]["name"]);                
                $("#profile_source").val(data1["data"]["source"]); 
                
            }
        });
        $("#copy_div").removeClass("d-none");
        $("#update_shortlisted").prop( 'checked',true);
    }

    $('#proposed_by').tagator({autocomplete: proposed_by,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#profile_status').tagator({autocomplete: profile_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#profile_shortlisted_status').tagator({autocomplete: profile_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#rejection_reason').tagator({autocomplete: proposal_rejection_reason,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#meeting_type').tagator({autocomplete: meeting_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#meeting_status').tagator({autocomplete: meeting_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#coordinator').tagator({autocomplete: coordinator,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    
    $(document).on('change','#profile_status',function(e){
        var profile_status=$("#profile_status").val();
        if(profile_status==="Meeting Fixed"){
           $("#meeting_div").removeClass("d-none");
        }else{
            $("#meeting_div").addClass("d-none");
        }
        
    });

    $(document).on('blur','#profile_shortlisted_id',function(e){
        var id=$("#profile_shortlisted_id").val();
        $.ajax({
            url: "/api/getProfileDetails.php?id="+id,
            method: 'GET',            
            contentType:"application/json",
            dataType: 'json',            
            success: function (data1, status, xhr) {
                $("#profile_shortlisted_name").val(data1["data"]["name"]);                
                $("#profile_shortlisted_source").val(data1["data"]["source"]); 
                
            }
        });
    });

    function getProfile(id){
        var profiles='';
        $.ajax({
            url: "/api/getProfileDetails.php?id="+id,
            method: 'GET',            
            contentType:"application/json",
            dataType: 'json',            
            success: function (data1, status, xhr) {
                profiles=data1["data"]["name"]+'|'+data1["data"]["source"];                
                
            }
        });
        return profiles;
    }

    $(document).on('click','#updateProposal',function(e){
        $("#profileSpinner").show();
        
        var url=document.URL;
        if (url.includes("toUrl=")){
            url=url.split("toUrl=")[1];
        }else{
            url="/profile/listproposal.php";
        }

        var array = $("#proposal_form").serializeArray();
        var pid=$("#uniqueId").val();
        var pid_param="";
        if(pid!==undefined){            
            pid_param="?uniqueId="+pid;            
        }

        var json={};
        jQuery.each(array, function() {
            json[this.name] = this.value || '';
        });

        var errors=[];

        if (errors.length>0){
            var message='<div class="alert alert-danger">' + errors +"</div>";
            $("#profileMessage").html(message);
        }else{    
            $.ajax({
                url: "/addproposal.php"+pid_param,
                method: 'POST',
                data: JSON.stringify(json),
                contentType:"application/json",
                dataType: 'json',            
                success: function (data1, status, xhr) {
                    $("#profileSpinner").hide();
                    if (data1["status"] === "failure") {
                        var message='<div class="alert alert-danger">' + data1["message"] +"</div>";
                        $("#profileMessage").html(message);
                    } else {
                        window.location.href=url;
                    }
                }
            });
        }
    });
});
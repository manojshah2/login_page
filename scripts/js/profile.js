$(document).ready(function(){
    $(document).on('click', '#add_comment', function () {                                 
        $.simpleDialog({
            title: "Add Comment",
            message: "<textarea class='form-control' id='usercomment' name='comment'></textarea>",
            confirmBtnText: "Submit",
            closeBtnText: "Cancel",
            backdrop: true,
            onSuccess: function () {
                var comment=document.getElementById("usercomment").value;
                var pid=document.getElementById("profileid").value;
                saveData(pid,comment);
                loadComments(pid);
            },
            onCancel: function () {

            }
        });
    });

    function saveData(pid,comment) {
        $.ajax({
            url: "/api/saveComment.php",
            method: 'POST',
            data: {"profilechecksum": pid,"comment":comment},
            dataType: 'json',
            success: function (data, status, xhr) {
                var alertmessage = '<div class="alert alert-success alert-dismissible" role="alert" id="myalert">\
                        ' + data.message + '\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true">&times;</span>\
                        </button>\
                    </div>';
                $("#myalert").html(alertmessage);
            },
            error: function(jqXHR, exception){
                var alertmessage = '<div class="alert alert-danger alert-dismissible" role="alert" id="myalert">\
                        Error Occured\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true">&times;</span>\
                        </button>\
                    </div>';
                $("#myalert").html(alertmessage);
            }
        });    
        
        loadComments(pid);
    }

    function loadComments(pid) {
        $.ajax({
            url: "/api/getComments.php",
            method: 'POST',
            data: {"profilechecksum": pid},
            dataType: 'json',
            success: function (data, status, xhr) {
                var comments=data["data"];
                var i=0;
                var all_comments=[];
                for(i=0;i<comments.length;i++){
                    var _comment=comments[i]["comments"];
                    var _date=comments[i]["Date"];
                    var _user=comments[i]["User"];

                    var comments_div = '<div class="row row-border-bottom"><div class="col-sm-12"> \
                        <label class="col-sm-5 control-label1">'+ _comment +'</label> \
                        <label class="col-sm-3 control-label1">'+ _date +'</label> \
                        <label class="col-sm-1 control-label1">'+ _user +'</label> \
                        </div></div>';
                    all_comments.push(comments_div);
                }
                
                $("#comments_container").html(all_comments);
            },
            error: function(jqXHR, exception){
                var alertmessage = '<div class="alert alert-danger alert-dismissible" role="alert" id="myalert">\
                        Error Occured\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true">&times;</span>\
                        </button>\
                    </div>';
                $("#myalert").html(alertmessage);
            }
        });            
    }
   
   // var pid=document.getElementById("pid");
   
   var url=document.URL;
   var ix=url.search("=");
   var pid=url.substring(ix+1);
    loadComments(pid);
   
});
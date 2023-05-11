$(document).ready(function(){
    //For Insert Data In Categort Table
    $(document).on("click","#addcat",function(){
        var catname = $("#catname").val();   
        var catdes = $("#catdes").val();  
        var catstatus = $("#catstatus").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/addcatmodal",
            type: "post",
            data:{
                name:catname,
                des:catdes,
                status:catstatus,

            },
            success: function(response){
                $("#catname").val();  
                $("#catdes").val();  
                $("#catstatus").val();
                $("#addcatModal").modal('hide');
                show();
            },
        });
    });
    show();
    //For Display Category Items
    function show(){
        $.ajax({
            url: "/show-category",
            type: "get",
            // data:{

            // },
            success: function(rsp){
                if(rsp.status == 200){
                    var Data = "";
                    $.each(rsp.AllData, function(key,val){
                        Data+='<tr>\
                        <td>'+val.id+'</td>\
                        <td>'+val.catname+'</td>\
                        <td>'+val.catdes+'</td>\
                        <td>'+val.catstatus+'</td>\
                        <td>\
                            <button id="cateditBtn" value="'+val.id+'" class="btn btn-info btn-sm">Edit</button>\
							<button id="catdeleteBtn" value="'+val.id+'" class="btn btn-danger btn-sm">Delete</button>\
                        </td>\
                    </tr>'
                    });
                    $("#tbody").html(Data);
                }
                
            }
        });
    }

    //for Delete value Move
    $(document).on("click","#catdeleteBtn", function(){
        var id = $(this).val();
        $("#delteModal").modal('show');
        $("#deletecat").val(id);
    })
    //for Delete Cat
    $(document).on("click","#deletecat", function(){
        var id = $(this).val();
        $.ajax({
            url: "delete-category/"+id,
            type: "get",
            success: function(rsp){
                show();
                $("#delteModal").modal('hide');
            },
        });
    });

     //for Edit cat
     $(document).on("click","#cateditBtn", function(){
        var id = $(this).val();
        $("#editcatModal").modal('show');
        $("#updatecate").val(id);
        $.ajax({
            url: "edit-category/"+id,
            type: "get",
            success: function(rsp){
                $(".catname").val(rsp.AllData.catname);  
                $(".catdes").val(rsp.AllData.catdes);  
                $(".catstatus").val(rsp.AllData.catstatus);
            },
        });
    })
     //for Update cat
     $(document).on("click","#updatecate", function(){
        var id = $(this).val();
        var catname = $(".catname").val();
        var catdes = $(".catdes").val();
        var catstatus = $(".catstatus").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "update-category/"+id,
            type: "post",
            data: {
                name:catname,
                des:catdes,
                status:catstatus,
            },
            success: function(rsp){
                alert(rsp.message);
                show();
                $("#editcatModal").modal('hide');
            },
        });
    })

});
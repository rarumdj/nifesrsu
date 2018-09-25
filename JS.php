<?php
include('connection.php');
?>
<style>
    .button_like {
    background-image: url(like.png);
    background-color: hsl(0, 0%, 97%);
    background-repeat: no-repeat; 
    background-position: 2px 0;
    border: none;           
    cursor: pointer;       
    height: 32px;          
    padding-left: 40px;    
    vertical-align: middle;
    color: hsl(0, 0%, 33%);
    border-color: hsl(0, 0%, 60%);
    -webkit-box-shadow: inset 0 1px 0 hsl(0, 100%, 100%),0 1px 0 hsla(0, 0%, 0%, .08);
    box-shadow: inset 0 1px 0 hsl(0, 100%, 100%),0 1px 0 hsla(0, 0%, 0%, .08);

}
.button_unlike {
    background-image: url(like.png);
    background-color: hsl(0, 0%, 97%);
    background-repeat: no-repeat; 
    background-position: 2px -31px;
    border: none;           
    cursor: pointer;       
    height: 32px;          
    padding-left: 40px;    
    vertical-align: middle;
    color: hsl(0, 0%, 33%);
    border-color: hsl(0, 0%, 60%);
    -webkit-box-shadow: inset 0 1px 0 hsl(0, 100%, 100%),0 1px 0 hsla(0, 0%, 0%, .08);
    box-shadow: inset 0 1px 0 hsl(0, 100%, 100%),0 1px 0 hsla(0, 0%, 0%, .08);

}
.grid
{
    height: 100px;
    width: 450px;
    margin: 0 auto;
    margin-top: 80px;
    text-align:middle;
}
</style>
<div class="grid">
<span id="status"></span><br>
<input type="button" value="<?php echo $likes; ?>" class="button_like" id="linkeBtn" />
<input type="button" value="<?php echo $unlikes; ?>" class="button_unlike" id="unlinkeBtn" />
</div>
<script>
    $(document).ready(function() {
$("#linkeBtn").removeAttr("disabled");
$("#unlinkeBtn").removeAttr("disabled");
$('#linkeBtn').click(function(e)
    {
        var val = parseInt($("#linkeBtn").val(), 10);
        $.post("in.php", {op:"likes"},function(data)
        {
            if(data==1)
            {
                $("#status").html("Liked Sucessfully!!");
                val = val+1;
                $("#linkeBtn").val(val);
                $("#linkeBtn").attr("disabled", "disabled");
                $("#linkeBtn").css("background-image","url(likebw.png)");
            }
            else
            {
                $("#status").html("Already Liked!!");
            }
        })
    });
    $('#unlinkeBtn').click(function(e)
    {
        var val = parseInt($("#unlinkeBtn").val(), 10);
        $.post("in.php", {op:"dislikes"},function(data)
        {
            if(data==1)
            {
                val = val+1;
                $("#unlinkeBtn").val(val);
                $("#unlinkeBtn").attr("disabled", "disabled");
                $("#unlinkeBtn").css("background-image","url(likebw.png)");
                $("#status").html("Un-liked Sucessfully!!");
            }
            else
            {
                $("#status").html("Already Un-liked!!");
            }
        })
    });            
});
</script>
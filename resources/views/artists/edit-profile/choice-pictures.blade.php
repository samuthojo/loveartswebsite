<form id="choicePicturesForm" class="lv-form" action="{{url('/saveArtistPictures')}}" enctype="multipart/form-data" method="POST">
    {{csrf_field()}}
    <h3 class="form-title">Choice pictures</h3>

    <label>
        Add pictures:
        <input type="file" name="user_pictures[]" multiple accept="image/*" placeholder="Choose your pictures" onchange="previewImages(this)">
    </label>

    <div id="artistPictures" class="layout wrap">

    </div>
    <br>
    <div class="layout">
        <a href="#socialMediaLinks" class="btn back-btn step"><i class="fa fa-chevron-left"></i>&emsp;SOCIAL MEDIA LINKS</a>
        <button class="save-pictures-btn" type="submit" disabled>SAVE PICTURES</button>
    </div>
</form>


<script>
    function previewImages(input) {
        var loaded_files = 0;
        var files_count = input.files.length;
        $("#artistPictures").html("");
        if (input.files && files_count) {
            $("#newPicturesGrid").addClass("images-set");

            $('.save-pictures-btn').removeAttr("disabled");
            for(var i = 0; i < files_count; i++){
                if(input.files[i]){
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        loaded_files++;
                        var img = $('<div class="artist-picture"><img src="'+e.target.result+'"/></div>');
                        $("#artistPictures").append(img);
//                        if(loaded_files == files_count){
//                            arrangeImages();
//                        }
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        }else{
//            $("#newPicturesGrid").removeClass("images-set");
            $('.save-pictures-btn').attr("disabled", "disabled");
        }
    }
</script>
<?php
$text = "-- " . __('Select one Option') . " --";
?>
<div class="form-group">
    <label class="col-md-4 control-label"><?php echo __("First Name"); ?></label>
    <div class="col-md-8 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  id="first_name" placeholder="<?php echo __("Last Name"); ?>" class="form-control"  type="text" value="<?php echo $user->getFirst_name(); ?>" required >
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label"><?php echo __("Last Name"); ?></label>
    <div class="col-md-8 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  id="last_name" placeholder="<?php echo __("Last Name"); ?>" class="form-control"  type="text" value="<?php echo $user->getLast_name(); ?>" required >
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label"><?php echo __("Address"); ?></label>
    <div class="col-md-8 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  id="address" placeholder="<?php echo __("Address"); ?>" class="form-control"  type="text" value="<?php echo $user->getAddress(); ?>" required >
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label"><?php echo __("Zip Code"); ?></label>
    <div class="col-md-8 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  id="zip_code" placeholder="<?php echo __("Zip Code"); ?>" class="form-control"  type="text" value="<?php echo $user->getZip_code(); ?>" required >
        </div>
    </div>
</div>

<?php
$countries = IP2Location::getCountries();
?>
<div class="form-group">
    <label for="status" class="col-md-4 control-label"><?php echo __("Country"); ?>:</label>
    <div class="col-md-8 inputGroupContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <select class="form-control input-sm" name="country" id="country">
                <option><?php echo $text; ?></option>
                <?php
                foreach ($countries as $key => $value) {
                    echo '<option>' . $value . '</option>';
                }
                ?>
            </select>
        </div>

    </div>
</div> 


<div class="form-group">
    <label for="status" class="col-md-4 control-label"><?php echo __("Region"); ?>:</label>
    <div class="col-md-8 inputGroupContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <select class="form-control input-sm" name="region" id="region">
                <option><?php echo $text; ?></option>
            </select>
        </div>

    </div>
</div> 

<div class="form-group">
    <label for="status" class="col-md-4 control-label"><?php echo __("City"); ?>:</label>
    <div class="col-md-8 inputGroupContainer">

        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <select class="form-control input-sm" name="city" id="city">
                <option><?php echo $text; ?></option>
            </select>
        </div>

    </div>
</div> 

<div class="form-group">
    <div class="col-md-12 ">
        <div id="documentImage"></div>
        <center>
            <a id="upload-btnDocument" class="btn btn-success"><i class="fa fa-upload"></i> <?php echo __("Upload a Document Image"); ?></a>
        </center>
    </div>
    <input type="file" id="uploadDocument" value="Choose a file" accept="image/*" style="display: none;" />
</div>
<script>

    var uploadCropDocument;
    function savePersonalInfo() {
        $('#aPersonalInfo').tab('show');
        modal.showPleaseWait();

        uploadCropDocument.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {
            $.ajax({
                type: "POST",
                url: "<?php echo $global['webSiteRootURL']; ?>objects/userUpdatePersonal.json.php",
                data: {
                    imgBase64: resp,
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    address: $('#address').val(),
                    zip_code: $('#zip_code').val(),
                    country: $('#country').val(),
                    region: $('#region').val(),
                    city: $('#city').val()
                }
            }).done(function (o) {
                $('#aBasicInfo').tab('show');
                modal.hidePleaseWait();
            });
        });

    }



    $(document).ready(function () {
        $('#uploadDocument').on('change', function () {
            readFile(this, uploadCropDocument);
        });
        $('#upload-btnDocument').on('click', function (ev) {
            $('#uploadDocument').trigger("click");
        });


        uploadCropDocument = $('#documentImage').croppie({
            url: '<?php echo $global['webSiteRootURL']; ?>objects/userDocument.png.php?users_id=<?php echo User::getId(); ?>',
                        enableExif: true,
                        enforceBoundary: false,
                        mouseWheelZoom: false,
                        viewport: {
                            width: 640,
                            height: 450
                        },
                        boundary: {
                            width: 640,
                            height: 450
                        }
                    });
                    
                    $("#country").on("change", function (e) {
                        modal.showPleaseWait();
                        $.ajax({
                            url: '<?php echo $global['webSiteRootURL']; ?>plugin/User_Location/regions.json.php?country=' + $('#country').val(),
                            success: function (response) {
                                $('#region').empty();
                                $('#region').append($("<option></option>").text('<?php echo $text; ?>'));
                                $('#city').empty();
                                $('#city').append($("<option></option>").text('<?php echo $text; ?>'));
                                $.each(response, function (key, value) {
                                    $('#region').append($("<option></option>").attr("value", value).text(value));
                                });
                                modal.hidePleaseWait();
                            }
                        });
                    });

                    $("#region").on("change", function (e) {
                        modal.showPleaseWait();
                        $.ajax({
                            url: '<?php echo $global['webSiteRootURL']; ?>plugin/User_Location/cities.json.php?country=' + $('#country').val() + '&region=' + $('#region').val(),
                            success: function (response) {
                                $('#city').empty();
                                $('#city').append($("<option></option>").text('<?php echo $text; ?>'));
                                $.each(response, function (key, value) {
                                    $('#city').append($("<option></option>").attr("value", value).text(value));
                                });
                                modal.hidePleaseWait();
                            }
                        });
                    });
                });
</script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet"/>
<link href="<?=base_url('resources/js/fine-uploader/fine-uploader-new.css')?>" rel="stylesheet">

<link href="https://fineuploader.com/css/custom.css"></link>
<style>
        #trigger-upload {
            color: white;
            background-color: #00ABC7;
            font-size: 14px;
            padding: 7px 20px;
            background-image: none;
        }

        #fine-uploader-manual-trigger .qq-upload-button {
            margin-right: 15px;
        }

        #fine-uploader-manual-trigger .buttons {
            width: 36%;
        }

        #fine-uploader-manual-trigger .qq-uploader .qq-total-progress-bar-container {
            width: 60%;
        }
    </style>

<div class="container">
<h2><?php echo $cursor->name;?></h2>
<hr />
<form action="<?=site_url('course/'.$cursor->id.'/update');?>" class="dropzone" id="my-awesome-dropzone" method="POST">
    <h3>基本信息</h3>
    <p>课程名称:<input type="text" name="name" value="<?php echo $cursor->name;?>"></p>
    <p>创建时间:<input type="text" name="created_at" value="<?php echo $cursor->created_at;?>"></p>
    <p>结束时间:<input type="text" name="finished_at" value="<?php echo $cursor->finished_at;?>"></p>

    <p>课程介绍:<textarea name="desc"><?php echo $cursor->desc;?></textarea></p>

    <h3>课程所含视频</h3>
    <?php if (empty($videos)):?>
        暂无视频
    <?php else:?>
        <?php foreach ($videos as $video):?>
            <a href="<?=site_url('video/'.$video->id);?>"><?php echo $video->name;?></a><br/>
        <?php endforeach;?>
    <?php endif;?>
    <!-- Fine Uploader DOM Element
    ====================================================================== -->

    <div id="fine-uploader-gallery" name="userfile"></div>
    <input type="submit" name="submit"/>
</form>
</div>

<!-- <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.js"></script> -->
<!-- Fine Uploader Gallery template
    ====================================================================== -->
    <script type="text/template" id="qq-template-gallery">
        <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>


                <div class="qq-upload-button-selector qq-upload-button">
                    <div>Select files</div>
                </div>
                <button type="button" id="trigger-upload" class="btn btn-primary">
                    <i class="icon-upload icon-white"></i> Upload
                </button>

            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <div class="qq-progress-bar-container-selector">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                    <span class="qq-upload-file-selector qq-upload-file"></span>
                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                    <span class="qq-upload-size-selector qq-upload-size"></span>
                    <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                    <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>

    <!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
    ====================================================================== -->
<script type="text/javascript">
$('#fine-uploader-gallery').fineUploader({
    debug: true,
    template: 'qq-template-gallery',
    request: {
        endpoint: '<?=site_url('course/'.$course->id.'/upload_homework')?>'
    },
    retry:{
        enableAuto: true,
    },
    deleteFile: {
        enabled: true, // defaults to false
        endpoint: '<?=site_url('course/delete_homework')?>',
    },
    thumbnails: {
        placeholders: {
            waitingPath: '<?=base_url('resources/image/fine-uploader/placeholders/waiting-generic.png')?>',
            notAvailablePath: '<?=base_url('resources/image/fine-uploader/placeholders/not_available-generic.png')?>'
        }
    },
    autoUpload: false,
    validation: {
        allowedExtensions: ['doc', 'txt']
    }
});
$('#trigger-upload').click(function() {
    $('#fine-uploader-gallery').fineUploader('uploadStoredFiles()');
});
</script>

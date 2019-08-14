<?php

    $title = '';
    $desc = '';
    $type = '';
    $url_foto = '';
    $url_media = '';

    if (isset($row->title)){
        $title = $row->title;
    }

    if (isset($row->desc)){
        $desc = $row->desc;
    }

    if (isset($row->type)){
        $type = $row->type;
    }

    if (isset($row->photos_url)){
        $url_foto = $row->photos_url;
    }

    if (isset($row->non_photos_url)){
        $url_media = $row->non_photos_url;
    }


?>

<div class="form-group">
    <label class="control-label col-sm-2">Title</label>
    <div class="col-sm-10">
        <input name="title" type="text" title="Title" class="form-control" id="title" value="{{$title}}">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2">Media Type</label>
    <div class="col-sm-10">
        <div>
            <label class="radio-inline">
                <input type="radio" name="type" value="Photo" <?php echo ($type =='Photo')?'checked':'' ?> >Photo
            </label>
        </div>
        <div>
            <label class="radio-inline">
                <input type="radio" name="type" value="Video" <?php echo ($type =='Video')?'checked':'' ?>>Video
            </label>
        </div>
        <div>
            <label class="radio-inline">
                <input type="radio" name="type" value="Audio" <?php echo ($type =='Audio')?'checked':'' ?>>Audio
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2">Description</label>
    <div class="col-sm-10">
        <input name="desc" type="text" title="Description" class="form-control" id="desc" value="{{$desc}}">
    </div>
</div>

<div class="form-group" id="photos_upload">
    <label class="control-label col-sm-2">Upload Media</label>
    <div class="col-sm-10">

        @if (isset($row->title) && $row->photos_url != null)
            <p>
                <a data-lightbox="roadtrip" href="{{asset($url_foto)}}">
                    <img src="{{asset($url_foto)}}" style="max-width: 160px" title="Image for Photos">
                </a>
                <i class="fa fa-arrow-right" style="size: 120px;"></i>
                <a data-lightbox="roadtrip" href="{{asset($url_foto)}}" id="previewImgLink">
                    <img src="{{asset($url_foto)}}" id="previewImg" style="max-width: 160px" title="Image for Photos">
                </a>
            </p>
        @else
            <input name="photos_url" type="file" title="Upload Media" class="form-control" id="photoUpload" accept="image/*">
            <br>
            <a data-lightbox="roadtrip" href="{{asset('assets/img_sqr.jpg')}}" id="previewImgLink">
                <img src="{{asset('assets/img_sqr.jpg')}}" id="previewImg" style="max-width: 160px" title="Image for Photos">
            </a>
        @endif

    </div>
</div>

<div class="form-group" id="non_photos_upload">
    <label class="control-label col-sm-2">URL Media</label>
    <div class="col-sm-10">
        <input name="non_photos_url" type="text" title="URL Media" class="form-control" id="urlInsert" value="{{$url_media}}">
    </div>
</div>
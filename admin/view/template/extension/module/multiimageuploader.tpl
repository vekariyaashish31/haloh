<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-ppexpress" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a> <a href="<?php echo $search; ?>" data-toggle="tooltip" title="<?php echo $button_search; ?>" class="btn btn-info"><i class="fa fa-search"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if (isset($error['error_warning'])) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error['error_warning']; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> Module settings</h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-multiimage" class="form-horizontal">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
            <li><a href="#tab-about" data-toggle="tab">About</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
              <div class="tab-pane active" id="tab-api-details">
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="entry-folder"><?php echo $entry_folder; ?></label>
                  <div class="col-sm-10">
                    <?php echo DIR_IMAGE;?><input type="text" name="multiimageuploader_folder" value="<?php echo $multiimageuploader_folder; ?>" placeholder="example: multiimage_folder/" id="entry-folder" class="form-control" />
                    <?php if (isset($error['error_folder'])) { ?>
                    <div class="text-danger"><?php echo $error['error_folder']; ?></div>
                    <?php } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="entry-segment"><?php echo $entry_segmet; ?></label>
                  <div class="col-sm-10">
                   <select name="multiimageuploader_segment" id="entry-segment" class="form-control">
                    <option value="" <?php if (!$multiimageuploader_segment){ echo " selected";}?>><?php echo $entry_segmet_by_none;?></option>
                    <option value="date" <?php if ($multiimageuploader_segment == "date"){ echo " selected";}?>><?php echo $entry_segmet_by_date;?></option>
                   </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="entry-def"><?php echo $entry_delete_def_image; ?></label>
                  <div class="col-sm-10">
                     <select name="multiimageuploader_deletedef" id="entry-def" class="form-control">
                      <option value="0" <?php if (!$multiimageuploader_deletedef){ echo " selected";}?>><?php echo $text_no;?></option>
                      <option value="1" <?php if ($multiimageuploader_deletedef){ echo " selected";}?>><?php echo $text_yes;?></option>
                     </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-about">
      			  <h3>Welcome and thank you for purchsing our module!</h3>
      			  <div class="panel panel-default">
      			    <div class="panel-heading"><h4 class="panel-title">About This Module</h4></div>
      			    <div class="panel-body"><strong>Multi Image Uploader</strong> is another great module developed by <a href="http://bit.ly/1vHShWu" target="_blank">Sharley's</a></div>
      			  </div>
      			  <div class="panel panel-default">
      			    <div class="panel-heading"><h4 class="panel-title">Need Support?</h4></div>
      			    <div class="panel-body">
      			      <a href="mailto: support@sharleys.co.uk?subject=Multi Image Uploader (OCV2) support on <?php echo HTTP_CATALOG;?>" class="btn btn-success"> <i class="fa fa-life-ring fa-lg"></i> Contact Us</a>
      			      <a href="http://on.fb.me/1inp4Ik" target="_blank" class="btn btn-primary"> <i class="glyphicon glyphicon-thumbs-up"></i> Follow us on Facebook</a>
      			    </div>
      			  </div>
      			  <div class="panel panel-default">
      			    <div class="panel-heading"><h4 class="panel-title">Happy about our modules?</h4></div>
      			    <div class="panel-body">Please give as your vote &amp; comment on <a href="http://bit.ly/1vHShWu" target="_blank">Opencart Extension Store</a></div>
      			  </div>
              </div>            
            </div>
          </div> 
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?> 
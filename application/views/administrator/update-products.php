 <!-- jquery file upload Frame work -->
    <link href="<?php echo base_url(); ?>admintemplate/bower_components/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>admintemplate/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/lightbox2/dist/css/lightbox.min.css">
    

    
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Songs</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Songs</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Update Song</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Product edit card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Song Update</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-12">
                                     <?php echo form_open_multipart('administrator/update_products_data'); ?>
                                     <input class="form-control" value="<?php echo $productsDetails['id']; ?>" name="id" type="hidden">
                                        <div class="product-edit">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label for="img">Song Name</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-ui-user"></i></span>
                                                                    <input class="form-control" value="<?php echo $productsDetails['name']; ?>" name="name" placeholder="Song Name" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="img">Music Composer(s)</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-man-in-glasses"></i></span>
                                                                    <input class="form-control" name="composer" placeholder="Music Composer(s)" type="text" value="<?php echo $productsDetails['composer']; ?>" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label for="img">Lyric Writter(s)</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-ui-note"></i></span>
                                                                    <input class="form-control" name="writter" placeholder="Lyric Writter(s)" type="text" value="<?php echo $productsDetails['writter']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="img">Singer(s)</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-cur-dollar"></i></span>
                                                                    <input class="form-control" name="singer" placeholder="Singer(s)" type="text" value="<?php echo $productsDetails['singer']; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label for="img">Movie</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-numbered"></i></span>
                                                                    <input class="form-control" name="movie" placeholder="Movie" type="text" value="<?php echo $productsDetails['movie']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="img">Categories</label>
                                                                <select name="cat_id" class="form-control form-control-primary">
                                                                    <?php foreach($product_categories as $post) : ?>
                                                                         <option value="<?php echo $post['id']; ?>" 
                                                                         <?php if($productsDetails['cat_id'] == $post['id']){ echo "selected" ; } ?> ><?php echo $post['name']; ?></option>
                                                                     <?php endforeach; ?>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                    <input class="form-control" name="short_description" placeholder="Product Short Description" type="text" maxlength="100" value="<?php //echo $productsDetails['short_description']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-align-left"></i></span>
                                                                    <input class="form-control" name="color" placeholder="Color" type="text" value="<?php //echo $productsDetails['color']; ?>">
                                                                </div>
                                                            </div>
                                                            
                                                        </div> -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label for="img">Song Tag</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-underline"></i></span>
                                                                    <input class="form-control" name="tag" placeholder="Product Tag" type="text" value="<?php echo $productsDetails['tag']; ?>">
                                                                </div>
                                                            </div>
                                                             <div class="col-sm-6">
                                                                <label for="img">Status</label><br>
                                                                   <div class="checkbox-fade fade-in-primary checkbox">
                                                                <label>
                                                                    <input value="1"  <?php if($productsDetails['status'] == '1'){ echo "checked" ; } ?> type="checkbox" name="status" class="form-control">
                                                                    <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                   Change Status Of The Song
                                                                </label>
                                                            </div>
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label for="img">Click me to upload Thumbnail</label>
                                                                <img src="<?php echo site_url();?>assets/images/products/<?php echo $productsDetails['image']; ?>" width="50px">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-clip"></i></span>
                                                                        <input name="songthumbnail" class="form-control" type="file">
                                                                       </div>
                                                            </div>
                                                            
                                                            
                                                             <div class="col-sm-6">
                                                                <label for="img">Click me to upload Song</label>
                                                                [<?php echo $productsDetails['song']; ?>]
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-clip"></i></span>
                                                                        <input name="userfile" class="form-control" type="file">
                                                                       </div>
                                                            </div>
                                                        </div>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                     <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                        <textarea name="description" placeholder="Please Provide a valid Formated Product Description!" id="editor1"><?php echo $productsDetails['description']; ?></textarea>
                                                                    </div>     
                                                                </div>
                                                            </div>
                                                             <!-- 
                                                              <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                                    <input class="form-control" name="size" placeholder="Size" type="text" value="<?php //echo $productsDetails['size']; ?>">
                                                                </div>
                                                            </div> <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>Upload Product Multiple Image </h5>
                                                                            <div class="card-header-right">  
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <input type="file" name="imgFiles[]" id="filer_input" multiple="multiple">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                 <?php foreach($productImages as $postImg) : ?>
                                                                    <div class="col-lg-2 col-sm-3">
                                                                        <div class="thumbnail">
                                                                            <div class="thumb">
                                                                                <a href="<?php echo site_url();?>assets/images/products_multiple/<?php echo $postImg['file_name']; ?>" data-lightbox="1" data-title="My caption 1">
                                                                                    <img src="<?php echo site_url();?>assets/images/products_multiple/<?php echo $postImg['file_name']; ?>" alt="" class="img-fluid img-thumbnail">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                                   
                                                            
                                                                </div>
                                                             <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>SEO DETAILS</h5>
                                                                            <div class="card-header-right">
                                                                                <i class="icofont icofont-rounded-down"></i>
                                                                                <i class="icofont icofont-refresh"></i>
                                                                                <i class="icofont icofont-close-circled"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="icofont icofont-underline"></i></span>
                                                                                    <input class="form-control" name="meta_title" placeholder="Meta Title" type="text" value="<?php echo $productsDetails['meta_title']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-ui-keyboard"></i></span>
                                                                                        <input class="form-control" name="meta_tag" placeholder="Meta Tag" type="text" value="<?php echo $productsDetails['meta_tag']; ?>">
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                                        <textarea class="form-control" name="meta_desc" placeholder="Meta Description" value="<?php echo $productsDetails['meta_desc']; ?>"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                             <div class="form-group">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product edit card end -->
                </div>
                        <!-- Basic Form Inputs card end -->
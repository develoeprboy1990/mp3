 <!-- jquery file upload Frame work -->
    <link href="<?php echo base_url(); ?>admintemplate/bower_components/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>admintemplate/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Products</h4>
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
                        <li class="breadcrumb-item"><a href="#!">Add Song</a>
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
                                <h5>Song Add</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-12">
                                     <?php echo form_open_multipart('administrator/create_multiple_product'); ?>
                                        <div class="product-edit">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label for="img">Category</label>
                                                                <select name="cat_id" class="form-control form-control-primary">
                                                                    <option value="opt1">Select a Category</option>
                                                                    <?php foreach($product_categories as $post) : ?>
                                                                         <option value="<?php echo $post['id']; ?>"><?php echo $post['name']; ?></option>
                                                                     <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <!-- <div class="col-sm-6">
                                                                <label for="img">Song Tag</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-underline"></i></span>
                                                                    <input class="form-control" name="tag" placeholder="Song Tag" type="text">
                                                                </div>
                                                            </div> -->
                                                        </div> 
                                                         <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5>Upload Multiple Songs</h5>
                                                                        <div class="card-header-right">  
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <input type="file" name="imgFiles[]" id="filer_input" multiple="multiple">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 

                                                               <!--  <div class="row">
                                                                <div class="col-sm-12">
                                                                     <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                        <textarea name="description" placeholder="Please Provide a valid Formated Product Description!" id="editor1"></textarea>
                                                                    </div>     
                                                                </div>
                                                            </div> -->
                                                             <!-- <div class="row">
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
                                                                                    <input class="form-control" name="meta_title" placeholder="Meta Title" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-ui-keyboard"></i></span>
                                                                                        <input class="form-control" name="meta_tag" placeholder="Meta Tag" type="text">
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                                                        <textarea class="form-control" name="meta_desc" placeholder="Meta Description"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->

                                                             <div class="form-group">
                                                                <input value="1" type="hidden" name="status">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
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
             

   


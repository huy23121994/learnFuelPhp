<div class="right_col" role="main">
    <div>
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Tags
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><a href="/admin/tags">Tags</a> / <?php echo $tag->tag_name ?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                        <?php echo render('tag/_form_edit') ?>
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
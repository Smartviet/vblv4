<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Advanced Tables</li>
                <li class="active">Sản Phẩm</li>
            </ol>

            <h1>Sản phẩm</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>Danh sách sản phẩm</h4>
                            <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Mã SP</th>
                                    <th>Ảnh SP</th>
                                    <th>Tình trạng</th>

                                    <th>moi them vao</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($getAllProducts as $key=>$getAllProduct): ?>
                                <tr class="gradeC">
                                    <td><?= $getAllProduct->productID;?></td>
                                    <td><?= $getAllProduct->productName;?></td>
                                    <td><?= $getAllProduct->productCode;?></td>
                                    <td><img src="<?= base_url().$getAllProduct->productImage ?>" width="74px" height="59px"/></td>
                                    <?php  if($getAllProduct->tinhtranghang == 1){ ?>
                                        <td>
                                            <div class="col-sm-3 control-label"> <!--  control-label needed for positioning -->
                                                <div class="toggle"></div>
                                            </div>
                                        </td>
                                    <?php }else if($getAllProduct->tinhtranghang == 2) { ?>
                                        <td><img src="<?= base_url().'public/libs/icons/b_drop.png'; ?>"/></td>
                                    <?php }else { ?>
                                        <td class="center"><img src="<?= base_url().'public/libs/icons/clock_48.png'; ?>" width='25px' height='12px'/></td>
                                    <?php } ?>
                                    <td class="center">C</td>

                                </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

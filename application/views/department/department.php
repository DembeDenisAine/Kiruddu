
<div class="row">
    <div class="col-sm-12">
        <div  class="panel panel-default thumbnail">
            <?php
             if($this->permission->method('add_department','create')->access()){
            ?>
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-success" href="<?php echo base_url("department/create") ?>"> <i class="fa fa-plus"></i>  <?php echo display('add_department') ?> </a>  
                </div>
            </div>
            <?php } ?>

            <?php
            if($this->permission->method('department_list','read')->access()  || $this->permission->method('department_list','update')->access() || $this->permission->method('department_list','delete')->access()){
            ?>
            <div class="panel-body">
                <!-- Nav tabs --> 
                <ul class="col-xs-12 nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"> 
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab"> <i class="fa fa-list"></i> <?php echo display('departments') ?></a>
                    </li>

                </ul>  

                <!-- Tab panes --> 
                <div class="col-xs-12 tab-content">
                    <br>
                    <!-- INFORMATION -->
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="row">
                            <div class="col-md-12"> 
                                <table class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo display('serial') ?></th>
                                            <th><?php echo display('department_name') ?></th>
                                            <th><?php echo display('description') ?></th>
                                            <th><?php echo display('status') ?></th>
                                            <?php
                                            if($this->permission->method('department_list','update')->access() || $this->permission->method('department_list','delete')->access()){
                                            ?>
                                            <th><?php echo display('action') ?></th>
                                            <?php } ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($departments)) { ?>
                                            <?php $sl = 1; ?>
                                            <?php foreach ($departments as $department) { ?>
                                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                                    <td><?php echo $sl; ?></td>
                                                    <td><?php echo $department->name; ?></td>
                                                    <td><?php echo character_limiter($department->description, 60); ?></td>
                                                    <td><?php echo (($department->status==1)?display('active'):display('inactive')); ?></td>

                                                     
                                                    <?php
                                                     if($this->permission->method('department_list','update')->access() || $this->permission->method('department_list','delete')->access()){
                                                     ?>
                                                    <td class="center">
                                                    <?php
                                                     if($this->permission->method('department_list','update')->access()){
                                                     ?>
                                                        <a href="<?php echo base_url("department/edit/$department->dprt_id") ?>" class="btn btn-xs  btn-primary"><i class="fa fa-edit"></i></a> 
                                                    <?php } ?>

                                                     <?php
                                                     if($this->permission->method('department_list','delete')->access()){
                                                     ?>
                                                        <a href="<?php echo base_url("department/delete/$department->dprt_id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i></a> 
                                                     <?php } ?>

                                                    </td>
                                                    <?php } ?>

                                                </tr>
                                                <?php $sl++; ?>
                                            <?php } ?> 
                                        <?php } ?> 
                                    </tbody>
                                </table>  <!-- /.table-responsive -->
                            </div>
                        </div>
                    </div> 

                    <div role="tabpanel" class="tab-pane" id="language">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo display('serial') ?></th>
                                            <th><?php echo display('department_name') ?></th>
                                            <th><?php echo display('language') ?></th>
                                            <th><?php echo display('name') ?></th>
                                            <th><?php echo display('description') ?></th>
                                            <th><?php echo display('status') ?></th>
                                            <?php
                                            if($this->permission->method('department_list','update')->access() || $this->permission->method('department_list','delete')->access()){
                                            ?>
                                            <th><?php echo display('action') ?></th>
                                            <?php } ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($departLang)) { ?>
                                            <?php $sl = 1; ?>
                                            <?php foreach ($departLang as $department) { ?>
                                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                                    <td><?php echo $sl; ?></td>
                                                    <td><?php echo $department->dname; ?></td>
                                                    <td><?php echo $department->language; ?></td>
                                                    <td><?php echo $department->name; ?></td>
                                                    <td><?php echo character_limiter($department->description, 60); ?></td>
                                                    <td><?php echo (($department->status==1)?display('active'):display('inactive')); ?></td>

                                                     
                                                    <?php
                                                     if($this->permission->method('department_list','update')->access() || $this->permission->method('department_list','delete')->access()){
                                                     ?>
                                                    <td class="center">
                                                    <?php
                                                     if($this->permission->method('department_list','update')->access()){
                                                     ?> 
                                                        <a href="<?php echo base_url("department/edit_lang/$department->id") ?>" class="btn btn-xs  btn-primary"><i class="fa fa-edit"></i></a> 
                                                    <?php } ?>

                                                     <?php
                                                     if($this->permission->method('department_list','delete')->access()){
                                                     ?>
                                                        <a href="<?php echo base_url("department/delete_lang/$department->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i></a> 
                                                     <?php } ?>

                                                    </td>
                                                    <?php } ?>

                                                </tr>
                                                <?php $sl++; ?>
                                            <?php } ?> 
                                        <?php } ?> 
                                    </tbody>
                                </table>  <!-- /.table-responsive -->
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <?php 
            }
            else{
            ?>
            <div class="row">
             <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
             <h4><?php echo display('you_do_not_have_permission_to_access_please_contact_with_administrator');?>.</h4>
                        </div>
                    </div>
                </div>
             </div>
            </div>
            <?php
            }
             ?>

        </div>
    </div>
</div>


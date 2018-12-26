<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pages
            <small>customize your pages</small>
          </h1>
          
        </section>
    
        <!-- Main content -->
        <section class="content">
            <div class="col-sm-6">
                <div class="box box-solid">
                    <div class="box-header with-border">
                    
                    <h3 class="box-title">
                      Create
                    <form method="POST" action="<?php echo e(route('admin.theme.page.create')); ?>">
                        <?php echo csrf_field(); ?>
                      <input type="text" name="title">
                      <select name="page_type">
                        <?php $__currentLoopData = $page_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                      <button type="submit" class="btn btn-primary btn-sm">New</button>
                      </form>
                    </h3>
                    </div>
                    <div class="box-body">
                          <ol>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <form action="<?php echo e(route('admin.theme.page_edit')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                  <li>   
                                    <div class="jumbotron">
                                        <input name="id" value="<?php echo e($page->id); ?>" hidden>    
                                      Title: <?php echo e($page->title); ?><br>
                                      Slug: <?php echo e($page->slug); ?> <br>
                                      type: <?php echo e($page->page_type->name); ?> <br>
                                      <?php if($page->page_type->name == 'custom'): ?>
                                      Body: <input name="body" value="<?php echo e($page->tags); ?>">
                                      <button type="submit" class="btn btn-primary">Edit</button>
                                      <?php endif; ?>  
                                    </div>
                                  </li>
                            </form>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ol>
                    </div>
                </div>
              </div>
              <div class="col-sm-6">
                  <div class="box box-solid">
                      <div class="box-header with-border">
                      <i class="fa fa-text-width"></i>
          
                      <h3 class="box-title">Widgets</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">  
                      <ol>
                              <?php $__currentLoopData = $widgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <li>   <?php echo e($widget->name); ?>  </li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ol>
                      </div>
                      <!-- /.box-body -->
                  </div>
                </div>
        


        </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
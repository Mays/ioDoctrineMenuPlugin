<div id="sf_admin_container" class="clearfix">

  <h1 class="admin-title">Reorder Menu "<?php echo $menu->name ?>"</h1>

  <div id="sf_admin_content">
    <div id="sf_admin_actions_container">
      <ul class="sf_admin_actions">
        <li class="sf_admin_action_new"><?php echo link_to('Create a new menu', 'io_doctrine_menu_new') ?></li>
      </ul>

      <?php include_partial('io_doctrine_menu/reorderList', array('menu' => $menu)) ?>
    </div>

  </div>
</div>
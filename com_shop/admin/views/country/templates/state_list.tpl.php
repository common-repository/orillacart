<div class="com_shop">    <form name='adminForm' action="<?php echo admin_url('admin.php?page=component_com_shop-country'); ?>" method='post'>        <input type='hidden' name='task' value='delete_state' />        <input type='hidden' name='country_id' value='<?php echo $this->country_id; ?>' />        <p class="search-box">            <input type='text' name='keyword' value='<?php echo strings::htmlentities($this->input->get('keyword', '', 'STRING')); ?>' />            <button class="btn btn-small" onclick="document.adminForm.task.value = 'state_list';                    document.adminForm.submit();">                <i class="icon-search ">                </i>                <?php _e('search', 'com_shop'); ?>            </button>        </p>        <br />        <br />        <table width="100%" class="wp-list-table widefat fixed posts">            <thead>                <tr>                    <th  class="title">#</th>                    <th style='padding:0;' class="title"><input type="checkbox" id='toggle' value="" name="toggle"></th>                    <th width="50%" class="title"><?php _e('State Name', 'com_shop'); ?></th>                    <th width="20%" class="title"><?php _e('State Code (3)', 'com_shop'); ?></th>                    <th width="20%" class="title"><?php _e('State Code (2)', 'com_shop'); ?></th>                </tr>            </thead>            <tbody>                <?php                $c = 0;                while ($o = $this->res->nextObject()) {                    $c++;                    ?>                    <tr class="row<?php echo (int) (bool) $c % 2; ?>">                        <td><?php echo $c; ?></td>                        <td><input type="checkbox"  value="<?php echo $o->state_id; ?>" name="state_id[]" ></td>                        <td>                            <div class="btn-group" id="toolbar-Link">                                <button onclick="window.location.href = '<?php echo admin_url('admin.php?page=component_com_shop-country&task=add_state&state_id=' . $o->state_id); ?>';                                        return false;" class="btn btn-small">                                    <span class="icon-edit">                                    </span>                                    <?php echo strings::htmlentities($o->state_name); ?>                                </button>                            </div>                        </td>                        <td><?php echo strings::htmlentities($o->state_3_code); ?></td>                        <td><?php echo strings::htmlentities($o->state_2_code); ?></td>                    </tr>                <?php } ?>            </tbody>        </table>        <div class="limit">            <?php echo $this->pagination->getList(); ?>            <?php echo $this->pagination->getPagesCounter(); ?>        </div>    </form></div>
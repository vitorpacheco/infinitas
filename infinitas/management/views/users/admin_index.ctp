<?php
    /**
     * Comment Template.
     *
     * @todo -c Implement .this needs to be sorted out.
     *
     * Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     *
     * Licensed under The MIT License
     * Redistributions of files must retain the above copyright notice.
     *
     * @filesource
     * @copyright     Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     * @link          http://infinitas-cms.org
     * @package       sort
     * @subpackage    sort.comments
     * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
     * @since         0.5a
     */

    echo $this->Form->create( 'User', array( 'url' => array( 'controller' => 'users', 'action' => 'mass', 'admin' => 'true' ) ) );

        $massActions = $this->Core->massActionButtons(
            array(
                'add',
                'edit',
                'copy',
                'toggle',
                'delete'
            )
        );
        echo $this->Core->adminIndexHead( $this, $paginator, null, $massActions );
?>
<div class="table">
    <?php echo $this->Core->adminTableHeadImages(); ?>
    <?php  ?>
    <table class="listing" cellpadding="0" cellspacing="0">
        <?php
            echo $this->Core->adminTableHeader(
                array(
                    $this->Form->checkbox( 'all' ) => array(
                        'class' => 'first',
                        'style' => 'width:25px;'
                    ),
                    $this->Paginator->sort( 'username' ),
                    $this->Paginator->sort( 'email' ),
                    $this->Paginator->sort( 'birthday', true ) => array(
                        'style' => 'width:75px;'
                    ),
                    $this->Paginator->sort( 'created', true ) => array(
                        'style' => 'width:75px;'
                    ),
                    $this->Paginator->sort( 'modified', true ) => array(
                        'style' => 'width:75px;'
                    ),
                    __( 'Active', true ) => array(
                        'style' => 'width:50px;'
                    )
                )
            );

            $i = 0;
            foreach ( $users as $user )
            {
                ?>
                	<tr class="<?php echo $this->Core->rowClass( $i ); ?>">
                        <td><?php echo $this->Form->checkbox( $user['User']['id'] ); ?>&nbsp;</td>
                		<td>
                			<?php echo $this->Html->link( $user['User']['username'], array('action' => 'edit', $user['User']['id'])); ?>&nbsp;
                		</td>
                		<td>
                			<?php echo $this->Text->autoLinkEmails( $user['User']['email'] ); ?>&nbsp;
                		</td>
                		<td>
                			<?php
                				if ($user['User']['birthday']) {
                					echo $this->Time->niceShort( $user['User']['birthday'] );
                				}
                				else{
									echo __('Not Set', true);
								}
	                		?>&nbsp;
                		</td>
                		<td>
                			<?php echo $this->Time->niceShort( $user['User']['created'] ); ?>&nbsp;
                		</td>
                		<td>
                			<?php echo $this->Time->niceShort( $user['User']['modified'] ); ?>&nbsp;
                		</td>
                		<td>
                			<?php echo $this->Infinitas->status( $user['User']['active'] ); ?>&nbsp;
                		</td>
                	</tr>
                <?php
            }
        ?>
    </table>
    <?php echo $this->Form->end(); ?>
</div>
<?php echo $this->element( 'pagination/navigation' ); ?>
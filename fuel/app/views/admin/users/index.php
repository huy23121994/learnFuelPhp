<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Users</h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All users</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                        <table class="table table-striped" id="list-item" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					                <th>Username</th>
					                <th>Full name</th>
					                <th>Email</th>
					                <th>Address</th>
					                <th>Role</th>
					                <th width="140px">Created Time</th>
					            </tr>
					        </thead>
					        <tfoot>
					            <tr>
					                <th>Username</th>
					                <th>Full name</th>
					                <th>Email</th>
					                <th>Address</th>
					                <th>Role</th>
					                <th>Created Time</th>
					            </tr>
					        </tfoot>
					        <tbody style="text-transform: capitalize;">
					        <?php foreach($users as $user) :?>
					            <tr>
					                <td><a href="<%= user_path(user) %>" class="text-success">
					                	<u><?php echo $user->username ?></u>
					                </a></td>
					                <td>
					                <?php
					                	echo $user->profile_fields
					                ?>
					                </td>
					                <td><?php echo $user->email ?></td>
					                <td><?php echo $user->profile_fields ?></td>
					                <td><?php echo $user->group ?></td>
					                <td><?php echo $user->created_at ?></td>
					            </tr>
					        <?php endforeach ?>
					        </tbody>
					    </table>
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
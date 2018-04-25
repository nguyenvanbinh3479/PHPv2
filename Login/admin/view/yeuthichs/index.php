<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div class="container">
    <div class="row">
        <h3>Danh sach yeuthich</h3>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>baihat</th>
            <th>user</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($list_yeuthich as $yeuthich) { ?>    
          <tr>
            <td><?php echo increment_once($index); ?></td>
            <td><?php echo $yeuthich->baihat_id; ?></td>
            <td><?php echo $yeuthich->user_id; ?></td>
            <td><a href="admin.php?c=yeuthich&a=edit&id=<?php echo $yeuthich->baihat_id; ?>">Edit</a></td>
            <td><a href="admin.php?c=yeuthich&a=delete&id=<?php echo $yeuthich->baihat_id; ?>">Delete</a></td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>
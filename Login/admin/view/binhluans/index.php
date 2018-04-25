<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div class="container">
    <div class="row">
        <h3>Danh sach binhluan</h3>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>bai hat</th>
            <th>binhluan</th>
            <th>noi_dung</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($list_binhluan as $binhluan) { ?>    
          <tr>
            <td><?php echo increment_once($index); ?></td>
            <td><?php echo $binhluan->baihat_id; ?></td>
            <td><?php echo $binhluan->user_id; ?></td>
            <td><?php echo $binhluan->noi_dung; ?></td>
            <td><a href="admin.php?c=binhluan&a=edit&id=<?php echo $binhluan->user_id; ?>">Edit</a></td>
            <td><a href="admin.php?c=binhluan&a=delete&id=<?php echo $binhluan->user_id; ?>">Delete</a></td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>
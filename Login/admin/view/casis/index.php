<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div class="container">
    <div class="row">
        <h3>Danh sach casi</h3>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>ten</th>
            <th>thong_tin</th>
            <th>anh</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($list_casi as $casi) { ?>    
          <tr>
            <td><?php echo increment_once($index); ?></td>
            <td><?php echo $casi->ten; ?></td>
            <td><?php echo $casi->thong_tin; ?></td>
            <td><?php echo $casi->anh; ?></td>
            <td><a href="admin.php?c=casi&a=edit&id=<?php echo $casi->id; ?>">Edit</a></td>
            <td><a href="admin.php?c=casi&a=delete&id=<?php echo $casi->id; ?>">Delete</a></td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>
<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div class="container">
    <div class="row">
        <h3>Danh sach theloai</h3>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>ten</th>
            <th>anh</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($list_theloai as $theloai) { ?>    
          <tr>
            <td><?php echo increment_once($index); ?></td>
            <td><?php echo $theloai->ten; ?></td>
            <td><?php echo $theloai->anh; ?></td>
            <td><a href="admin.php?c=theloai&a=edit&id=<?php echo $theloai->id; ?>">Edit</a></td>
            <td><a href="admin.php?c=theloai&a=delete&id=<?php echo $theloai->id; ?>">Delete</a></td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>
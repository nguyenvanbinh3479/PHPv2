<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div class="container">
    <div class="row">
        <h3>Danh sach baihat</h3>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Ca Si</th>
            <th>Album</th>
            <th>The Loai</th>
            <th>Ten</th>
            <th>Anh</th>
            <th>Loi Bai Hat</th>
            <th>Link</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($list_baihat as $baihat) { ?>    
          <tr>
            <td><?php echo increment_once($index); ?></td>
            <td><?php echo $baihat->casi_id; ?></td>
            <td><?php echo $baihat->album_id; ?></td>
            <td><?php echo $baihat->theloai_id; ?></td>
            <td><?php echo $baihat->ten; ?></td>
            <td><?php echo $baihat->anh; ?></td>
            <td><?php echo $baihat->loi_bai_hat; ?></td>
            <td><?php echo $baihat->link; ?></td>
            <td><a href="admin.php?c=baihat&a=edit&id=<?php echo $baihat->id; ?>">Edit</a></td>
            <td><a href="admin.php?c=baihat&a=delete&id=<?php echo $baihat->id; ?>">Delete</a</td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>
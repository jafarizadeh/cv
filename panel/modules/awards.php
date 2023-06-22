<?php
$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `awards` ORDER BY `id` DESC");
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Awards $ Certifications</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="15%">Title</th>
                            <th width="50%">link</th>
                            <th width="15%">type</th>
                            <th width="15%">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($select)) : ?>
                            <tr id="tr_<?= $row['id']; ?>">
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['title']; ?></td>
                                <td><?= $row['link']; ?></td>
                                <td><?= $row['type']; ?></td>
                                <td>
                                    <span onclick="removeRecordFromTable('<?= $row['id']; ?>', 'tr_<?= $row['id']; ?>', 'awards');" class="fa fa-trash" style="color:firebrick; cursor: pointer"></span>
                                    &nbsp;
                                    &nbsp;
                                    <a href="<?= $GLOBALS['PANEL_ROUTE_MAIN_ADR']; ?>add_award&id=<?=$row['id'];?>">
                                        <span class="fa fa-edit" style="color:cadetblue; cursor: pointer"></span>
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function removeRecordFromTable(rowId, elemId, mod = 'awards') {
        $('#' + elemId).css('background', 'orange');
        var confirmation = confirm("are you sure to delete this record from database?");
        if (confirmation) {
            $.post('controllers/ajax.php', {
                action: 'remove_from_table',
                recordId: rowId,
                mod: mod
            }, function(data) {
                data = data.trim();
                data = JSON.parse(data);
                if (data.result) {
                    $('#' + elemId).remove();
                } else {
                    $('#' + elemId).css('background', '#ffffff');
                }
            });
        } else {
            $('#' + elemId).css('background', '#ffffff');
        }
    }
</script>
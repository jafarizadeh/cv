<?php
$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `experience` ORDER BY `id` DESC");
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Experiences</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="7%">Title</th>
                            <th width="10%">Sub title</th>
                            <th width="40%">Content</th>
                            <th width="12%">from</th>
                            <th width="12%">to</th>
                            <th width="16%">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($select)) : ?>
                            <tr id="tr_<?= $row['id']; ?>">
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['title']; ?></td>
                                <td><?= $row['subtitle']; ?></td>
                                <td><?= $row['content']; ?></td>
                                <td><?= $row['fromDate']; ?></td>
                                <td><?= $row['toDate']; ?></td>
                                <td>
                                    <span onclick="removeRecordFromTable('<?= $row['id']; ?>', 'tr_<?= $row['id']; ?>', 'exp');" class="fa fa-trash" style="color:firebrick; cursor: pointer"></span>
                                    &nbsp;
                                    &nbsp;
                                    <a href="<?= $GLOBALS['PANEL_ROUTE_MAIN_ADR']; ?>add_exp&id=<?=$row['id'];?>">
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
    function removeRecordFromTable(rowId, elemId, mod = 'exp') {
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
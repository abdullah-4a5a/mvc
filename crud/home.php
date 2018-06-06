<?php
require_once 'db.php';

$sql = 'SELECT * FROM people';
$statement = mysqli_query($conn, $sql);
$people = mysqli_fetch_all($statement, MYSQLI_ASSOC);
mysqli_free_result($statement);
mysqli_close($conn);
 ?>
<?php require 'header.php'; ?>
<div>
  <div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Vorraad</th>
          <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person['id']; ?></td>
            <td><?= $person['name']; ?></td>
            <td><?= $person['email']; ?></td>
            <td><?= $person['voorraad']; ?></td>
            <td
            <td>
              <a href="crudhandler.php?edit&id=<?= $person['id'] ?>" name="edit" class="btn btn-info">Edit</a>
              <?php if($person['voorraad'] == 0):?>
                <div class="tooltip"><i class="fa fa-info-circle"></i>
                  <span class="tooltiptext">Geen voorraad</span>
                </div>
              <?php else: ?>
                <a href="crudhandler.php?delete&id=<?= $person['id'] ?>" name="delete" class='btn btn-danger'>Delete</a>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

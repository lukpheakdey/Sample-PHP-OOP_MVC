<?php require_once "view/layout/header.php" ?>

<div class="container top-padding">
    <div class="top-padding-btn">
        <a href="index.php?action=add-patient">
            <button class="btn btn-outline-primary">
                Add Patient
            </button>    
        </a>
    </div>
   
    <table class="table table-hover ">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
                if (! empty($result)) {
                    foreach ($result as $k => $v) {
                    ?>
                <tr>
                    <td><?php echo $result[$k]["id"]; ?></td>
                    <td><?php echo $result[$k]["name"]; ?></td>
                    <td><?php echo $result[$k]["age"]; ?></td>
                    <td><?php echo $result[$k]["phone"]; ?></td>
                    <td>
                        <a href="index.php?action=edit-patient&id=<?php echo $result[$k]["id"]; ?>">
                            <button class="btn btn-outline-secondary btn-sm">
                                Edit
                            </button>
                        </a>
                       
                        <a href="index.php?action=delete-patient&id=<?php echo $result[$k]["id"]; ?>" onclick='javascript:confirmationDelete($(this));return false;'>
                            <button class="btn btn-outline-danger btn-sm">
                                Delete 
                            </button>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>    
        </tbody>
    </table>
</div>

</body>
</html>
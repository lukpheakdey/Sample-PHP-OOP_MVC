<?php require_once "view/layout/header.php" ?>

    <form name="frmAdd" method="post" action="" id="frmAdd" onSubmit="return validate();">
        <div class="container top-padding">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label> Name </label>
                    <input type="text" class="form-control" id="name" name="name"  value="<?php echo $result[0]["name"]; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label> Age </label>
                    <input type="number" class="form-control" id="age" name="age"  value="<?php echo $result[0]["age"]; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label> Phone </label>
                    <input type="text" class="form-control" id="phone" name="phone"  value="<?php echo $result[0]["phone"]; ?>">
                </div>
                <div>
                    <input class="btn btn-info" type="submit" name="add" id="btnSubmit" value="Update" />
                </div>
            </div>
        </div>
    </form>

</body>
</html>
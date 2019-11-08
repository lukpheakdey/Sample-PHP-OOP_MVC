<?php require_once "view/layout/header.php" ?>

    <form name="frmAdd" method="post" action="" id="frmAdd" onSubmit="return validate();">
        <div class="container top-padding">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label> Name </label> <span id="name-info" class="info"></span><br />
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group col-md-2">
                    <label> Age </label> <span id="age-info" class="info"></span><br />
                    <input type="number" class="form-control" id="age" name="age">
                </div>
                <div class="form-group col-md-4">
                    <label> Phone </label> <span id="phone-info" class="info"></span><br />
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div>
                    <input class="btn btn-success" type="submit" name="add" id="btnSubmit" value="Add New" />
                </div>
            </div>
        </div>
    </form>

</body>
</html>

